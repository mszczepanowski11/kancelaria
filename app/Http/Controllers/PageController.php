<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'c' => $this->withNonBreakingSpaces(config('site.home')),
        ]);
    }

    public function privacy(): View
    {
        return view('legal.privacy-policy');
    }

    public function cookies(): View
    {
        return view('legal.cookies');
    }

    /**
     * Twarda spacja po jednoliterowych spójnikach (a, i, o, u, w, z),
     * żeby nie zostawały na końcu linii.
     */
    private function withNonBreakingSpaces(array $content): array
    {
        array_walk_recursive($content, function (&$value): void {
            if (is_string($value)) {
                $value = preg_replace('/ ([aiouwzAIOUWZ]) /u', " $1\u{00A0}", $value);
            }
        });

        return $content;
    }
}
