const projectBanner = document.querySelector('.project-banner-wrap');
const edu = document.querySelector('.edu-content-wrap');
const rnd = document.querySelector('.rnd-content');
const rndTitle1 = document.querySelector('.rnd-project-title h3');
const rndTitle2 = document.querySelector('.rnd-project-title h2');
const floating = document.querySelector('.project-aside');

//프로젝트 페이지 탑배너 화면 효과
document.addEventListener('scroll', function() {
    if(window.scrollY === 0){
        projectBanner.classList.remove('--full');
    }else{
        projectBanner.classList.add('--full');
        console.log(window.scrollY);
    }
});

//창업교육 배경 효과
document.addEventListener('scroll',function(){
    if(window.scrollY > 800){
        edu.classList.add('--full');
    }else{
        edu.classList.remove('--full');
    }
});

//rnd 배경 효과
document.addEventListener('scroll',function(){
    if(window.scrollY > 1100){
        rnd.classList.add('full');
    }else{
        rnd.classList.remove('full');
    }
});

//rnd 타이틀 효과
document.addEventListener('scroll',function(){
    if(window.scrollY > 900){
        rndTitle1.classList.add('title-event-1');
    }else{
        rndTitle1.classList.remove('title-event-1');
    }
});
document.addEventListener('scroll',function(){
    if(window.scrollY > 920){
        rndTitle2.classList.add('title-event-2');
    }else{
        rndTitle2.classList.remove('title-event-2');
    }
});

//project-aside 플로팅메뉴
document.addEventListener('scroll',function(){
    if(window.scrollY >850){
        floating.classList.add('--floating');
    }else{
        floating.classList.remove('--floating');
    }
})