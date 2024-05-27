<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="description" content="사업계획서강의">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메라클</title>
    <link rel="stylesheet" href="./Map.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
</head>

<body>
    <div class="offlineTicketUI">
        <div class="offlineTicketScroll">
            <div class="offlineTicketSpace">
                <div class="offlineTicketNumQuestion">
                    <div class="offlineTicketNum">fds2548s2</div>
                </div>
            </div>
            <div class="offlineTicketDescription">
                <div class="offlineTicketDescriptionFont">* 본 초청권은 회원에게만 제공되며 공개강좌 1회에 한해서만 사용 가능합니다.
                </div>
                <div class="offlineTicketDescriptionFont">* 공개강좌 일정과 장소는 강좌 개설일 10일 전에 이메일로 개별공지해 드립니다.</div>
            </div>
            <button id="saveButton">이미지 다운로드</button>
        </div>
        <div class="offlineTicketBtn" onclick="gotoBMDS()">
            비즈니스 모델 설계 툴 사용하러 가기
            <span>(BMDS 사이트로 이동)</span>
        </div>
        <div style="display:none;">
            <img id="imageToSave" src="../../public/img/banner/offlineTicket.jpg" alt="이미지">
        </div>
        <!-- 모달창안의 모달창 -->
        <div id="offlineTicketModalMini" class="offlineTicketModalClassMini">
            <div class="offlineTicketModalMini-content">
                <div class="offlineTicketModalMini-body">
                    <div class="offlineTicketSpaceMini"></div>
                    <div class="closeOfflineTicketMini">X</div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
function useOfflineTicket() {
    if (confirm('본 쿠폰은 일회성 쿠폰이므로\n사용하실때 신중하게 사용해 주시기 바랍니다.\n\n정말 참여권을 사용하시겠습니까?')) {}
}

function gotoBMDS() {
    window.open("https://bmds.co.kr", "_blank");
}

// ===============================================================================
var offlineTicketModalMini = document.getElementById("offlineTicketModalMini");
var closeOfflineTicketMini = document.getElementsByClassName("closeOfflineTicketMini")[0];
// offline Ticket모달창 안의 모달창 열기
// document
//     .getElementsByClassName('offlineTicketQuestion')[0]
//     .addEventListener('click', function() {
//         offlineTicketModalMini
//             .classList
//             .add('show');

//     });

// 모달 닫기 버튼
closeOfflineTicketMini.addEventListener('click', function() {
    closeOfflineTicketModalMini();
});

// 외부 클릭으로 모달 닫기
window.addEventListener('click', function(event) {
    if (event.target == offlineTicketModalMini) {
        closeOfflineTicketModalMini();
    }
});

// 모달 닫는 함수
function closeOfflineTicketModalMini() {
    offlineTicketModalMini
        .classList
        .remove('show');
}

// ===============================================================================

document.getElementById('saveButton').addEventListener('click', function() {
    var offlineTicketSpace = document.getElementsByClassName('offlineTicketSpace');
    [0]
    html2canvas(offlineTicketSpace, {
        onrendered: function(canvas) {
            var link = document.createElement('a');
            link.download = '메라클_오프라인_정기_공개강좌_초청권.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
        }
    });
});

// ===============================================================================
</script>

</html>