<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function Contact(){
        $contact = contact::orderBy('id','desc')->paginate(10);
        return view('Connection.Contact',compact('contact'));
    }

    public function Contact_create(){
        return view('Connection.Contact_create');
    }

    public function Contact_delete(Request $request, $id){
        $delete = DB::table('contact')-> where('password',$request) -> where('id',$id);
        $delete -> delete();

        redirect() -> Route('Conntection.Contact');
    }
/*     public function Contact_delete(Request $request){
        $delete = contact::where('password',$request);
        $delete -> delete();
        
        redirect() -> Route('Connection.Contact');
    } */
    
    public function Contact_view($id){
        $contact = contact::where('id', $id) -> first();
        return view('Connection.Contact_view', compact('contact'));
    }


    /* 글 저장 */
    public function save(Request $request){
        $validation = $request -> validate([
            'title' => 'required',
            'content' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        contact::create([
            'title' => $validation['title'],
            'content' => $validation['content'],
            'username' => $validation['username'],
            'password' => $validation['password']
        ]);
        return redirect() -> route('Connection.Contact');
    }


    /* 해당 id글의 패스워드가 맞을 시 삭제 */
    public function delete(Request $request, $id){
        $validation = $request -> validate([
            'password' => 'required'
        ]);
        $delete_value = contact::where('password', $validation['password']) 
        -> where('id',$id) ->first();

        if($delete_value == null){
            return redirect() -> route('Connection.Contact');
        }
        else{
            $delete_value -> delete();
            return redirect() -> route('Connection.Contact');
        }
    }


    /* 제목으로 검색 */
    public function search(Request $request){
        /* value값과 일치하는지 확인 */
        if($_GET["option"] == "title"){ 
            $validation = $request -> validate([
                'title' => 'required'
            ]);
            $searches = contact::where('title', $validation['title'])->paginate(10);
            return view('Connection.Contact_search', compact(['searches']));
        }
        else if($_GET["option"] == "username"){
            $validation = $request -> validate([
                'username' => 'required'
            ]);
            $searches = contact::where('username', $validation['username'])->paginate(10);
            return view('Connection.Contact_search', compact(['searches']));
        }
    }
}



