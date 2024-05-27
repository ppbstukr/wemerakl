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

const saFunc = function() {
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
          setTimeout(function() {
            element.classList.add('show');
          }, delay);
        }
      }
      else{
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