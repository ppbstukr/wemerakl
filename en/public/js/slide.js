
    var index = 0;
    var banners = document.getElementsByClassName('slidewrap'); //main-visual 길이 len에 저장
    console.log(banners)
    var len = banners.length;
    

    const btnClick = (val) => {
        index = index + val;
        console.log(index);
        if(index===len){
            index=0;
        }else if(index===-1){
            index=len-1;
        }
        sliderbanner();
    }

    const dotClick = (val) => {
        index = val;
        sliderbanner();
    }
    var slider;
    const sliderbanner = () =>{
        for(var i=0; i<len; i++){
            banners[i].style.left= (i-index)*100 + '%'
        }
        // banners[index].style.left = '0'
        // banners[index-1].style.left='-100%'
    }

    var timer = () => {
        slider = setInterval(() => {
            btnClick(1);
        }, 5000);
    }

    timer();
