<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;

class ConnectionController extends Controller
{
    public function index(){
        $contact = contact::orderBy('id','desc')->paginate(15);
        return view('Connection.index',compact('contact'));
    }

    public function Account(){
        return view('Connection.Account');
    }

    public function save(Request $request){
        $validation = $request -> validate([
            'account' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'E_Mail' => 'required',
            'address' => 'required'
        ]);
        users::create([
            'account' => $validation['account'],
            'password' => $validation['password'],
            'E_Mail' => $validation['E_Mail'],
            'phone' => $validation['phone'],
            'address' => $validation['address']
        ]);

        return redirect() -> route('Connection.index');
    }

    public function Login(){
        return view('Connection.Login');
    }



    public function Notice(){
        return view('Connection.Notice');
    }
    public function Content_KT(){
        return view('Connection.Content_KT');
    }
    public function Content_SK(){
        return view('Connection.Content_SK');
    }
    public function Content_LG(){
        return view('Connection.Content_LG');
    }
}
