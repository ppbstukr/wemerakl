var idx = 0;
var card = document.getElementsByClassName('card'); //card 길이 len에 저장
console.log(card)
var cardlen = card.length;


const cardBtn = (val) => {
    idx = idx + val;
    console.log(idx);
    if(idx===cardlen-2){
        idx=0;
    }else if(idx===-1){
        idx=cardlen-1;
    }
    view();
}

var cardSlider;
// const sliderCard = () =>{
//     for(var i=0; i<cardlen; i++){
//         card[i].style.left= (i-idx)*25 + '%'
//         if(idx>=3){
//             card[0].style.left =(i-idx+1)*25 + '%'
//             card[1].style.left =(i-idx+2)*25 + '%'
//             card[2].style.left =(i-idx+3)*25 + '%'
//         }
//     }
// }

var mql = window.matchMedia("screen and (max-width: 414px)");
const view = () =>{
if (mql.matches) {
    console.log("화면의 너비가 414px 보다 작습니다.");
    for(var i=0; i<cardlen; i++){
            card[i].style.left= (i-idx)*33 + '%'
            if(idx>=3){
                card[0].style.left =(i-idx+1)*33 + '%'
                card[1].style.left =(i-idx+2)*33 + '%'
                card[2].style.left =(i-idx+3)*33 + '%'
            }
        }
} else {
    console.log("화면의 너비가 414px 보다 큽니다.");
        for(var i=0; i<cardlen; i++){
            card[i].style.left= (i-idx)*25 + '%'
            if(idx>=3){
                card[0].style.left =(i-idx+1)*25 + '%'
                card[1].style.left =(i-idx+2)*25 + '%'
                card[2].style.left =(i-idx+3)*25 + '%'
            }
        }
    }
}



