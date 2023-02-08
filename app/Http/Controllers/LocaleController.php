<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller {

    public function update(string $locale) {
        App::setLocale($locale);
        Session::put('locale', $locale);
        return back();
    }
}
