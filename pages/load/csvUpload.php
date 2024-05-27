<link rel="stylesheet" href="../../public/css/aboutus.css">
<link rel="stylesheet" href="../../public/css/qna.css">
<meta charset="UTF-8">

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" name="description" content="비즈니스 모델 플랫폼 솔루션에 대한 페이지입니다.">
    <title>메라클 BMPS</title>
    <!-- jQuery 라이브러리 로드 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.iamport.kr/v1/iamport.js"></script>
    <?php include('../../common/Header.php') ?>
    <?php include('../../communication/floatmenu.php') ?>
    <link rel="stylesheet" href="./Map.css" />
    <style>
    label {
        margin-bottom: 0 !important;
    }

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .modal-content2 {
        margin: 5% auto;
        padding: 20px;
        width: 100rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        /*background-color: #fff;*/
        background: white;
        overflow-y: auto;
        max-height: 80vh;
    }

    .checkbox-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        /* 항목들이 container를 넘칠 경우 다음 줄로 이동 */
        gap: 1rem;
        /* 항목들 사이의 간격 */
    }

    .checkbox-item {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    /* #showModalBtn {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    } */

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card {
        transition: 0.3s;
        background: #F6F5FA;
        width: 45%;
        height: 427px;
        margin: 1.5%;
        border-radius: 15px;
        padding: 30px 20px 0;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 6px 6px 15px rgba(0, 0, 0, 0.2);
    }

    .card2 {
        transition: 0.3s;
        background: #F6F5FA;
        width: 80rem;
        height: 435px;
        margin: 2%;
        border-radius: 15px;
        padding: 30px 20px 0;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 6px 6px 15px rgba(0, 0, 0, 0.2);
    }

    .titleH {
        width: 100%;
        height: 4rem;
        background: #F6F5FA;
        border: 1px solid #7f5cde;
        border-radius: 10px;
        font-size: 24px;
        color: black;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        letter-spacing: -2px;
        font-weight: 600;
    }

    .card-content p {
        margin: 16px 0;
        /* 텍스트 사이 간격 조정 */
        color: #555;
    }

    .card-content p span {
        font-weight: bold;
        /* 항목 이름 볼드체로 표시 */
    }

    .card-content {
        overflow-y: auto;
        /* 이 부분 추가 */
        height: calc(100%);
        /* 제목 높이와 여백을 고려한 높이 조절. 필요에 따라 조절 가능 */
    }

    .card-content2 {
        overflow-y: auto;
        /* 이 부분 추가 */
        height: calc(100%);
        /* 제목 높이와 여백을 고려한 높이 조절. 필요에 따라 조절 가능 */
        padding: 0 3rem;
    }

    /* Chrome, Edge, Safari */
    .card-content::-webkit-scrollbar {
        width: 0;
        /* 초기 상태에서 스크롤바 숨기기 */
    }

    .card-content:hover::-webkit-scrollbar {
        width: 12px;
        /* hover 시에만 스크롤바 보이기 */
    }

    .card-content::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 6px;
    }

    .card-content::-webkit-scrollbar-thumb:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .card-content::-webkit-scrollbar-track {
        background-color: transparent;
    }

    /* Firefox */
    .card-content {
        scrollbar-width: none;
        /* 초기 상태에서 스크롤바 숨기기 */
    }

    .card-content:hover {
        scrollbar-width: thin;
        /* hover 시에만 스크롤바 보이기 */
        scrollbar-color: rgba(0, 0, 0, 0.5) transparent;
    }

    /* IE */
    .card-content {
        -ms-overflow-style: none;
        /* 초기 상태에서 스크롤바 숨기기 */
    }

    .card-content:hover {
        -ms-overflow-style: auto;
        /* hover 시에만 스크롤바 보이기 */
    }

    .card-container:first-of-type {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .fullSqure {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 15px;
        margin-right: 5px;
        color: #998bc5;
    }

    input[type="text"],
    textarea {
        border: none;
        border-radius: 5px;
    }

    .infos {
        font-size: 13px;
        font-weight: 600;
    }

    .infos2 {
        font-size: 18px;
        font-weight: 600;
    }

    .btnPurple {
        width: 78rem;
        height: 3.5rem;
        background: linear-gradient(to right, #7f5cde, #6e64d1);
        border-radius: 30px;
        font-size: 24px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        letter-spacing: -2px;
        cursor: pointer;
        font-weight: 600;
        border: none;
    }

    .hidden {
        display: none;
    }
    </style>
    <script>
    $(document)
        .ready(function() {
            // 시작할 때 텍스트 입력 비활성화
            $('#otherField').prop('disabled', true);

            // 체크박스 상태 변경 시 이벤트 핸들러
            $('#other').change(function() {
                if ($(this).prop('checked')) {
                    // 체크박스가 체크되면 텍스트 입력 활성화
                    $('#otherField').prop('disabled', false);
                } else {
                    // 체크박스가 체크되지 않으면 텍스트 입력 비활성화 및 내용 삭제
                    $('#otherField')
                        .prop('disabled', true)
                        .val('');
                }
            });

            $('#otherField2').prop('disabled', true);
            $('input[name="whereIn"]').change(function() { // "groupName"은 라디오 버튼 그룹의 name입니다.
                // 라디오 버튼의 상태가 변할 때 실행되는 코드
                if ($(this).is(':checked')) {
                    if ($(this).val() == '기타') {
                        $('#otherField2').prop('disabled', false);
                    } else {
                        $('#otherField2')
                            .prop('disabled', true)
                            .val('');
                    }
                } else if ($(this).val() == '기타') {
                    $('#otherField2').val('');
                }
            });
        });
    </script>
</head>


<body>
    <?php include('../../common/Nav.php') ?>

    <div class="consultingPage">

        <!-- 조회 박스 start -->
        <?php if (isset($_POST['arr2'])) { $arr2 = json_decode($_POST['arr2'], true); // 받아온 데이터를 배열로 변환
             } if (isset($_POST['whereClause'])) { $whereClause =
            $_POST['whereClause']; } ?>
        <!--31273F-->

        <div
            style="background-color: #f7f4fb; width:83rem; height:62rem; border-radius: 45px; padding:1rem; margin:8rem 0;box-shadow: 6px 6px 7px rgba(0, 0, 0, 0.2);">
            <div style="margin:auto;">
                <!-- <div class="d-flex flex-wrap justify-content-start" style="height:0;">
                    <img class="imgCheckList2" src="../../public/img/banner/질문.png" alt="질문이미지">
                </div> -->
                <form id="paymentForm" action="./Map.php" method="POST"
                    style="background-color: #f7f4fb; border-radius: 30px; padding:2.5% 5% 1% 5%; width:100%;">
                    <h1 style="text-align:center; font-weight:600; margin:0 0 1rem 0;">추가적인 간단한 답변을
                        작성해주세요.</h1>
                    <input type="hidden" name="arr2" value='<?php echo json_encode($arr2); ?>'>
                    <textarea name="whereClause" style="display:none;"><?php echo $whereClause; ?></textarea>

                    <div class="form-group my-5">
                        <label class="d-flex flex-wrap justify-content-start" for="consulting">
                            <span class="fullSqure">■</span>
                            <span style="font-size:24px; font-weight:600; margin-top:4px;">구상중이신 사업 아이템에 대해서 간단하게
                                설명해주세요.</span>
                        </label>
                        <input type="text" name="consulting" id="consulting" class="mt-3"
                            style="height:3rem; font-size:20px;box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1); outline:none;">
                    </div>
                    <div class="form-group my-5">
                        <label class="d-flex flex-wrap justify-content-start" style="margin-bottom:1px;">
                            <span class="fullSqure">■</span>
                            <span style="font-size:22px; font-weight:600; margin-top:4px;">아래 항목 중 궁금하신 분야가
                                있으신가요?</span>
                            <span style="font-size:15px; margin-top:11px;">(중복가능)</span>
                        </label>
                        <div class="d-flex flex-column justify-content-between" style="height:11rem;">
                            <div class="d-flex justify-content-between align-items-center mt-4 w-100">
                                <label style="text-align:center;" for="itemValidation"
                                    class="questionBtn1 question clicked">
                                    <input type="checkbox" value="아이템 검증" name="consulting_fields[]" id="itemValidation"
                                        class="checkbox-icon" style="display:none;" checked>
                                    <span class="questionText">아이템 검증</span>
                                </label>
                                <label style="text-align:center" for="itemImprovement" class="questionBtn1  question">
                                    <input type="checkbox" value="아이템 고도화" name="consulting_fields[]"
                                        id="itemImprovement" class="checkbox-icon" style="display: none;">
                                    <span class="questionText">아이템 고도화</span>
                                </label>
                                <label style="text-align:center" for="businessPlan" class="questionBtn2  question">
                                    <input type="checkbox" value="사업계획 수립 및 작성 지원" name="consulting_fields[]"
                                        id="businessPlan" class="checkbox-icon" style="display: none;">
                                    <span class="questionText">사업계획 수립 및 작성 지원</span>
                                </label>
                                <label style="text-align:center" for="investmentAdvice" class="questionBtn1  question">
                                    <input type="checkbox" value="투자 자문 및 IR" name="consulting_fields[]"
                                        id="investmentAdvice" class="checkbox-icon" style="display: none;">
                                    <span class="questionText">투자 자문 및 IR</span>
                                </label>
                                <label style="text-align:center" for="governmentSupport" class="questionBtn2  question">
                                    <input type="checkbox" value="직접적인 정부지원 참여 지원" name="consulting_fields[]"
                                        id="governmentSupport" class="checkbox-icon" style="display: none;">
                                    <span class="questionText">직접적인 정부지원 참여 지원</span>
                                </label>
                            </div>
                            <div class="form-group mb-3 d-flex flex-row">
                                <label style="text-align:center" for="other" class="questionBtn1  question">
                                    <input type="checkbox" value="기타" name="consulting_fields[]" id="other"
                                        class="checkbox-icon" style="display: none;">
                                    <span class="questionText">기타</span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" style="margin-top:-7px;">
                            <textarea id="otherField" name="otherField"
                                style="width:100%; height:7rem; outline: none; resize: none; font-size:20px; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-flex flex-wrap justify-content-start" for="whereIn">
                            <span class="fullSqure">■</span>
                            <span style="font-size:24px; font-weight:600; margin-top:4px;">유입경로를 선택해주세요.</span>
                        </label>
                        <div class="d-flex flex-column justify-content-between" style="height:11rem;">
                            <div class="d-flex justify-content-between align-items-center mt-4 w-100">
                                <label style="text-align:center;" for="SNS" class="questionBtn5  question2 clicked">
                                    <input type="radio" value="SNS" name="whereIn" id="SNS" class="checkbox-icon"
                                        checked style="display:none;">
                                    <span class="questionText">SNS(페이스북,인스타그램)</span>
                                </label>
                                <label style="text-align:center" for="Internet" class="questionBtn4  question2">
                                    <input type="radio" value="인터넷" name="whereIn" id="Internet" class="checkbox-icon"
                                        style="display:none;">
                                    <span class="questionText">인터넷 검색(네이버,구글 등 포털사이트)</span>
                                </label>
                                <label style="text-align:center" for="blog" class="questionBtn3  question2">
                                    <input type="radio" value="네이버 블로그" name="whereIn" id="blog" class="checkbox-icon"
                                        style="display:none;">
                                    <span class="questionText">네이버 블로그</span>
                                </label>
                                <label style="text-align:center" for="youtube" class="questionBtn3  question2">
                                    <input type="radio" value="유튜브" name="whereIn" id="youtube" class="checkbox-icon"
                                        style="display:none;">
                                    <span class="questionText">유튜브</span>
                                </label>
                                <label style="text-align:center" for="Introduc" class="questionBtn3  question2">
                                    <input type="radio" value="지인 소개" name="whereIn" id="Introduc" class="checkbox-icon"
                                        style="display:none;">
                                    <span class="questionText">지인 소개</span>
                                </label>
                            </div>
                            <div class="form-group mb-3 d-flex justify-content-between align-items-center w-100">
                                <label style="text-align:center" for="other2" class="questionBtn1  question2 other2">
                                    <input type="radio" value="기타" name="whereIn" id="other2" class="checkbox-icon"
                                        style="display:none;">
                                    <span class="questionText">기타</span>
                                </label>
                                <textarea id="otherField2" name="whereIn"
                                    style="width:61rem; height:50px; outline: none; resize: none; font-size:20px; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);"></textarea>
                            </div>
                        </div>

                        <!-- id="showModalBtn" -->
                        <div class="d-flex flex-wrap justify-content-center mt-4">
                            <button class="ddddBtn" onclick="goToList()" type="button">나에게 맞는 지원사업과 다양한 서비스 활용하러
                                가기</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex flex-wrap justify-content-center">
                <img class="imgCheckList2" src="../../public/img/banner/B3B3E_2.png" alt="">
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content2">
                <div id="loading" class=""></div>
                <span class="close"></span>
                <div class="modal-body2" id="modal2" style="opacity:0;">
                    <div class="card-container">
                        <!-- 첫 번째 쿼리 실행: 가장 적은 금액을 가진 항목 조회 -->
                        <?php 
                        $sql1 = "SELECT * FROM roadMap WHERE
                            (areas IN ('사업화', 'R&D', '글로벌','융자') AND isShow = 1) " . $whereClause . " OR
                            idx=193 ORDER BY supply_amount LIMIT 1"; $result1 = mysqli_query($conn, $sql1);
                            $row1 = mysqli_fetch_array($result1); $lowest_idx = $row1['idx']; // 첫 번째 카드 출력
                            ?>
                        <div class="card2">
                            <div class="card-content2">
                                <div class="titleH"><?php echo $row1['titlle']; ?></div>
                                <div style="padding:0 20px;">
                                    <p class="infos2">
                                        <span class="" style="color:#644D9D;">지원 대상 :&nbsp;&nbsp;</span>
                                        <?php echo $row1['target1']; ?>
                                    </p>
                                    <p class="infos2">
                                        <span style="color:#644D9D;">사업 내용 :&nbsp;&nbsp;</span>
                                        <?php echo $row1['content']; ?>
                                    </p>
                                    <p class="infos2">
                                        <span style="color:#644D9D;">공고 예정일 :&nbsp;&nbsp;</span>
                                        <?php echo $row1['period1']; ?>
                                    </p>
                                    <p class="infos2">
                                        <span style="color:#644D9D;">지원 방법 :&nbsp;&nbsp;</span>
                                        <?php echo $row1['how']; ?>
                                    </p>
                                    <p class="infos2">
                                        <span style="color:#644D9D;">지역 :&nbsp;&nbsp;</span>
                                        <?php echo $row1['local1']; ?>
                                    </p>
                                    <p class="infos2">
                                        <span style="color:#644D9D;">세부 분야 :&nbsp;&nbsp;</span>
                                        <?php echo $row1['detailarea']; ?>
                                    </p>
                                    <hr style="color: #7f5cde; border: none; height: 2px; background-color: #7f5cde;">
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <p style="font-weight:600; font-size:30px;">
                                        <span style="font-weight:600; font-size:25px;">지원 금액 :&nbsp;&nbsp;</span>
                                        <?php echo number_format($row1['test']); ?>
                                        원
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="margin:0 0 0 0;">
                        <button class="btnPurple" id="submitPaymentFormBtn">자세히 알아보기</button>
                    </div>
                    <div class="card-container mt-5" style="width: 80rem;">
                        <!-- 두 번째 쿼리 실행: 첫 번째 쿼리의 결과를 제외하고 모든 항목 조회  -->
                        <?php 
                        $sql2 = "SELECT * FROM roadMap
                            WHERE ((areas IN ('사업화', 'R&D', '글로벌','융자') AND isShow = 1) " . $whereClause . "
                            OR idx=193) AND idx != $lowest_idx"; $result2 = mysqli_query($conn, $sql2);
                            while ($row2 = mysqli_fetch_array($result2)) { ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="titleH"><?php echo str_repeat('*', mb_strlen($row2['titlle'], 'UTF-8')); ?>
                                </div>
                                <div style="padding:0 20px;">
                                    <!-- ... 나머지 카드 내용도 동일하게 출력 ... -->
                                    <p class="infos">
                                        <span style="color:#644D9D;">지원 대상 :&nbsp;&nbsp;</span>
                                        <?php $target1 = $row2['target1']; $maxLength = 50; if (mb_strlen($target1,
                                            'UTF-8') > $maxLength) { $target1 = mb_substr($target1, 0, $maxLength, 'UTF-8');
                                            $target1 .= '...'; } echo str_repeat('*', mb_strlen($target1, 'UTF-8'));?>
                                    </p>
                                    <p class="infos">
                                        <span style="color:#644D9D;">사업 내용 :&nbsp;&nbsp;</span>
                                        <?php $content = $row2['content']; $maxLength = 50; if (mb_strlen($content,
                                            'UTF-8') > $maxLength) { $content = mb_substr($content, 0, $maxLength, 'UTF-8');
                                            $content .= '...'; } echo str_repeat('*', mb_strlen($content, 'UTF-8'));?>
                                    </p>
                                    <p class="infos">
                                        <span style="color:#644D9D;">공고 예정일 :&nbsp;&nbsp;</span>
                                        <?php $period1 = $row2['period1']; $maxLength = 50; if (mb_strlen($period1,
                                            'UTF-8') > $maxLength) { $period1 = mb_substr($period1, 0, $maxLength, 'UTF-8');
                                            $period1 .= '...'; } echo str_repeat('*', mb_strlen($period1, 'UTF-8'));?>
                                    </p>
                                    <p class="infos">
                                        <span style="color:#644D9D;">지원 방법 :&nbsp;&nbsp;</span>
                                        <?php $how = $row2['how']; $maxLength = 50; if (mb_strlen($how, 'UTF-8') >
                                            $maxLength) { $how = mb_substr($how, 0, $maxLength, 'UTF-8'); $how .= '...'; }
                                            echo str_repeat('*', mb_strlen($how, 'UTF-8'));?>
                                    </p>
                                    <p class="infos">
                                        <span style="color:#644D9D;">지역 :&nbsp;&nbsp;</span>
                                        <?php $local1 = $row2['local1']; $maxLength = 50; if (mb_strlen($local1,
                                            'UTF-8') > $maxLength) { $local1 = mb_substr($local1, 0, $maxLength, 'UTF-8');
                                            $local1 .= '...'; } echo str_repeat('*', mb_strlen($local1, 'UTF-8'));?>
                                    </p>
                                    <p class="infos">
                                        <span style="color:#644D9D;">세부 분야 :&nbsp;&nbsp;</span>
                                        <?php $detailarea = $row2['detailarea']; $maxLength = 50; if
                                            (mb_strlen($detailarea, 'UTF-8') > $maxLength) { $detailarea =
                                            mb_substr($detailarea, 0, $maxLength, 'UTF-8'); $detailarea .= '...'; } echo
                                            str_repeat('*', mb_strlen($detailarea, 'UTF-8'));?>
                                    </p>
                                    <hr style="color: #7f5cde; border: none; height: 2px; background-color: #7f5cde;">
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <p style="font-weight:600; font-size:30px;">
                                        <span style="font-weight:600; font-size:25px;">지원 금액 :&nbsp;&nbsp;</span>
                                        <?php echo number_format($row2['test']);?>
                                        원
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <?php include("../../common/Footer.php") ?>
</body>

<script>
document
    .getElementById('submitPaymentFormBtn')
    .addEventListener('click', function() {
        document
            .getElementById('paymentForm')
            .submit();
    });
// function validateInput() { // 유효성 검사 로직 // ... // 유효성 검사가 통과되면 폼 제출
// document.getElementById('paymentForm').submit(); }
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("modal2");
var span = document.getElementsByClassName("close")[0];
var loading = document.getElementById("loading");

// 모달 열기
document
    .getElementById('showModalBtn')
    .addEventListener('click', function() {
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
    });

// 모달 닫기 버튼
span.addEventListener('click', function() {
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
</script>

<!-- ============================================================================================ -->
<script>
const checkBoxes = document.querySelectorAll('.question input[type="checkbox"]');

checkBoxes.forEach(function(checkbox) {
    checkbox
        .addEventListener('change', function() {
            const label = this.closest('.question');
            if (this.checked) {
                label
                    .classList
                    .add('clicked');
            } else {
                label
                    .classList
                    .remove('clicked');
            }
        });
});
const whereInBtn = document.querySelectorAll('.question2 input[type="radio"]');
whereInBtn.forEach(function(radio) {
    radio
        .addEventListener('change', function() {
            // const radioValue = this.value;

            const labels = document.querySelectorAll('.question2');
            labels.forEach(function(label) {
                label
                    .classList
                    .remove('clicked');
            });

            const label = this.closest('.question2');
            if (this.checked) {
                label
                    .classList
                    .add('clicked');
            }
        });
});

function goToList() {
    // location.href = "./list.php"
    // JavaScript 코드
    // 폼 데이터를 읽어오기
    var formData = $('#paymentForm').serialize();

    // buyerName, buyerTel, buyerEmail을 로컬 스토리지에서 가져오기
    var buyerName = localStorage.getItem('buyerName');
    var buyerTel = localStorage.getItem('buyerTel');
    var buyerEmail = localStorage.getItem('buyerEmail');

    // 데이터 합치기
    formData += '&buyer_name=' + buyerName + '&buyer_tel=' + buyerTel + '&buyer_email=' + buyerEmail;

    // AJAX 요청 보내기
    $.ajax({
        url: './addQuestion.php',
        type: 'POST',
        data: formData,
        success: function(res) {
            console.log('res', res);
            localStorage.removeItem('buyerName');
            localStorage.removeItem('buyerTel');
            localStorage.removeItem('buyerEmail');

            if (!alert(
                    '\n결제해 주셔서 감사합니다.\n\n고객님의 이메일 계정으로 인증코드를 전송하였습니다.\n서비스를 이용하기 위해서는 반드시 인증코드가 필요합니다.\n\n아래의 확인 버튼을 누르면 서비스 이용 화면으로 이동합니다.'
                )) {
                location.href = "./list.php";
            }
        },
        error: function(e) {
            console.log('e', e);
        }
    });
}
</script>

</html>