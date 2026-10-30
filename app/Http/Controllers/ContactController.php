<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Throwable;

class ContactController extends Controller
{
    private const MSG_OK = 'Dziękuję, wiadomość została wysłana. Odpowiem najszybciej, jak to możliwe.';

    public function store(Request $request): JsonResponse|RedirectResponse
    {
        // Ukryte pole - wypełniają je tylko boty. Udajemy sukces.
        if (filled($request->input('website'))) {
            return $this->respond($request, true, self::MSG_OK);
        }

        // Formularz wysłany szybciej niż w 3 s to niemal na pewno bot.
        $renderedAt = (int) $request->input('t');
        if ($renderedAt === 0 || now()->timestamp - $renderedAt < 3) {
            return $this->respond($request, false, 'Proszę spróbować ponownie za chwilę.');
        }

        $validator = Validator::make($request->all(), [
            'imie' => ['required', 'string', 'max:80'],
            'nazwisko' => ['required', 'string', 'max:80'],
            'email' => ['required', 'email', 'max:120'],
            'telefon' => ['nullable', 'string', 'max:30'],
            'temat' => ['required', Rule::in(config('site.home.topics'))],
            'tresc' => ['required', 'string', 'max:5000'],
            'zgoda' => ['accepted'],
        ]);

        if ($validator->fails()) {
            return $this->respond($request, false, 'Proszę uzupełnić wszystkie wymagane pola i zaznaczyć zgodę.');
        }

        try {
            Mail::to(config('site.mail_to'))->send(new ContactFormSubmitted($validator->validated()));
        } catch (Throwable $e) {
            report($e);

            return $this->respond($request, false, 'Nie udało się wysłać wiadomości. Proszę zadzwonić: 608 358 731.');
        }

        return $this->respond($request, true, self::MSG_OK);
    }

    private function respond(Request $request, bool $ok, string $message): JsonResponse|RedirectResponse
    {
        if ($request->expectsJson()) {
            return response()->json(['ok' => $ok, 'message' => $message], $ok ? 200 : 422);
        }

        return redirect()->to(route('home').'#formularz')->with('form_status', $ok ? 'ok' : 'blad');
    }
}
