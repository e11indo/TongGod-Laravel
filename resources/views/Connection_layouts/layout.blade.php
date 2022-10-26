<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.jpg">
    <title>스피드통신</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/47b4af5cf9.js" crossorigin="anonymous"></script>
      
    <script  src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

</head>
<body>
    <div class="body">
        <div id="header">
            <div class="fix-width">
                <div class="logo">
                    <a href="{{Route('Connection.index')}}">
                        <span style="color:white">스피드통신</span>
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="{{Route('Connection.Content_KT')}}" id="KT">KT 인터넷</a>                   
                        </li>
                        <li><a href="{{Route('Connection.Content_SK')}}" id="SK">SK 브로드밴드</a>                 
                        </li>
                        <li><a href="{{Route('Connection.Content_LG')}}" id="LG">LG 유플러스</a>              
                        </li>
                        <li><a href="{{Route('Connection.Contact')}}">문의하기</a></li>
                    </ul>
                </div>
                <div class="number">
                    1644-2322
                </div>
            </div>
            <div class="sidebar-btn" style="color:white; margin-top:3px"><i class="fa-solid fa-bars fa-2x"></i></div>
        </div>
        
        @section('index')
        @show
    
        {{-- 푸터 --}}
        <div style="height: 200px"></div>
        <div class="card text-center mt-5" style="background-color: #2a2a2a">
          <div class="card-body">
            <p class="card-text footer-text">스피드통신 | 이용준 | 사업자: 02-XX-XXXXX | 주소: 전라북도 익산시</p>
            <p class="card-text footer-text" style="margin-top:-10px">Tel.010-XXXX-XXXX | E-mail: http1234@naver.com</p>
            <p class="card-text footer-text" style="font-size: 15px">COPYRIGHT 2022 스피드통신 | ALL RIGHTS RESERVED.</p>
          </div>
        </div>       
    </div>





{{-- KT 인터넷 메뉴 --}}
<div class="menu-content" id="menu-KT">
    <div class="fix-width" style="margin-top: 10px">
        <ul class="menu-title">
            <li class="menu-sub sub-first"><a href="#">인터넷</a>
                <ul>
                    <li><a href="#">인터넷 베이직</a></li>
                    <li><a href="#">인터넷 에센스</a></li>
                    <li><a href="#">인터넷 에센스 와이드</a></li>
                    <li><a href="#">인터넷 베이직 와이드</a></li>
                </ul>
            
            </li>
            <li class="menu-sub"><a href="#">결합상품</a>
                <ul>
                    <li><a href="#">인터넷 + TV</a></li>
                    <li><a href="#">인터넷 + TV + 인터넷전화</a></li>
                    <li><a href="#">인터넷 + TV + 집전화</a></li>
                    <li><a href="#">인터넷 + 인터넷전화</a></li>
                </ul>
            </li>
            <li class="menu-sub"><a href="#">TV</a>
                <ul>
                    <li><a href="#">올레 tv UHD</a></li>
                    <li><a href="#">올레 tv 키즈랜드</a></li>
                    <li><a href="#">기가지니</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> 
{{-- SK 브로드밴드 메뉴 --}}
<div class="menu-content" id="menu-SK">
    <div class="fix-width" style="margin-top: 10px">
        <ul class="menu-title">
            <li class="menu-sub"><a href="#">인터넷</a>
                <ul>
                    <li><a href="#">스마트 다이렉트</a></li>
                    <li><a href="#">Giga 인터넷 라이트</a></li>
                    <li><a href="#">Giga 인터넷</a></li>
                </ul>
            
            </li>
            <li class="menu-sub"><a href="#">결합상품</a>
                <ul>
                    <li><a href="#">인터넷 + TV</a></li>
                    <li><a href="#">인터넷 + TV + 인터넷전화</a></li>
                    <li><a href="#">인터넷 + TV + 집전화</a></li>
                    <li><a href="#">인터넷 + 인터넷전화</a></li>
                </ul>
            </li>
            <li class="menu-sub"><a href="#">TV</a>
                <ul>
                    <li><a href="#">B tv 요금제</a></li>
                    <li><a href="#">Smart3 셋톱박스</a></li>
                    <li><a href="#">AI 스피커형 셋톱박스</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>   

{{-- LG 유플러스 메뉴 --}}
<div class="menu-content" id="menu-LG">
    <div class="fix-width" style="margin-top: 10px">
        <ul class="menu-title">
            <li class="menu-sub"><a href="#">인터넷</a>
                <ul>
                    <li><a href="#">와이파이기본_광랜안심</a></li>
                    <li><a href="#">와이파이기본_기가슬림안심</a></li>
                    <li><a href="#">와이파이기본_기가안심</a></li>
                </ul>
            
            </li>
            <li class="menu-sub"><a href="#">결합상품</a>
                <ul>
                    <li><a href="#">인터넷 + TV</a></li>
                    <li><a href="#">인터넷 + TV + 인터넷전화</a></li>
                    <li><a href="#">인터넷 + TV + 집전화</a></li>
                    <li><a href="#">인터넷 + 인터넷전화</a></li>
                </ul>
            </li>
            <li class="menu-sub"><a href="#">TV</a>
                <ul>
                    <li><a href="#">디즈니+</a></li>
                    <li><a href="#">넷플릭스</a></li>
                    <li><a href="#">아이들나라</a></li>
                    <li><a href="#">tv 사운드바 블랙</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>      



{{-- 사이드메뉴 --}}  
<div class="menu_bg"></div>  
<div class="sidebar">
    <div style="position: relative">
        <div class="exit"><i class="fa-sharp fa-solid fa-xmark fa-2x"></i></div>
        <div class="sidebar-title">
            스피드통신
        </div>
        <div class="sidebar-content">
            <ul>
                <li class="sidebar-menu mt-5"  style="border-top: 1px solid #b3b3b3; cursor:auto">KT 인터넷
                    <li class="sidebar-sub KT1">인터넷
                        <ul class="sidebar-sub-content" id="sidebar-KT1">
                            <li><a href="#">인터넷 베이직</a></li>
                            <li><a href="#">인터넷 에센스</a></li>
                            <li><a href="#">인터넷 에센스 와이드</a></li>
                            <li><a href="#">인터넷 베이직 와이드</a></li>
                        </ul>
                    
                    </li>
                    <li class="sidebar-sub KT2">결합상품
                        <ul class="sidebar-sub-content" id="sidebar-KT2">
                            <li><a href="#">인터넷 + TV</a></li>
                            <li><a href="#">인터넷 + TV + 인터넷전화</a></li>
                            <li><a href="#">인터넷 + TV + 집전화</a></li>
                            <li><a href="#">인터넷 + 인터넷전화</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-sub KT3">TV
                        <ul class="sidebar-sub-content" id="sidebar-KT3">
                            <li><a href="#">올레 tv UHD</a></li>
                            <li><a href="#">올레 tv 키즈랜드</a></li>
                            <li><a href="#">기가지니</a></li>
                        </ul>
                    </li>
                </li>
                <li class="sidebar-menu mt-5" style="border-top: 1px solid #b3b3b3; cursor:auto">SK 브로드밴드
                    <li class="sidebar-sub SK1">인터넷
                        <ul class="sidebar-sub-content" id="sidebar-SK1">
                            <li><a href="#">스마트 다이렉트</a></li>
                            <li><a href="#">Giga 인터넷 라이트</a></li>
                            <li><a href="#">Giga 인터넷</a></li>
                        </ul>
                    
                    </li>
                    <li class="sidebar-sub SK2">결합상품
                        <ul class="sidebar-sub-content" id="sidebar-SK2">
                            <li><a href="#">인터넷 + TV</a></li>
                            <li><a href="#">인터넷 + TV + 인터넷전화</a></li>
                            <li><a href="#">인터넷 + TV + 집전화</a></li>
                            <li><a href="#">인터넷 + 인터넷전화</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-sub SK3">TV
                        <ul class="sidebar-sub-content" id="sidebar-SK3">
                            <li><a href="#">B tv 요금제</a></li>
                            <li><a href="#">Smart3 셋톱박스</a></li>
                            <li><a href="#">AI 스피커형 셋톱박스</a></li>
                        </ul>
                    </li>

                </li>
                <li class="sidebar-menu mt-5" style="border-top: 1px solid #b3b3b3; cursor:auto">LG 유플러스
                    <li class="sidebar-sub LG1">인터넷
                        <ul class="sidebar-sub-content" id="sidebar-LG1">
                            <li><a href="#">와이파이기본_광랜안심</a></li>
                            <li><a href="#">와이파이기본_기가슬림안심</a></li>
                            <li><a href="#">와이파이기본_기가안심</a></li>
                        </ul>
                    
                    </li>
                    <li class="sidebar-sub LG2">결합상품
                        <ul class="sidebar-sub-content" id="sidebar-LG2">
                            <li><a href="#">인터넷 + TV</a></li>
                            <li><a href="#">인터넷 + TV + 인터넷전화</a></li>
                            <li><a href="#">인터넷 + TV + 집전화</a></li>
                            <li><a href="#">인터넷 + 인터넷전화</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-sub LG3">TV
                        <ul class="sidebar-sub-content" id="sidebar-LG3">
                            <li><a href="#">디즈니+</a></li>
                            <li><a href="#">넷플릭스</a></li>
                            <li><a href="#">아이들나라</a></li>
                            <li><a href="#">tv 사운드바 블랙</a></li>
                        </ul>
                    </li>

                </li>
                <li class="sidebar-menu cursor:auto mt-5" style="border-top: 1px solid #b3b3b3; cursor:auto"><a href="{{Route('Connection.Contact')}}">문의하기</a></li>
                <li class="sidebar-menu" style=" cursor:auto">
                    <a href="{{Route('Connection.Notice')}}">공지사항</a>
                </li>
            </ul>
        </div>
{{--         <div class="user mt-5">
            <div>로그인 후 이용하세요.</div>
            
            <a href="{{route('Connection.Login')}}"><button class="btn btn-primary">로그인</button></a>
            <a href="{{route('Connection.Account')}}"><button class="btn btn-primary">회원가입</button></a>

            <div>??님 안녕하세요.</div>
            <a href="{{route('Connection.Login')}}"><button class="btn btn-primary">로그아웃</button></a> 
        </div> --}}
    </div>
</div>

<script>

    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>