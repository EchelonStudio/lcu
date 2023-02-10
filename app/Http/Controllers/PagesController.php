<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payee;
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
 
    public function test()
    {
        return view('pages.test');
    }


    public function transfer()
    {   
        $payees = Payee::where('user_id', auth()->user()->id)->get();
        

       
        return view('pages.transfer', [
            'payees' => $payees
        ]);
    }

    public function addPayee(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'min:3', 'max:256'],
            'lastname' => ['required', 'min:3', 'max:256'],
            'bank_name' => ['required', 'min:3', 'max:256'],
            'routing_number' => ['required', 'max:256'],
            'account_number' => ['required', 'max:256'],
        ]);

        Payee::create([
            'user_id' => auth()->user()->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'bank_name' => $request->bank_name,
            'routing_number' => $request->routing_number,
            'account_number' => $request->account_number
        ]);

        return back()->with('success', 'Payee Added Successfully');

    }
}
