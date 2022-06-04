<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterEmailRequest;
use App\Models\NewsletterEmail;
use Illuminate\Http\Request;

class NewsletterEmailsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(NewsletterEmailRequest $request)
    {
        NewsletterEmail::create($request->validated());
        return redirect()->back()->with('status', 'Thank you for signing up for our newsletter!');
    }

    public function show(NewsletterEmail $newsletterEmail)
    {
        //
    }

    public function edit(NewsletterEmail $newsletterEmail)
    {
        //
    }

    public function update(Request $request, NewsletterEmail $newsletterEmail)
    {
        //
    }

    public function destroy(NewsletterEmail $newsletterEmail)
    {
        //
    }
}
