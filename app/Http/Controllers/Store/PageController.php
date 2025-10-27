<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
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
        return view('themes.xylo.about');
    }

    /**
     * Show the services page.
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return view('themes.xylo.services');
    }

    /**
     * Show the contact us page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('themes.xylo.contact');
    }

    /**
     * Show the blog page.
     *
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        return view('themes.xylo.blog');
    }

    /**
     * Handle contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically:
        // 1. Save the message to the database
        // 2. Send an email notification
        // 3. Process the contact form data

        // For now, we'll just redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
