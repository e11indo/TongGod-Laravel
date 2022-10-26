@extends('Connection_layouts.layout')

@section('index')

<div style="height: 1000px; ">
    <div class="container">
        <form action="/Account" method="post" class="contact" name="">
            @csrf
            <p>
                <label for="name" class="contact-sub">아이디</label>
                <input type="text" id="account" name="account" >
            </p>
            <p>
                <label for="name" class="contact-sub">비밀번호</label>
                <input type="text" id="password" name="password" >
            </p>
            <p>
                <label for="name" class="contact-sub">이메일</label>
                <input type="text" id="E_Mail" name="E_Mail" >
            </p>
            <p>
                <label for="name" class="contact-sub">전화번호</label>
                <input type="tel" id="phone" name="phone"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="숫자만 입력하세요">
            </p>
            <p>
                <label for="name" class="contact-sub">주소</label>
                <input type="text" id="address" name="address" >
            </p>
    
        <input type="submit" value="보내기" class="btn btn-primary fw-semibold" style="height: 40px">
        {{-- <input type="button" value="취소" onclick="history.back()"> --}}
        </form>
    </div>

</div>

@stop