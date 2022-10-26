@extends('Connection_layouts.layout')

@section('index')

<div class="contact-banner"></div>
<div class="widget-padding" style="height: 100px"></div>

<div class="index-page" style="text-align: center">
    <span style="font-size: 1.714em; line-height: 1.2;">공지사항</span>
    <div>
        <span style="color: rgb(93, 93, 93);font-size: 14px;">관리자의 공지사항을 읽어주세요.</span>
    </div>
    <div class="widget-padding" style="height: 50px"></div>
    <table>
        <thead class="fw-bold table-title">
            <td class="no">No</td>
            <td class="title">제목</td>
            <td class="username">닉네임</td>
            <td class="create_time">접수날짜</td>
        </thead>
        <tbody class="table-content">
            @if(!empty($Notice) && $Notice->count())
                @foreach($Notice as $key => $value)
                    <tr>
                        <td class="fw-bold">{{$key+1}}</td>
                        <td class="fw-bold"><a href="{{route('Connection.Notice_view', $value -> id)}}">{{$value -> title}}</a></td>
                        <td class="fw-normal">운영자</td>
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
    <div style="width:1000px; margin-right:auto; margin-left:auto;" class="d-flex justify-content-center">
        {!! $Notice->links() !!}
    </div>
</div>




@stop
