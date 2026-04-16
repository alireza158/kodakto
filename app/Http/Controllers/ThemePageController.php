<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ThemePageController extends Controller
{
    public function landing(): View
    {
        return view('theme.landing');
    }

    public function products(): View
    {
        return view('theme.products');
    }

    public function singleProduct(): View
    {
        return view('theme.single-product');
    }

    public function searchDocter(): View
    {
        return view('theme.search-docter');
    }

    public function singleDocter(): View
    {
        return view('theme.single-docter');
    }

    public function blog(): View
    {
        return view('theme.blog');
    }

    public function singleBlog(): View
    {
        return view('theme.single-blog');
    }

    public function vebinar(): View
    {
        return view('theme.vebinar');
    }

    public function aboutUs(): View
    {
        return view('theme.about-us');
    }

    public function contactUs(): View
    {
        return view('theme.contact-us');
    }
}
