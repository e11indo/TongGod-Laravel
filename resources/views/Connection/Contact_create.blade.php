@extends('Connection_layouts.layout')

@section('index')

<div class="contact-banner"></div>
<div class="widget-padding" style="height: 100px"></div>

<div class="container" style="text-align: center">
    <span style="font-size: 1.714em; line-height: 1.2;">Q n A</span>
    <div>
        <span style="color: rgb(93, 93, 93);font-size: 14px;">We answer the questions you want.</span>
    </div>
    <div class="widget-padding" style="height: 50px"></div>
</div>
<form method="post" action ='Contact_save'>
    @csrf
    <table>
        <tr>
            <td>
                <span>이름</span>
                <input type="text" class="form-control Contact Contact_username" name = 'username'/>
            </td>
            <td>
                <span>비밀번호</span>
                <input type="password" class="form-control Contact Contact_password" name = 'password'/>
            </td>
        </tr>
        <tr>
                <td>
                제목
                <input type="text" class="form-control Contact" name = 'title'/>
            </td>
        </tr>
        <tr>
            <td>
                내용
                <textarea class="form-control Contact Contact_content" name = 'content'></textarea>
            </td>
        </tr>

    </table>
    <div class="wd1000" style="margin-right:auto; margin-left:auto;">
        <div class="bw_button" style="height: 25px;position: relative;">
            <input type="image" src="image/button_submit.gif" style="position: absolute;bottom: 0px;right: 0px;">
            <a href="{{Route('Connection.Contact')}}" style="position: absolute;bottom: 0px;right: 60px;">
                <img src="image/button_list.gif" alt="없음">
            </a>
        </div>
    </div>
</form>
@stop
