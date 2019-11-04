<?php

namespace App\Http\Controllers;

use App\Localization\Locale;
use Facades\App\Preferences;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function index(Request $request)
    {
        return view('preferences', [
            // @todo but how do we handle that compared to the language they're ON right now URL-wise?
            //     plus session plus cookie?? aghhhh so much to do.
            'currentResourceLanguagePreference' => auth()->user()->preferences('resource-language-preference'),
            'resourceLanguagePreferences' => Preferences::preferences()['resource-language-preference']['options'],
            'preferredLocale' => auth()->user()->preferences('language'),
            'locale' => new Locale
        ]);
    }

    public function store()
    {
        auth()->user()->preferences([
            'resource-language-preference' => request('language_preference'),
            'language' => request('locale'),
        ]);

        $redirectTo = request('locale') . '/preferences';
        return redirect($redirectTo);
    }
}
