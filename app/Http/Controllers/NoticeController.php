<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function Notice(){
        $Notice = Notice::orderBy('id','desc')->paginate(10);
        return view('Connection.Notice',compact('Notice'));
    }

    public function Notice_view($id){
        $Notice = Notice::where('id', $id) -> first();
        return view('Connection.Notice_view', compact('Notice'));
    }

}
