<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function deposit()
    {
        return view('pages.deposit');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }
    public function terms()
    {
        return view('pages.terms');
    }
    public function aboutus()
    {
        return view('pages.about');
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




    public function changepassword()
    {
        return view('pages.changepassword');
    }

    public function newpassword(Request $request)
    {   $user = auth()->user();
        
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

          #Match The Old Password
        if(!Hash::check($request->oldpassword, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }else {
               #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

      
       
        Auth::logout($user);

       

        return redirect('login')->with('success', 'Password changed succesfully, you can now log in with new password');


        }

      

    }
}
