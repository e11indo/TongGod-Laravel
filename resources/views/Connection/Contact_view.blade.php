@extends('Connection_layouts.layout')

@section('index')

<div class="contact-banner"></div>
<div class="widget-padding" style="height: 100px"></div>

<div class="index-page" style="text-align: center">
    <span style="font-size: 1.714em; line-height: 1.2;">Q n A</span>
    <div>
        <span style="color: rgb(93, 93, 93);font-size: 14px;">We answer the questions you want.</span>
    </div>
    <div class="widget-padding" style="height: 50px"></div>
     <div class="wd1000" style=" margin-right:auto; margin-left:auto;">
        <div class="bw_button" style="margin-bottom:5px ">
            <a href="{{Route('Connection.Contact')}}">
                <img src="/image/button_list.gif" alt="없음">
            </a>
        </div>
        <div class="table-title-view">
            <div class="table-main">제목</div>
            <div class="table-sub">{{$contact -> title}}</div>
        </div>
        <div class="table-view">
            <div class="table-main">작성자</div>
            <div class="table-sub">{{$contact -> username}}</div>
        </div>
        <div class="table-view">
            <div class="table-main">내용</div>
            <div class="table-sub">{{$contact -> content}}</div>
        </div>
        <div class="bw_button">
            <form action="/Contact/{{$contact -> id}}" method="post">
                @method('delete')
                @csrf
                <input type="password" name="password" placeholder="비밀번호">
                <input type="image" src="/image/button_delete.gif" name="delete" id="password">
            </form>
        </div>
     </div>
{{--     <div class="delete mt-5 float-end">
        <form action="/boards/{{$contact -> id}}" method="post" class="inline-block">
            @csrf
            @method('delete')
            <button class="btn btn-danger" onclick="alert('삭제되었습니다.')">삭제</button>
        </form>      
    </div>   --}}
</div>

@stop
