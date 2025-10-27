<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the about us page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show the blog page.
     *
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        return view('pages.blog');
    }

    /**
     * Show the contact us page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
