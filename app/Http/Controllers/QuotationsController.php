<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuotationRequest;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuotationsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(QuotationRequest $request)
    {
        Quotation::create($request->validated());
        Mail::send('emails.new-quotation', ['fullname' => 'Safal Sharma'], function ($message) {
            $message->to('sharma@safal.com', "Sharma");
            $message->subject('New Quotation');
            $message->bcc('safal.sharma@safal.com', "Safal Sharma");
        });
        return redirect()->back()->with('status', 'We will get back to you soon.');
    }

    public function show(Quotation $quotation)
    {
        //
    }

    public function edit(Quotation $quotation)
    {
        //
    }

    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    public function destroy(Quotation $quotation)
    {
        //
    }
}
