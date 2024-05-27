//Javascript
var lastScrollTop = 0;
var delta = 5;
var fixBox = document.querySelector('header');
var fixBoxHeight = fixBox.offsetHeight;
var didScroll;
//스크롤 이벤트 
window.onscroll = function(e) {
    didScroll = true;
};

//0.25초마다 스크롤 여부 체크하여 스크롤 중이면 hasScrolled() 호출
setInterval(function(){
    if(didScroll){
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled(){
    var nowScrollTop = window.scrollY;
    if(Math.abs(lastScrollTop - nowScrollTop) <= delta){
        return;
    }
    if(nowScrollTop > lastScrollTop && nowScrollTop > fixBoxHeight){
        //Scroll down
        console.log('scroll down');
        console.log(nowScrollTop);
        if(nowScrollTop >= 800)
            EventCall();
    }else{
        if(nowScrollTop + window.innerHeight < document.body.offsetHeight){
            //Scroll up
            console.log('scroll up');
        }
    }
    lastScrollTop = nowScrollTop;
}

// function EventCall(){
//     $(".business-left-01::before").css({
//         "left": "50%",
//     });
//     console.log('이벤트발생');
//     $(".business-left-01::after").css({
//         "left": "50%",
//     });
// }