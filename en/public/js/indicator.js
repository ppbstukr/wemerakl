const scrollIndicator = document.getElementById("scroll-indicator");
const contents = document.getElementById("contents");

fetch("https://baconipsum.com/api/?type=all-meat&paras=200&format=html")
  .then((response) => response.text())
//   .then((result) => (contents.innerHTML = result));

window.addEventListener("scroll", (e) => {
  // clientHeight : 웹 브라우저 창의 높이
  // scrollTop : 현재 스크롤된 부분의 맨 위의 높이
  // scrollHeight : 문서의 총 높이 (= 스크롤의 총 높이)
  // contentHeight : 전체 총 높이에서 클라이언트 높이를 뺀 것

  const {
    scrollTop,
    scrollHeight,
    clientHeight
  } = e.target.scrollingElement;
  const contentHeight = scrollHeight - clientHeight;
  const percentage = (scrollTop / contentHeight) * 100;

  scrollIndicator.style.transform = `translateX(-${100 - percentage}%)`; // -100% ~ 0%
  scrollIndicator.style.transition = `transform 0.5 ease-out`; // 부드러운 애니메이션
});

// 네비게이션바 투명했다가 내려가면 불투명하게 하는거
$(window).on('scroll', function () {
  let value = $(window).scrollTop();
  // console.log("scrollY = ", value);

  if (value > 250) {
    $("#header").css('background', "rgba(255,255,255,1)");
    $("header nav .navbar_menu>li>a").css('color', "#331a1a");

  } else {
    $("#header").css('background', "rgba(255,255,255,0)");
    $("header nav .navbar_menu>li>a").css('color', "#ede8e8");

  }
});

// 네비게이션바 부드럽게 하는거
$(document).ready(() => {
  $(".navbar_menu>li").mouseover(() => {
    $(this).children(".sub_menu").stop().slideDown(200);
  });
  $(".navbar_menu>li").mouseleave(() => {
    $(this).children(".sub_menu").stop().slideUp(200);
  });
});

// 국문 <=> 영문 홈피 토글버튼
$(document).on('click', '.toggleBG', function () {
  var toggleBG = $(this);
  var toggleFG = $(this).find('.toggleFG');
  var left = toggleFG.css('left');
  if (left == '40px') {
    toggleBG.css('background', '#CCCCCC');
    toggleActionStart(toggleFG, 'TO_LEFT');
  } else if (left == '0px') {
    toggleBG.css('background', '#53FF4C');
    toggleActionStart(toggleFG, 'TO_RIGHT');
  }
});

// 토글 버튼 이동 모션 함수
function toggleActionStart(toggleBtn, LR) {
  // 0.01초 단위로 실행
  var intervalID = setInterval(
      function () {
        // 버튼 이동
        var left = parseInt(toggleBtn.css('left'));
        left += (LR == 'TO_RIGHT') ? 5 : -5;
        if (left >= 0 && left <= 40) {
          left += 'px';
          toggleBtn.css('left', left);
        }
      }, 10);
  setTimeout(function () {
    clearInterval(intervalID);
  }, 201);
}

function getToggleBtnState(toggleBtnId) {
  const left_px = parseInt($('#' + toggleBtnId).css('left'));
  if (left_px > 0) {
    $("#buttonID").attr('value', 'KO');
    location.href = "https://wemerakl.com";
  } else {
    $("#buttonID").attr('value', 'EN');
    location.href = "https://wemerakl.com/en";
  }
}


