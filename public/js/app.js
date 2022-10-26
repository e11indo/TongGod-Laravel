//화면 내리면 가리기



$(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    var offset1 = $("#robot_information_1").offset();
    var offset2 = $("#contact_info").offset();

    if(scroll < offset1.top -50){
        $(".nav-item .link1").addClass("active");
        $(".nav-item .link2").removeClass("active");
        $("#navbar").removeClass("active");
    }
    if (scroll >= offset1.top -50) {
        $("#navbar").addClass("active");
        $(".nav-item .link2").addClass("active");
        $(".nav-item .link1").removeClass("active");
    }
    if (scroll >= offset2.top -50){
        $(".nav-item .link2").removeClass("active");
        $(".nav-item .link3").addClass("active");
    }
    else {
        $(".nav-item .link3").removeClass("active");
    }
    });	

    
    //화면 내릴수록 FadeOut
    /* $(window).scroll(function() {
        if($(document).scrollTop() > 80) {
            $('#navbar').fadeOut();
        } else {
            $('#navbar').fadeIn();
        };
    });
    */
    
    // 클래스가 scroll_move인 a 태그를 눌렀을때 발생되게 하는 이벤트
    // $(this.hash) a태그에 있는 해쉬 값으로 스크롤링 되며 이동
    // 500 은 스크롤 속도
    $(document).ready(function($) {
        $(".menu-item").click(function(event){         
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
        });
    });
    
    

    
    
    function checkName(){
        let check = document.board
        if(check.name.value==""){
            alert("이름을 입력해주세요.")
            return false
        }
        if(check.email.value==""){
            alert("이메일을 입력해주세요.")
            return false
        }
        if(check.company.value==""){
            alert("회사명을 입력해주세요.")
            return false
        }
        if(check.phone.value==""){
            alert("전화번호를 입력해주세요(숫자만 입력)")
            return false
        }
        if(check.phone.value.length <11 || check.phone.value.length >11 ){
            alert("전화번호를 올바르게 11자리 입력해주세요")
            return false           
        }
        if(check.content.value==""){
            check.content.value = "X"
            return true
        }
        return true
    }



/* 탑 메뉴 */
$("#KT").mouseover(function(){
    $("#menu-KT").addClass("active");
    $("#menu-SK").removeClass("active");
    $("#menu-LG").removeClass("active");
}); 
$("#menu-KT").mouseleave(function(){
    $("#menu-KT").removeClass("active");
}); 

$("#SK").mouseover(function(){
    $("#menu-KT").removeClass("active");
    $("#menu-SK").addClass("active");
    $("#menu-LG").removeClass("active");
}); 
$("#menu-SK").mouseleave(function(){
    $("#menu-SK").removeClass("active");
}); 
$("#LG").mouseover(function(){
    $("#menu-KT").removeClass("active");
    $("#menu-SK").removeClass("active");
    $("#menu-LG").addClass("active");
}); 
$("#menu-LG").mouseleave(function(){
    $("#menu-LG").removeClass("active");
}); 


/* 사이드바 */
$(".sidebar-btn").click(function(){
    $(".sidebar").fadeIn(200);
    $(".body").addClass("none");
});
$(".exit").click(function(){
    $(".sidebar").fadeOut(200);
    $(".body").removeClass("none");
});


$(".KT1").click(function(){
    $("#sidebar-KT1").toggleClass('active');
}); 
$(".KT2").click(function(){
    $("#sidebar-KT2").toggleClass('active');
}); 
$(".KT3").click(function(){
    $("#sidebar-KT3").toggleClass('active');
}); 
$(".SK1").click(function(){
    $("#sidebar-SK1").toggleClass('active');
}); 
$(".SK2").click(function(){
    $("#sidebar-SK2").toggleClass('active');
}); 
$(".SK3").click(function(){
    $("#sidebar-SK3").toggleClass('active');
}); 
$(".LG1").click(function(){
    $("#sidebar-LG1").toggleClass('active');
}); 
$(".LG2").click(function(){
    $("#sidebar-LG2").toggleClass('active');
}); 
$(".LG3").click(function(){
    $("#sidebar-LG3").toggleClass('active');
}); 


/* 메인화면 팝 창 */
$(".pop_cancel").click(function(){
    $("#pop").css("display","none");
})


/* 검색 조건 */
function chageLangSelect(){
    var langSelect = document.getElementById("contact_option");
     
    // select element에서 선택된 option의 value가 저장된다.
    var selectValue = langSelect.options[langSelect.selectedIndex].id;
    $("#select_option").prop('name', selectValue);
}
