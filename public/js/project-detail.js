const floating = document.querySelector('.project-aside');

//project-aside 플로팅메뉴
document.addEventListener('scroll',function(){
    if(window.scrollY > 850){
        floating.classList.add('--floating');
    }else{
        floating.classList.remove('--floating');
    };
});