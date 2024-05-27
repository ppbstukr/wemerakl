const aboutus = document.querySelector('.submenu_Btn');
const notice = document.querySelector('.noticesub_Btn');
const toggleBtn = document.querySelector('.navbar_toggleBtn');
const menu = document.querySelector('.mobile');
const sub_menu = document.querySelector('.mobile_sub');
const notice_menu = document.querySelector('.notice_sub');
const closemenu = document.querySelector('close_menu');

toggleBtn.addEventListener('click', () => {
  console.log(1);
  menu.classList.toggle('active');
});

aboutus.addEventListener('click', () => {
  console.log(1);
  sub_menu.classList.toggle('sub_on');
});
$('.langsub_Btn').on('click', () => {
  console.log(1);
  $('.lang_sub').toggleClass('sub_on');
});

$('.teamsub_Btn').on('click', () => {
  console.log(1);
  $('.team_sub').toggleClass('sub_on');
});

notice.addEventListener('click', () => {
  notice_menu.classList.toggle('sub_on');
});


// --------------------------------메인화면 스크롤내리면 글자 떠오름-------------------------




// --------------------------------메인화면 스크롤내리면 이미지링크 슬라이드-------------------------


// Scroll Animation (sa, 스크롤 애니메이션)
const saDefaultMargin = 300;
let saTriggerMargin = 0;
let saTriggerHeight = 0;
const saElementList = document.querySelectorAll('.sa');

const saFunc = function () {
  for (const element of saElementList) {
    if (!element.classList.contains('show')) {
      if (element.dataset.saMargin) {
        saTriggerMargin = parseInt(element.dataset.saMargin);
      } else {
        saTriggerMargin = saDefaultMargin;
      }

      if (element.dataset.saTrigger) {
        saTriggerHeight = document.querySelector(element.dataset.saTrigger).getBoundingClientRect().top + saTriggerMargin;
      } else {
        saTriggerHeight = element.getBoundingClientRect().top + saTriggerMargin;
      }

      if (window.innerHeight > saTriggerHeight) {
        let delay = (element.dataset.saDelay) ? element.dataset.saDelay : 0;
        setTimeout(function () {
          element.classList.add('show');
        }, delay);
      }
    } else {
      if (element.dataset.saMargin) {
        saTriggerMargin = parseInt(element.dataset.saMargin);
      } else {
        saTriggerMargin = saDefaultMargin;
      }

      if (element.dataset.saTrigger) {
        saTriggerHeight = document.querySelector(element.dataset.saTrigger).getBoundingClientRect().top + saTriggerMargin;
      } else {
        saTriggerHeight = element.getBoundingClientRect().top + saTriggerMargin;
      }
      if (window.innerHeight < saTriggerHeight) {
        element.classList.remove('show');
      }
    }

  }
}

window.addEventListener('load', saFunc);
window.addEventListener('scroll', saFunc);



//===========================================================================================
$(document).ready(function () {
  const saAdd = () => {
    const saElementList = document.querySelectorAll('.sa');
    for (const element of saElementList) {
      if (!element.classList.contains('show')) {
        element.classList.add('show');
      }
    }
  }

  const saRmv = () => {
    const saElementList = document.querySelectorAll('.sa');
    for (const element of saElementList) {
      if (element.classList.contains('show')) {
        element.classList.remove('show');
      }
    }
  }

  const daAdd = () => {
    const saElementList = document.querySelectorAll('.da');
    for (const element of saElementList) {
      if (!element.classList.contains('show')) {
        element.classList.add('show');
      }
    }
  }

  const daRmv = () => {
    const saElementList = document.querySelectorAll('.da');
    for (const element of saElementList) {
      if (element.classList.contains('show')) {
        element.classList.remove('show');
      }
    }
  }

  const navSee = () => {
    $("#header").css('background', "rgba(255,255,255,1)");
    $("header nav .navbar_menu>li>a").css('color', "#331a1a");
    $("header nav .navbar_menu>li>.lang").css('color', "#331a1a");
  }

  const navRmv = () => {
    $("#header").css('background', "rgba(255,255,255,0)");
    $("header nav .navbar_menu>li>a").css('color', "#ede8e8");
    $("header nav .navbar_menu>li>.lang").css('color', "#331a1a");
  }

  // fullpage customization
  $("#fullpage").fullpage({
    sectionSelector: ".section",
    navigation: true,
    slidesNavigation: true,
    css3: true,
    controlArrows: false,

    // 다 로드 된 이후
    afterLoad: function (anchorLink, index) {
      if (index == 2) {
        navSee();
        saAdd();
      }
      if (index == 3) {
        navSee();
        daAdd();
      }
    },
    // 섹션을 떠나고 나면
    onLeave: function (index, nextIndex, direction) {
      if (index == 2 && direction == 'down') {
        saRmv();
      }
      if (index == 2 && direction == 'up') {
        navRmv();
        saRmv();
      }
      if (index == 3 && direction == 'up') {
        daRmv();
      }
    },
    // 슬라이드가 다 로드 된 이후
    afterSlideLoad: function (anchorLink, index, slideAnchor, slideIndex) {},
    // 섹션을 떠나게 되면
    onSlideLeave: function (anchorLink, index, slideIndex, direction) {}

  });

  
});