<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" name="description" content="지원 사업 리스트.">
    <title>메라클</title>
    <?php include('../../common/Header.php'); ?>
    <?php include('./floatmenu.php') ?>
    <link rel="stylesheet" href="./Map.css">
</head>

<body>
    <?php include('../../common/Nav.php') ?>
    <div class="cont4">
        <div class="purpleBox" id="purpleBoXX">
            <div id="noView">
                <div class="d-flex justify-content-center align-items-center saup mb-5 titleH" style="width:100%;">
                    서비스를 이용하기 위해서는 아래의 정보가 필요합니다.
                </div>
                <form class="d-flex flex-column justify-content-between" style="height:14rem; margin-top: -7px;"
                    id="inputForm">
                    <div class="d-flex justify-content-start align-items-center my-3"
                        style="width:41rem; height:4rem; background:white; border-radius:5px;box-shadow: 4px 4px 3px rgba(0, 0, 0, 0.2);">
                        <label for="verificationCode" style="margin:0 0 0 10px;"><span
                                style=" font-size:18px; font-weight:600;">인증코드 :</span>
                            <input type="text" id="verificationCode" name="verificationCode" required
                                style="width: 33rem; height:3rem; font-size:18px; outline:none; margin-left:1rem;"></label>
                    </div>
                    <div style="font-size:17px; font-weight:600;margin:0 0 0 10px;">
                        ※ 결제하실때 입력하셨던 이메일을 확인해주세요!
                    </div>
                    <div style="font-size:17px; font-weight:600;margin:0 0 0 10px;">
                        ※ 만일 인증코드를 못받으신 분은 소통공간 -> Q&A에 문의를 남겨주시거나
                    </div>
                    <div style="font-size:17px; font-weight:600;margin:0 0 0 33px;">
                        051-911-3330으로 전화해 주세요.
                    </div>
                    <div class="d-flex justify-content-end w-100" style="margin-top:2rem;">
                        <button type="button" class="btnSub" onclick="authSend()" style="outline:none;">서비스
                            이용하기</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="List00" class="list_area">
            <div class="listContent2">
                <div class="d-flex justify-content-center align-items-center" style="margin:5rem 0 0 0;">
                    <div class="d-flex flex-column justify-content-center"
                        style="width:55rem; height:33rem;background-color: #f7f4fb; max-width:83rem; max-height:58rem; border-radius: 35px; padding:0 1% 1% 1%; margin: 1% 0 2% 0; box-shadow: 12px 12px 10px rgba(0, 0, 0, 0.2);  z-index:1;">


                        <div class="d-flex justify-content-center align-items-center" style="width:100%; height:55rem;">
                            <div class="d-flex btnContainer" id="List1">
                                <div class="btnDown">
                                    <div class="btnNum">
                                        01
                                    </div>
                                </div>
                                <div class="btnDown2">
                                    <div class="titleDiv" style="font-size:21px; line-height:26px;">
                                        내가 참여할 수 있는 정부지원사업 전체 리스트
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="width:100%; height:55rem;">

                            <div class="d-flex btnContainer" id="List4">
                                <div class="btnDown">
                                    <div class="btnNum">
                                        02
                                    </div>
                                </div>
                                <div class="btnDown2">
                                    <div class="titleDiv" style="font-size:21px; line-height:26px;">
                                        사업계획서 작성을 위한 BMDS 30일 사용권
                                    </div>
                                    <!-- <span style="font-size:15px;">(비즈니스 모델 설계 툴)</span> -->
                                </div>
                            </div>
                            <!-- <div class="d-flex btnContainer" id="List4">
                                <div class="btnDown">
                                    <div class="btnNum">
                                        04
                                    </div>
                                </div>
                                <div class="btnDown2">
                                    <div class="titleDiv" style="font-size:21px;">
                                        사업계획서 작성 강의 영상
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="width:100%; height:55rem;">
                            <div class="d-flex btnContainer" id="List2" onclick="downloadZip()">
                                <div class="btnDown">
                                    <div class="btnNum">
                                        03
                                    </div>
                                </div>
                                <div class="btnDown2">
                                    <div class="titleDiv" style="font-size:21px;">
                                        BMDS<span style="font-size:15px;">(Build-up.ver) </span>&nbsp;샘플
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="d-flex btnContainer" id="List5">
                                <div class="btnDown">
                                    <div class="btnNum">
                                        05
                                    </div>
                                </div>
                                <div class="btnDown2">
                                    <div class="titleDiv" style="font-size:21px; line-height:26px;">
                                        사업계획서 작성을 위한 비즈니스모델<br />설계 툴(특허출원)
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex btnContainer" id="List6">
                                <div class="btnDown">
                                    <div class="btnNum">
                                        06
                                    </div>
                                </div>
                                <div class="btnDown2">
                                    <div class="titleDiv" style="font-size:21px; line-height:26px;">
                                        오프라인 정기 공개강좌 참여권<br />(10만원 상당)
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content2">
                <div class="close">X</div>
                <div id="loading" class=""></div>
                <div class="modal-body2" id="modal2" style="opacity:0; overflow-y:scroll;">
                    <div class="d-flex justify-content-center align-items-center" style="margin-top:2.5rem;">
                        <h1 style="font-family:Reko !important;">내가 참여할 수 있는 정부지원사업 전체 리스트</h1>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center" style="width:103rem;">
                        <div class="sum1"></div>
                        <div class="card-container" id="okView" style="margin-top:1.5rem; width:93rem;"></div>
                        <div class="sum2"></div>
                        <div class="card-container" id="okView2" style="margin-top:1.5rem; width:93rem;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="videoModal" class="videoModalClass">
            <div class="videoModal-content">
                <div class="videoModal-body">
                    <?php include('./modalSideBar.php') ?>
                    <div class="closex">X</div>
                </div>
            </div>
        </div>
        <div id="bmTicketModal" class="bmTicketModalClass">
            <div class="bmTicketModal-content">
                <div class="bmTicketModal-body">
                    <div class="d-flex flex-column justify-content-center align-items-center"
                        style="margin-top:2.5rem;">
                        <!-- <h1 style="font-family:Reko !important;">사업계획서 작성을 위한 비즈니스모델 설계 툴(특허출원)</h1> -->
                        <h1 style="font-family:Reko !important;">사업계획서 작성을 위한 BMDS 30일 사용권</h1>
                        <h4 style="margin-top:.5rem;">사업계획서를 쉽고 편리하게 작성할 수 있도록 도와주는 특허출원된 프로그램을 30일 간 무료로 사용해 보세요!!!
                        </h4>
                    </div>
                    <div class="bmTicketUI">
                        <div class="bmTicketScroll">
                            <div class="bmTicketSpace">
                                <div class="bmTicketNumQuestion">
                                    <div class="bmTicketNum"></div>
                                </div>
                            </div>
                            <div class="bmTicketDescription">
                                <div class="bmTicketDescriptionFont">* 해당 사용권은 사업계획서 작성을 도와주는 BMDS 사이트에 최초 로그인 후 30일간
                                    사용하실 수 있는
                                    쿠폰입니다.
                                </div>
                                <div class="bmTicketDescriptionFont">* 하단에 있는 비즈니스 모델 설계 툴 사용하러 가기 버튼을 클릭하시면 사용하실 수 있는
                                    사이트로 이동합니다.
                                </div>
                            </div>
                        </div>
                        <a href="https://bmds.co.kr/" class="bmTicketBtn">
                            <!-- 비즈니스 모델 설계 툴 사용하러 가기 -->
                            <!-- BMDS 이용하러 가기 -->
                            사용권 등록하러 가기
                            <span>(BMDS 홈페이지로 이동)</span>
                        </a>
                    </div>
                    <div class="closeBmTicket">X</div>
                </div>
            </div>
        </div>
        <!-- <div id="offlineTicketModal" class="offlineTicketModalClass">
            <div class="offlineTicketModal-content">
                <div class="offlineTicketModal-body">
                    <div class="d-flex justify-content-center align-items-center" style="margin-top:2.5rem;">
                        <h1 style="font-family:Reko !important;">오프라인 정기 공개강좌 참여권</h1>
                    </div>
                    <?php //include('./offlineTicketModal.php') 
                    ?>
                    <div class="closeOfflineTicket">X</div>
                </div>
            </div>
        </div> -->
    </div>

    <?php include('../../common/Footer.php') ?>
</body>
<script>
// ===============================================================================

document.getElementById('inputForm').addEventListener('submit', function(event) {
    event.preventDefault(); // 폼 서브밋을 막습니다.

    // 서브밋 버튼을 클릭하는 대신, 원하는 동작을 수행합니다.
    authSend();
});

document.getElementById('verificationCode').addEventListener('keyup', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // 엔터 키의 기본 동작(새 줄 추가) 방지
        authSend();
    }
});
// ===============================================================================

const List00 = document.getElementById('List00');
List00.style.display = 'none';


function authSend() {
    var verificationCode = document.getElementById('verificationCode').value;
    var purpleBoXX = document.getElementById('purpleBoXX');

    if (!verificationCode) {
        alert('인증코드를 입력해주세요!');
        return false;
    } else {
        // 데이터 객체 생성
        var data = {
            pw: verificationCode
        };

        // URL에 데이터를 추가
        var url = `https://merakl.co.kr/api/coupon/merakl/pay/${data.pw}`;


        // XMLHttpRequest 생성
        var xhr = new XMLHttpRequest();

        // GET 요청 설정
        xhr.open('GET', url, true);

        // 요청 완료 시 실행될 콜백 함수 설정
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var resObj = JSON.parse(xhr.responseText);

                    $.ajax({
                        url: './list_auth.php',
                        type: 'POST',
                        cache: false, // 캐싱 방지
                        data: {
                            xhr: resObj.query // 세미콜론(;) 대신 콜론(:) 사용
                        },

                        success: function(res) {
                            var resss = JSON.parse(res);
                            console.log('res', resss);
                            if (resss) {
                                var result = JSON.parse(res);
                                for (var i = 0; i < result.length; i++) {
                                    if (result[i].areas != '융자') {
                                        var cardData = result[i]
                                        var supplyAmount = Math.round(cardData.supply_amount / 10000) *
                                            10000;

                                        var sum1 = 0;
                                        var sum3 = 0;
                                        sum1 += supplyAmount

                                        // 새로운 카드 요소 생성
                                        var card = document.createElement('div');
                                        card.className = 'cardList'
                                        // 카드 내용 생성
                                        var cardContent = document.createElement('div');
                                        cardContent.className = 'card-content';
                                        cardContent.style.height = '24rem';
                                        cardContent.innerHTML = '<div class="titleH">' +
                                            '<div style="font-family: Reko !important; font-size:24px;margin-top:10px;">' +
                                            cardData
                                            .titlle +
                                            '</div>' + '</div>' +
                                            '<div class="cardCon" style="padding:0 20px; overflow-y:scroll;">' +
                                            '<p class="infos"><span style="color:#644D9D;">지원대상 :&nbsp;&nbsp;</span> ' +
                                            cardData.target1 + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">사업 내용 :&nbsp;&nbsp;</span> ' +
                                            cardData.content + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">공고 월 :&nbsp;&nbsp;</span> ' +
                                            cardData.period1 + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">지원방법 :&nbsp;&nbsp;</span> ' +
                                            cardData.how + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">지역 :&nbsp;&nbsp;</span> ' +
                                            cardData.local1 + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">세부분야 :&nbsp;&nbsp;</span> ' +
                                            cardData.detailarea + '</p>' +
                                            '</div>' +
                                            '<hr style="color: #7f5cde; border: none; height: 2px; background-color: #7f5cde;">' +
                                            '<div class="d-flex justify-content-center align-items-center" style="margin:-8px 0 0 0;">' +
                                            '<div style="font-weight:600; font-size:30px;">' +
                                            '<span style="font-weight:600; font-size:25px;">지원 금액 :&nbsp;&nbsp;</span>' +
                                            supplyAmount.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                                ",") +
                                            ' 원</div>' +
                                            '</div>';
                                        // 카드 요소를 페이지에 추가
                                        card.appendChild(cardContent);
                                        document.getElementById('okView').appendChild(card);
                                    } else {
                                        var cardData2 = result[i]
                                        var supplyAmount2 = Math.round(cardData2.supply_amount /
                                                10000) *
                                            10000;

                                        var sum2 = 0;
                                        var sum4 = 0;
                                        sum2 = Math.max(supplyAmount2);
                                        // 새로운 카드 요소 생성
                                        var card2 = document.createElement('div');
                                        card2.className = 'cardList'
                                        // 카드 내용 생성
                                        var cardContent2 = document.createElement('div');
                                        cardContent2.className = 'card-content';
                                        cardContent2.style.height = '24rem';
                                        cardContent2.innerHTML = '<div class="titleH">' +
                                            '<div style="font-family: Reko !important; font-size:24px;margin-top:10px;">' +
                                            cardData2
                                            .titlle +
                                            '</div>' + '</div>' +
                                            '<div class="cardCon" style="padding:0 20px; overflow-y:scroll;">' +
                                            '<p class="infos"><span style="color:#644D9D;">지원대상 :&nbsp;&nbsp;</span> ' +
                                            cardData2.target1 + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">사업 내용 :&nbsp;&nbsp;</span> ' +
                                            cardData2.content + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">공고 월 :&nbsp;&nbsp;</span> ' +
                                            cardData2.period1 + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">지원방법 :&nbsp;&nbsp;</span> ' +
                                            cardData2.how + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">지역 :&nbsp;&nbsp;</span> ' +
                                            cardData2.local1 + '</p>' +
                                            '<p class="infos"><span style="color:#644D9D;">세부분야 :&nbsp;&nbsp;</span> ' +
                                            cardData2.detailarea + '</p>' +
                                            '</div>' +
                                            '<hr style="color: #7f5cde; border: none; height: 2px; background-color: #7f5cde;">' +
                                            '<div class="d-flex justify-content-center align-items-center" style="margin:-8px 0 0 0;">' +
                                            '<div style="font-weight:600; font-size:30px;">' +
                                            '<span style="font-weight:600; font-size:25px;">지원 금액 :&nbsp;&nbsp;</span>' +
                                            supplyAmount2.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                                ",") +
                                            ' 원</div>' +
                                            '</div>';
                                        // 카드 요소를 페이지에 추가
                                        card2.appendChild(cardContent2);
                                        document.getElementById('okView2').appendChild(card2);
                                    }
                                }

                                sum3 = Math.round(sum1 / 10000) * 10000;
                                sum4 = Math.round(sum2 / 10000) * 10000;
                                console.log('sum1', sum3);
                                console.log('sum2', sum4);
                                var cardSum1 = document.createElement('div');
                                cardSum1.className = 'cardSum1';
                                cardSum1.innerHTML =

                                    '출연금 : ' + sum3.toString().replace(
                                        /\B(?=(\d{3})+(?!\d))/g,
                                        ",") + '원';
                                var cardSum2 = document.createElement('div');
                                cardSum2.className = 'cardSum2';
                                cardSum2.innerHTML =

                                    '최대융자금 : ' + sum4.toString().replace(
                                        /\B(?=(\d{3})+(?!\d))/g,
                                        ",") + '원';

                                document.getElementsByClassName('sum1')[0].appendChild(cardSum1);
                                document.getElementsByClassName('sum2')[0].appendChild(cardSum2);

                                List00.style.display = '';
                                purpleBoXX.style.display = 'none';

                            } else {
                                alert('인증되지 않은 인증코드입니다.');
                            }
                        },
                        error: function(e) {
                            console.log(e);
                        }
                    });
                } else {
                    if (xhr.status == 404) {
                        alert('인증되지 않은 인증코드입니다.');
                    }
                    // console.error('Request failed with status:', xhr.status);
                }
            }
        };
        // GET 요청 전송
        xhr.send();
    }
}
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("modal2");
var close = document.getElementsByClassName("close")[0];
var loading = document.getElementById("loading");
var videoModal = document.getElementById("videoModal");
var closex = document.getElementsByClassName("closex")[0];
var bmTicketModal = document.getElementById("bmTicketModal");
var closeBmTicket = document.getElementsByClassName("closeBmTicket")[0];
var offlineTicketModal = document.getElementById("offlineTicketModal");
var closeOfflineTicket = document.getElementsByClassName("closeOfflineTicket")[0];

var clickCount = 0;


// 사업공고리스트모달 열기
document.getElementById('List1').addEventListener('click', function() {
    var verificationCode2 = document.getElementById('verificationCode').value;
    $.ajax({
        url: './clickCheck.php',
        type: 'POST',
        cache: false, // 캐싱 방지
        data: {
            trueFalse: 'supportProjectListBool',
            count: 'supportProjectListCount',
            authCode: verificationCode2
        },
        success: function(res) {
            console.log('res', res);
        },
        error: function(e) {
            console.log('e', e);
        }
    });

    if (clickCount === 0) {
        // 첫 번째 클릭에 수행할 동작
        // 모달 열기
        modal.style.display = "block";
        setTimeout(function() {
            modal
                .classList
                .add('show');
            setTimeout(function() {
                loading.style.opacity = '0';
                modal2.style.opacity = '1';
                modal2.style.transition = 'opacity 0.5s ease';
            }, 2000);
        }, 10);

    } else if (clickCount >= 1) {
        // 두 번째 클릭에 수행할 동작
        // 모달 열기
        modal.style.display = "block";
        setTimeout(function() {
            modal
                .classList
                .add('show');
            setTimeout(function() {
                loading.style.opacity = '0';
                modal2.style.opacity = '1';
                modal2.style.transition = 'opacity 0.5s ease';
            }, 500);
        }, 10);

    }

    // 클릭 횟수 증가
    clickCount++;
});


// 모달 닫기 버튼
close.addEventListener('click', function() {
    closeModal();
});

// 외부 클릭으로 모달 닫기
window.addEventListener('click', function(event) {
    if (event.target == modal) {
        closeModal();
    }
});

// 모달 닫는 함수
function closeModal() {
    modal
        .classList
        .remove('show');
    setTimeout(function() {
        modal.style.display = "none";
        loading
            .style.opacity = '1';
        modal2.style.opacity = '0';
    }, 300); // 300ms는 CSS 트랜지션 지속 시간에 따라 조정이 필요할 수 있습니다.
}

// ===============================================================================

// // 강의영상모달 열기
// document
//     .getElementById('List4')
//     .addEventListener('click', function() {
//         var verificationCode2 = document.getElementById('verificationCode').value;
//         $.ajax({
//             url: './clickCheck.php',
//             type: 'POST',
//             cache: false, // 캐싱 방지
//             data: {
//                 trueFalse: 'businessPlanVideobool',
//                 count: 'businessPlanVideoCount',
//                 authCode: verificationCode2
//             },
//             success: function(res) {
//                 console.log('res', res);
//             },
//             error: function(e) {
//                 console.log('e', e);
//             }
//         });
//         videoModal.style.display = "block";
//         setTimeout(function() {
//             videoModal
//                 .classList
//                 .add('show');
//         }, 10);
//     });

// // 모달 닫기 버튼
// closex.addEventListener('click', function() {
//     closeVideoModal();
// });

// // 외부 클릭으로 모달 닫기
// window.addEventListener('click', function(event) {
//     if (event.target == videoModal) {
//         closeVideoModal();
//     }
// });

// // 모달 닫는 함수
// function closeVideoModal() {
//     videoModal
//         .classList
//         .remove('show');
// }

// ===============================================================================

// BMDS Ticket모달 열기
document
    .getElementById('List4')
    .addEventListener('click', function() {
        var verificationCode2 = document.getElementById('verificationCode').value;
        // $('.bmTicketNum').text(verificationCode2);
        bmTicketModal.style.display = "block";
        setTimeout(function() {
            bmTicketModal
                .classList
                .add('show');
        }, 10);
    });

// 모달 닫기 버튼
closeBmTicket.addEventListener('click', function() {
    closeBmTicketModal();
});

// 외부 클릭으로 모달 닫기
window.addEventListener('click', function(event) {
    if (event.target == bmTicketModal) {
        closeBmTicketModal();
    }
});

// 모달 닫는 함수
function closeBmTicketModal() {
    bmTicketModal
        .classList
        .remove('show');
}

// ===============================================================================

// // offline Ticket모달 열기
// document
//     .getElementById('List6')
//     .addEventListener('click', function() {
//         var verificationCode2 = document.getElementById('verificationCode').value;
//         $.ajax({
//             url: './clickCheck.php',
//             type: 'POST',
//             cache: false, // 캐싱 방지
//             data: {
//                 trueFalse: 'offlineBool',
//                 count: 'offlineCount',
//                 authCode: verificationCode2
//             },
//             success: function(res) {
//                 console.log('res', res);
//             },
//             error: function(e) {
//                 console.log('e', e);
//             }
//         });
//         offlineTicketModal.style.display = "block";
//         setTimeout(function() {
//             offlineTicketModal
//                 .classList
//                 .add('show');
//         }, 10);
//     });

// // 모달 닫기 버튼
// closeOfflineTicket.addEventListener('click', function() {
//     closeOfflineTicketModal();
// });

// // 외부 클릭으로 모달 닫기
// window.addEventListener('click', function(event) {
//     if (event.target == offlineTicketModal) {
//         closeOfflineTicketModal();
//     }
// });

// // 모달 닫는 함수
// function closeOfflineTicketModal() {
//     offlineTicketModal
//         .classList
//         .remove('show');
// }

// ===============================================================================

function downloadZip() {
    const zipDownloadLink = document.createElement('a');
    zipDownloadLink.href = './BMDS(Build-up.ver)샘플.zip'; // 압축 파일의 경로로 변경해야 합니다.
    zipDownloadLink.download = 'BMDS(Build-up.ver)샘플.zip'; // 다운로드될 파일의 이름을 지정합니다.
    zipDownloadLink.click();
    var verificationCode2 = document.getElementById('verificationCode').value;
    $.ajax({
        url: './clickCheck.php',
        type: 'POST',
        cache: false, // 캐싱 방지
        data: {
            trueFalse: 'businessPlanSampleBool',
            count: 'businessPlanSampleCount',
            authCode: verificationCode2
        },
        success: function() {

        },
        error: function(err) {
            console.log('e', err);
        }
    });
}

function ManualDown() {
    const ManualDownloadLink = document.createElement('a');
    ManualDownloadLink.href = '/pages/load/BMDSB2C.pdf';
    ManualDownloadLink.download = 'Manual.pdf';
    ManualDownloadLink.click();
    var verificationCode2 = document.getElementById('verificationCode').value;
    $.ajax({
        url: './clickCheck.php',
        type: 'POST',
        cache: false, // 캐싱 방지
        data: {
            trueFalse: 'businessPlanCreationMenuBool',
            count: 'businessPlanCreationMenuCount',
            authCode: verificationCode2
        },
        success: function(res) {
            console.log('res', res);
        },
        error: function(e) {
            console.log('e', e);
        }
    });
}

function gotoBMDS() {
    window.location.href = 'https://bmds.co.kr';
}


// ===============================================================================
function applyStylesOnMouseOver(element) {
    element.querySelector('.btnDown').style.background = '#d1ccec';
    element.querySelector('.btnDown2').style.boxShadow = '-8px -8px 10px rgba(0, 0, 0, 0.2)';
}

function applyStylesOnMouseOut(element) {
    element.querySelector('.btnDown').style.background = 'linear-gradient(45deg, #755fce, #5a86c3)';
    element.querySelector('.btnDown2').style.boxShadow = '8px 8px 10px rgba(0, 0, 0, 0.2)';
}

function addEventListeners(listId) {
    var listElement = document.getElementById(listId);

    listElement.addEventListener('mouseover', function() {
        applyStylesOnMouseOver(this);
    });

    listElement.addEventListener('mouseout', function() {
        applyStylesOnMouseOut(this);
    });
}

// 각 버튼에 대해 함수 호출
addEventListeners('List1');
addEventListeners('List2');
addEventListeners('List3');
addEventListeners('List4');
addEventListeners('List5');
addEventListeners('List6');
// ===============================================================================
</script>

</html>