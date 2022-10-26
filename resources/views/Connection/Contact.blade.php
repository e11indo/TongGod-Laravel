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
        <div class="Contact_write" style="margin-bottom:10px;float:left; margin-left:5px">
            <form action="/Contact_search" method="get">
                <select name="option" id="contact_option" onchange="chageLangSelect()">
                    <option name="title" id="title" value="title">제목</option>
                    <option name="username" id="username" value="username">이름</option>
                </select>
                <input type="text" name="title" id="select_option" placeholder="제목">
                <input type="image" id="option_enter" src="image/button_find.gif">
            </form>
        </div>
    </div>
    <table>
        <thead class="fw-bold table-title">
            <td class="no">No</td>
            <td class="title">제목</td>
            <td class="username">닉네임</td>
            <td class="create_time">접수날짜</td>
        </thead>
        <tbody class="table-content">
            @if(!empty($contact) && $contact->count())
                @foreach($contact as $key => $value)
                    <tr>
                        <td class="fw-bold">{{$key+1}}</a></td>
                        <td class="fw-bold"><a href="{{route('Connection.Contact_view', $value -> id)}}">{{$value -> title}}</a></td>
                        <td class="fw-normal">{{$value -> username}}</td>
                        <td class="fw-normal">{{$value -> created_at -> format('Y-m-d')}}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">상담 예약 고객이 없습니다.</td>
                </tr>
            @endif
        </tbody>
    </table>
   
    <div class="wd1000" style="margin-right:auto; margin-left:auto;" class="d-flex justify-content-center">
        {!! $contact->links() !!}
    </div>

    <div class="wd1000"style="margin-right:auto; margin-left:auto;">
        <a href="{{Route('Connection.Contact_create')}}"> 
            <div class="Contact_write">
                <img src="/image/button_write.gif" alt="없음">
            </div>
        </a>
    </div>
</div>
@stop
