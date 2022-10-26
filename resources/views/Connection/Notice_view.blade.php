@extends('Connection_layouts.layout')

@section('index')


<div class="contact-banner"></div>
<div class="widget-padding" style="height: 100px"></div>

<div class="container" style="text-align: center">
    <span style="font-size: 1.714em; line-height: 1.2;">공지사항</span>
    <div>
        <span style="color: rgb(93, 93, 93);font-size: 14px;">관리자의 공지사항을 읽어주세요.</span>
    </div>
    <div class="widget-padding" style="height: 50px"></div>
</div>

<div class="wd1000" style="margin-right:auto; margin-left:auto;">
    <div class="table-title-view">
        <div class="table-main">제목</div>
        <div class="table-sub">{{$Notice -> title}}</div>
    </div>
    <div class="table-view">
        <div class="table-main">작성자</div>
        <div class="table-sub">운영자</div>
    </div>
    <div class="table-view">
        <div class="table-main">내용</div>
        <div class="table-sub">{{$Notice -> content}}</div>
    </div>
    <div class="bw_button">
        <a href="{{Route('Connection.Notice')}}">
            <img src="/image/button_list.gif" alt="없음">
        </a>
    </div>
 </div>

@stop