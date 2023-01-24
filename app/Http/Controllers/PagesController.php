<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function checkingandsavings()
    {
        return view('pages.checkingandsavings');
    }
    public function creditcards()
    {
        return view('pages.creditcards');
    }
    public function loans()
    {
        return view('pages.loans');
    }
    public function productandservices()
    {
        return view('pages.productandservices');
    }
}
