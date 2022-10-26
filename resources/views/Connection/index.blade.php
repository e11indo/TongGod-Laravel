@extends('Connection_layouts.layout')

@section('index')


<div id="pop">
    <a href="{{Route('Connection.Content_LG')}}">
        <img src="/image/lg_pop.jpg" alt="LG U+ 인터넷/IPTV 신규가입시 최대 104만원 혜택" style="width:100%;border:0px;">
    </a>
    <div style=" text-align:center; padding-top:5px; padding-bottom:5px; background:#ed018a;"><input type="button" class="pop_cancel" style="color:#fff; font-size:12px;" value="[닫기]">
    </div>
</div>

<div class="index-page">

    <div class="row mt-5">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/image/main-banner.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/image/main-banner2.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        
    </div>
    <div class="mt-5" style="display: flex;">
        <div class="index-card">
            <span style="font-weight:600">이달의 휴대폰</span>
            <div><img src="/image/phone1.jpg" alt="" style="margin-top: 10px;"></div>
            <div><img src="/image/phone2.jpg" alt="" style="margin-top: 10px;"></div>
        </div>
        <div class="index-card" style="margin-left:3%">
            <div class="board">
                <span style="font-weight: 600">고객문의</span>
                <span style="font-weight: 600;color:#ed018a">총 {{$contact ->count()}}건</span>
                <a href="{{Route('Connection.Contact')}}" class="plus">+더보기</a>
            </div>
            <div class="boardline"></div>
            <div class="boardbox">
                @if(!empty($contact) && $contact->count())
                    @foreach($contact as $key => $value)
                    <div class="row">
                        <div class="col-8">
                            <a href="{{route('Connection.Contact_view', $value -> id)}}">{{$value -> title}}</a>
                        </div>
                        <div class="col-4">
                            <span style="font-size: 12px">{{$value -> created_at -> format('Y-m-d')}}</span>
                        </div>
                    </div>
                    @endforeach
                @else
                상담고객 없습니다.
                @endif                
            </div>
        </div>
        <div class="index-card" style="margin-left:3%">
            <span style=" font-weight:600">이달의 휴대폰</span>
            <div><img src="/image/phone1.jpg" alt="" style="margin-top: 10px; "></div>
            <div><img src="/image/phone2.jpg" alt="" style="margin-top: 10px;"></div>
        </div>
    </div>

    <div class="row mt-5">
            <img src="/image/KT_pay.jpg" alt="">
    </div>

    <div class="flow mt-5">
        <img src="/image/flow.jpg" alt="" style="width:100%">
    </div>
</div>


@stop
