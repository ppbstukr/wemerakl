<link rel="stylesheet" href="../../public/css/aboutus.css">
<link rel="stylesheet" href="../../public/css/qna.css">
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
    .header {
        font-size: 30px;
        color: #45328A;
        font-weight: 500;
    }

    .amount {
        font-size: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 800;
        width: 22rem;
        height: 3rem;
        margin-top: 5px;
    }

    .acount {
        font-size: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 800;
        width: 22rem;
        height: 3rem;
        margin-top: -13px;
    }

    .amountwww {
        font-size: 35px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-weight: 600;
        width: 3rem;
        height: 3rem;
    }

    .amount2 {
        font-size: 25px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-weight: 800;
        width: 30rem;
        height: 4.5rem;
    }

    .amount3 {
        font-size: 21px;
        width: 415px;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        color: white;
        font-weight: 600;
        line-height: 40px;
        margin-left: 26px;
    }

    .amount4 {
        font-size: 33px;
        width: 593px;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        font-weight: 600;
        margin: 1.3rem 0 0 0;
    }

    .bold-text {
        font-weight: 600;
    }

    .btn_purple {
        width: 130px;
        height: 43px;
        border-radius: 7px;
        color: white;
        font-size: 22px;
        background: #45328A;
        font-weight: 500;
    }

    .btn_purple2 {
        width: 374px;
        height: 58px;
        background: linear-gradient(45deg, #755fce, #5a86c3);
        border-radius: 30px;
        color: white;
        font-size: 25px;
        font-weight: 600;
        margin-top: 5px;
        margin-left: 23rem;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .marauto {
        margin: 11rem 0 0 0;
        width: 67rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .marauto2 {
        margin: 59px 7px 10px 0;
        width: 420px;
    }

    .marauto3 {
        margin: 59px 7px 10px 10px;
        width: 420px;
    }

    .marauto4 {
        margin: 11rem 0 0 0;
        width: 76rem;
        display: flex;
    }



    .description {
        position: absolute;
        top: 0;
        right: 100%;
        width: 20rem;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 5px;
        text-align: center;
        opacity: 0;
        pointer-events: none;
        /* 이벤트를 가로채지 않도록 설정 */
        transition: opacity 0.3s;
    }

    .description2 {
        position: absolute;
        top: 0;
        left: 100%;
        width: 21rem;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 5px;
        text-align: center;
        opacity: 0;
        pointer-events: none;
        /* 이벤트를 가로채지 않도록 설정 */
        transition: opacity 0.3s;
    }

    .item:hover .description {
        opacity: 1;
    }

    .item2:hover .description2 {
        opacity: 1;
    }

    .fullSqure {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 15px;
        margin-right: 5px;
        color: #7f5cde;
    }

    .fullSqure2 {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        margin: 0 0 0 25px;
        color: #7f5cde;
    }

    .fullSqure3 {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        margin: 21px 0 0 25px;
        color: #7f5cde;
    }

    .gradient-text {
        font-size: 90px;
        background: linear-gradient(45deg, #755FCE, #5A86C3);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        position: relative;
    }

    .gradient-text::before {
        content: '•';
        position: absolute;
        top: -40px;
        left: 33px;
        font-size: 50px;
        /* 점의 크기 조정 */
        color: #755FCE;
    }

    .suggestPurple {
        width: 40.5rem;
        height: 5rem;
        border-radius: 35px;
        background: linear-gradient(45deg, #755FCE, #5A86C3);
        color: white;
        font-size: 19px;
        display: flex;
        justify-content: center;
        font-weight: 600;
        align-items: center;
    }

    .suggestPurple2 {
        width: 40.5rem;
        height: 5rem;
        border-radius: 35px;
        background: linear-gradient(45deg, #755FCE, #5A86C3);
        color: white;
        font-size: 16.5px;
        display: flex;
        justify-content: center;
        font-weight: 600;
        align-items: center;
    }

    .suggestPurpleLong {
        width: 83rem;
        height: 5rem;
        border-radius: 35px;
        background: linear-gradient(45deg, #755FCE, #5A86C3);
        color: white;
        font-size: 21px;
        font-weight: 600;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @font-face {
        font-family: "Reko";
        src: url("../../public/font/RecipekoreaFONT.ttf") format("truetype");
    }

    .Reko {
        font-family: 'Reko' !important;
    }

    .map2 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .map2 div {
        color: black;
        font-weight: 600;
        font-size: 17px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        align-items: center;
        width: 5rem;
    }

    .map2 div span {
        width: 24px;
        height: 24px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-animation: sdb 2s infinite;
        animation: sdb 2s infinite;
        opacity: 0;
        box-sizing: border-box;
    }

    .map2 div span:nth-of-type(1) {
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
    }

    .map2 div span:nth-of-type(2) {
        top: 16px;
        -webkit-animation-delay: 0.15s;
        animation-delay: 0.15s;
    }

    .map2 div span:nth-of-type(3) {
        top: 32px;
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;
    }
    </style>
</head>

<body>
    <?php include('../../common/Nav.php') ?>

    <div class="cont3">

        <div class="d-flex flex-column justify-content-between" style="width:83rem; margin-top:10rem;">
            <div class="d-flex justify-content-center align-items-center Reko" style="font-size:80px;">
                이런분들께&nbsp;
                <span class="gradient-text">
                    추
                </span>
                <span class="gradient-text">
                    천
                </span>해요!
            </div>
            <div class="d-flex flex-column justify-content-between" style="width:83rem; height:25rem;">
                <!-- <div class="d-flex justify-content-between align-items-center">
                    <div class="suggestPurple">정부지원 자금 수혜 및 지원 사업에 참여를 희망하시는 분2</div>
                    <div class="suggestPurple">사업 아이템의 시장 검증 및 BM 검증이 필요하신 분</div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="suggestPurple">각종 지원사업과 자금조달을 위해 사업계획서 작성이 필요하신 분</div>
                    <div class="suggestPurple2">기술 경쟁력을 높이기 위하여 핵심 기술 기획 및 연구개발 활동이 필요하신 분</div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="suggestPurple">창업 아이템으로 무엇을 해야 할지 고민하고 계시는 분</div>
                    <div class="suggestPurple">본격적인 시장 검증과 스케일업을 위하여 투자유치가 필요하신 분</div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="suggestPurple">내 아이템에 대한 사업성 검토가 필요하신 분</div>
                    <div class="suggestPurple">혁신 성장 모델이 필요하신 중소기업</div>
                </div> -->
                <div class="d-flex justify-content-between align-items-center">
                    <div class="suggestPurpleLong">정부지원 사업에 참여하여 지원금을 받고자 희망하시는 분</div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="suggestPurpleLong">사업 아이템에 대한 사업성 검토와 사업계획서 작성이 필요하신 분</div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="suggestPurpleLong">기술 개발이나 투자유치와 같은 전문적인 자료 작성이 필요하신 분</div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="suggestPurpleLong">창업 준비단계의 예비창업자부터 창업 초기 기업과 성장 단계 기업까지 혁신적인 비즈니스 모델 수립이 필요하신 분</div>
                </div>
            </div>
        </div>

        <div class="map2" style="width: 100%; height: 5rem; margin:4rem 0;">
            <div>
                <span></span>
                <span></span>
                <span></span>
                <div class="my-3" style="font-size:20px;">Scroll</div>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="width:86rem;">
            <div class="d-flex justify-content-end"
                style="width:5rem; height:5rem; background:white; position:absolute; margin:-2rem 0 0 0;">
                <img src="../../public/img/banner/vvffrfr6yk,.png" style="width:5rem; height:5rem;" alt="물음표">
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-start"
            style="width: 83rem; height:11rem; margin-top:0; border: 2px dotted #7f5cde; border-radius:12px;">
            <div class="d-flex  justify-content-start Reko" style="min-width: 25%; margin:0 0 0 0;">
                <span class="fullSqure2">■</span>
                <span style="font-size:25px; margin:3px 5px 0 6px;">
                    내가 정부지원 혜택을 얼마나 받을 수 있을지 한번 알아 볼까요?</span>
            </div>
            <div class="d-flex  justify-content-start Reko" style="min-width: 25%;">
                <span class="fullSqure3">■</span>
                <span style="font-size:25px; margin:20px 17px -13px 6px;">
                    나에게 맞는 정부지원 사업은 어떠한 것이 있으며, 내가 받을 수 있는 정부지원 자금은 얼마일까요?</span>
            </div>
        </div>
        <!-- 조회 박스 start -->
        <div class="backBox"
            style="background-color: #f7f4fb; max-width:83rem; max-height:78rem; border-radius: 35px; padding:0 1% 1% 1%; margin: 1% 0 4% 0; box-shadow: 12px 12px 10px rgba(0, 0, 0, 0.2);  z-index:1;">
            <div class="justify-content-center" style="padding:1rem;">
                <div class="d-flex flex-col justify-content-between" style="margin:4rem 0 2.6rem 0;">
                    <div class="col-12">
                        <div style="position: relative;  min-height: 1px;">

                            <div class="d-flex flex-wrap justify-content-center" style="min-width: 25%; ">
                                <span class="fullSqure">■</span>
                                <span
                                    style="font-weight: bold;font-size:25px; margin-top:2px; font-family:'NanumSquare !important'">
                                    창업하신지는 얼마나 되셨나요?</span>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center" style="width: 100%; margin-top:1rem;">

                                <label style="text-align:center" for="no" class="button-checkbox5 mx-2 my-2 upTime1"
                                    data-time="예창">
                                    <input type="radio" value="9" name="upTime" id="no" class="checkbox-icon2"
                                        style="display: none;">
                                    <span class="button-text2">예비창업자</span>
                                </label>
                                <label style="text-align:center" for="1year"
                                    class="button-checkbox3 mx-2 my-2 upTime1 clicked" data-time="1년 미만">
                                    <input type="radio" value="1" name="upTime" id="1year" class="checkbox-icon2"
                                        style="display: none;">
                                    <span class="button-text2">1년 미만</span>
                                </label>
                                <label style="text-align:center" for="3year" class="button-checkbox3 mx-2 my-2 upTime1"
                                    data-time="3년 미만">
                                    <input type="radio" value="3" name="upTime" id="3year" class="checkbox-icon2"
                                        style="display: none;">
                                    <span class="button-text2">3년 미만</span>
                                </label>
                                <label style="text-align:center" for="5year" class="button-checkbox3 mx-2 my-2 upTime1"
                                    data-time="5년 미만">
                                    <input type="radio" value="5" name="upTime" id="5year" class="checkbox-icon2"
                                        style="display: none;">
                                    <span class="button-text2">5년 미만</span>
                                </label>
                                <label style="text-align:center" for="7year" class="button-checkbox3 mx-2 my-2 upTime1"
                                    data-time="7년 미만">
                                    <input type="radio" value="7" name="upTime" id="7year" class="checkbox-icon2"
                                        style="display: none;">
                                    <span class="button-text2">7년 미만</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="margin:0 0 2.6rem 0;">
                    <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-center"><span class="fullSqure">■</span><span
                                style="font-weight: bold;font-size:25px; margin-top:2px; font-family:'NanumSquare !important'">아래
                                항목중 해당사항이 있으신가요?</span>
                        </div>
                        <div class="jcs" style="margin-top:1rem;">
                            <label style="text-align:center" for="all-b"
                                class="button-checkbox7 mx-2 my-2 upTime2 clicked" id="all-bc">
                                <input type="checkbox" value="전체" name="upTime-b" id="all-b" class="checkbox-icon1"
                                    style="display: none;">
                                <span class="button-text2">해당없음</span>
                            </label>
                            <label style="text-align:center" for="b-2" class="button-checkbox2 mx-2 my-2 upTime2">
                                <input type="checkbox" value="청년창업" name="upTime-b" id="b-2" class="checkbox-icon1"
                                    style="display: none;">
                                <div class="d-flex">
                                    <span class="button-text3">청년사업자</span><br />
                                    <span class="button-text4">(만 40세 미만)</span>
                                </div>
                            </label>
                            <label style="text-align:center" for="b-3" class="button-checkbox2 mx-2 my-2 upTime2">
                                <input type="checkbox" value="재창업자" name="upTime-b" id="b-3" class="checkbox-icon1"
                                    style="display: none;">
                                <span class="button-text2">재창업자</span>
                            </label>
                            <label style="text-align:center" for="b-4" class="button-checkbox2 mx-2 my-2 upTime2">
                                <input type="checkbox" value="여성창업" name="upTime-b" id="b-4" class="checkbox-icon1"
                                    style="display: none;">
                                <span class="button-text2">여성창업</span>
                            </label>
                            <label style="text-align:center" for="b-5" class="button-checkbox2 mx-2 my-2 upTime2">
                                <input type="checkbox" value="1" name="upTime-b" id="b-5" class="checkbox-icon1"
                                    style="display: none;">
                                <span class="button-text2">사회적기업</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12" style="margin:0 0 2.6rem 0;">
                    <div class="d-flex flex-wrap justify-content-center" style="min-width: 13%;">
                        <div class="d-flex flex-wrap justify-content-center"><span class="fullSqure">■</span><span
                                style="font-weight: bold;font-size:25px; margin-top:2px; font-family:'NanumSquare !important'">어떤
                                창업인가요?</span></div>
                    </div>
                    <div class="d-flex flex-column align-items-center" style="margin-top:1rem;">
                        <div class="d-flex flex-wrap justify-content-center wid">
                            <label style="text-align:center" for="BusiAreas16"
                                class="button-checkbox10 mx-2 my-2 BusiAreasBig  item">
                                <div class="description">
                                    일반창업(소상공인사업)은 비교적 작은 규모의 사업 또는 기업을 시작하는 것을 의미합니다. 이러한 사업은 주로 개인 또는 소규모 팀이 소유하고
                                    운영하며,
                                    상대적으로 적은 자본과 리소스로 시작됩니다. (음식, 음료, 소매업, 미용실 등)
                                </div>
                                <input type="radio" value="일반창업" name="BusiAreasBig" id="BusiAreas16"
                                    class="checkbox-icon4" style="display: none;">
                                <div class="d-flex">
                                    <span class="button-text3">일반창업</span><br />
                                    <span class="button-text4">(소상공인사업)</span>
                                </div>
                            </label>
                            <label style="text-align:center" for="BusiAreas14"
                                class="button-checkbox10 mx-2 my-2 BusiAreasBig clicked item2">
                                <div class="description2">
                                    기술창업은 기술 혹은 혁신적인 아이디어를 기반으로 사업을 시작하거나 운영하는 것을 의미합니다.
                                </div>
                                <input type="radio" value="기술창업" name="BusiAreasBig" id="BusiAreas14"
                                    class="checkbox-icon4" style="display: none;" checked>
                                <span class="button-text2">기술창업</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 subItems" style="margin:0 0 2.6rem 0;">
                    <div class="d-flex flex-column justify-content-center align-items-center" style="min-width: 13%;">
                        <div class="d-flex flex-wrap justify-content-center"><span class="fullSqure">■</span><span
                                style="font-weight: bold;font-size:25px; margin-top:2px; font-family:'NanumSquare !important'">기술
                                분야</span></div>
                        <div style="font-size:15px;">(기술분야를 선택하시면 구체적이고 정확하게 조회가 가능합니다.)</div>
                    </div>
                    <div class="d-flex flex-column align-items-center" style="margin-top:1rem;">
                        <div class="d-flex flex-wrap justify-content-center wid">
                            <label style="text-align:center" for="BusiAreas25"
                                class="button-checkbox10 mx-2 my-2 BusiAreas clicked" id="allBuss">
                                <input type="checkbox" value="무관" name="BusiAreas" id="BusiAreas25"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">무관</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas1"
                                class="button-checkbox9 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="ICT" name="BusiAreas" id="BusiAreas1"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">ICT</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas2"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="데이터" name="BusiAreas" id="BusiAreas2"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">데이터</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas3"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="예술" name="BusiAreas" id="BusiAreas3"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">예술</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas4"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="스포츠" name="BusiAreas" id="BusiAreas4"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">스포츠</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas5"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="콘텐츠" name="BusiAreas" id="BusiAreas5"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">콘텐츠</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas6"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="문화" name="BusiAreas" id="BusiAreas6"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">문화</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas7"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="관광" name="BusiAreas" id="BusiAreas7"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">관광</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas8"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="농산업" name="BusiAreas" id="BusiAreas8"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">농산업</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas9"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="보건의료" name="BusiAreas" id="BusiAreas9"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">보건의료</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas10"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="Eco" name="BusiAreas" id="BusiAreas10"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">Eco</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas11"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="물산업" name="BusiAreas" id="BusiAreas11"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">물산업</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas12"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="공간정보" name="BusiAreas" id="BusiAreas12"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">공간정보</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas13"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="해양" name="BusiAreas" id="BusiAreas13"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">해양</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas15"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="로컬" name="BusiAreas" id="BusiAreas15"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">로컬</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas17"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="디지털" name="BusiAreas" id="BusiAreas17"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">디지털</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas18"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="공공기술" name="BusiAreas" id="BusiAreas18"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">공공기술</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas19"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="장애인" name="BusiAreas" id="BusiAreas19"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">장애인</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas20"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="헬스케어" name="BusiAreas" id="BusiAreas20"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">헬스케어</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas21"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="ESG" name="BusiAreas" id="BusiAreas21"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">ESG</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas22"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="글로벌" name="BusiAreas" id="BusiAreas22"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">글로벌</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas23"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="바이오" name="BusiAreas" id="BusiAreas23"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">바이오</span>
                            </label>
                            <label style="text-align:center" for="BusiAreas24"
                                class="button-checkbox10 mx-2 my-2 BusiAreas">
                                <input type="checkbox" value="에너지" name="BusiAreas" id="BusiAreas24"
                                    class="checkbox-icon4" style="display: none;">
                                <span class="button-text2">에너지</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="d-flex flex-wrap justify-content-center" style="min-width: 13%;">
                        <div class="d-flex flex-wrap justify-content-center"><span class="fullSqure">■</span><span
                                style="font-weight: bold;font-size:25px; margin-top:2px; font-family:'NanumSquare !important'">어느
                                지역이신가요?</span></div>
                    </div>
                    <div class="d-flex flex-column align-items-center" style="margin-top:1rem;">
                        <div class="d-flex flex-wrap justify-content-center wid">
                            <label style="text-align:center" for="all-r"
                                class="button-checkbox6 mx-2 my-2 upTime3 clicked">
                                <input type="radio" value="지역무관" name="upTime" id="all-r" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">지역무관</span>
                            </label>
                            <label style="text-align:center" for="seoul" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="서울" name="upTime" id="seoul" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">서울</span>
                            </label>
                            <label style="text-align:center" for="kk" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="경기" name="upTime" id="kk" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">경기</span>
                            </label>
                            <label style="text-align:center" for="ic" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="인천" name="upTime" id="ic" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">인천</span>
                            </label>
                            <label style="text-align:center" for="bs" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="부산" name="upTime" id="bs" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">부산</span>
                            </label><label style="text-align:center" for="dj"
                                class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="대전" name="upTime" id="dj" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">대전</span>
                            </label>
                            <label style="text-align:center" for="dg" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="대구" name="upTime" id="dg" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">대구</span>
                            </label>
                            <label style="text-align:center" for="us" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="울산" name="upTime" id="us" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">울산</span>
                            </label>
                            <label style="text-align:center" for="kj" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="광주" name="upTime" id="kj" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">광주</span>
                            </label>
                            <label style="text-align:center" for="sj" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="세종" name="upTime" id="sj" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">세종</span>
                            </label>
                            <label style="text-align:center" for="jj" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="제주" name="upTime" id="jj" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">제주</span>
                            </label>
                            <label style="text-align:center" for="kn" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="경남" name="upTime" id="kn" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">경남</span>
                            </label>
                            <label style="text-align:center" for="kb" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="경북" name="upTime" id="kb" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">경북</span>
                            </label>
                            <label style="text-align:center" for="cn" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="충남" name="upTime" id="cn" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">충남</span>
                            </label>
                            <label style="text-align:center" for="cb" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="충북" name="upTime" id="cb" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">충북</span>
                            </label>
                            <label style="text-align:center" for="jn" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="전남" name="upTime" id="jn" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">전남</span>
                            </label>
                            <label style="text-align:center" for="jb" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="전북" name="upTime" id="jb" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">전북</span>
                            </label>
                            <label style="text-align:center" for="kw" class="button-checkbox4 mx-2 my-2 upTime3">
                                <input type="radio" value="강원" name="upTime" id="kw" class="checkbox-icon3"
                                    style="display: none;">
                                <span class="button-text2">강원</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-center">
                    <div class="button-checkbox8 wid2" id="submitSearch">지원금액 조회하기</div>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <img class="imgCheckList" src="../../public/img/banner/B3B3E_2.png" alt="">
                </div>

            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="modal-body">
                        <p></p>
                        <div class="d-flex justify-content-center" style="height:5px;">
                            <div class="btn_purple2" onclick="redirectToMapPage()">
                                자세히 알아보기
                            </div>
                            <div
                                style="margin:2rem 0 0 1rem; color:#7181BA; font-size:14.5px; font-weight:600; opacity:0;">
                                *융자금 :
                                민간 금융회사보다 낮은 이자율의
                                대출금</div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-start" style="height:5px;">
                            <div style="margin:17rem 0 0 47rem; color:white; font-size:15px; font-weight:600;">
                                ※ 2023년 기준으로 작성된 데이터입니다.
                            </div>
                            <div style="margin:0 0 0 47rem; color:white; font-size:15px; font-weight:600;">
                                ※ 상기 데이터는 운영기관, 주관기간, 수행기관의 사정에 따라 변경될 수 있습니다.
                            </div>
                            <div style="margin:0 0 0 47rem; color:white; font-size:15px; font-weight:600;">
                                ※ 융자금이란 민간 금융회사보다 낮은 이자율의 대출금을 뜻합니다.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    // function redirectToMapPage() {
    //     window.location.href = "/pages/load/Consulting.php";
    // }

    let whereClause = ''; // 전역 변수로 선 

    const arr2 = ["1", ['전체'], '기술창업', ['무관'], '지역무관'];
    document.addEventListener("DOMContentLoaded", function() {
        const arr = []; // arr 배열을 이벤트 핸들러 외부에서 선언
        //const arr2 = ['7년 미만', '전체', '전체'];

        const radioButtonsBusiness = document.querySelectorAll('.upTime1 input[type="radio"]');
        radioButtonsBusiness.forEach(function(radio) {
            radio.addEventListener('change', function() {
                const radioValue = this.value;

                const labels = document.querySelectorAll('.upTime1');
                labels.forEach(function(label) {
                    label.classList.remove('clicked');
                });

                const label = this.closest('.upTime1');
                if (this.checked) {
                    label.classList.add('clicked');

                    // 첫 번째 위치에 upTime1의 값을 설정합니다.
                    arr2[0] = radioValue;

                    console.log(arr2);
                }
            });
        });


        const checkBoxes = document.querySelectorAll('.upTime2 input[type="checkbox"]');
        const allB = document.querySelector('#all-bc');

        checkBoxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const label = this.closest('.upTime2');

                // '해당사항없음' 체크박스를 눌렀을 때
                if (this.value === '전체') {
                    if (this.checked) {
                        // 나머지 체크박스들 모두 해제 및 클래스 제거
                        checkBoxes.forEach(function(innerCheckbox) {
                            if (innerCheckbox !== checkbox) {
                                innerCheckbox.checked = false;
                                innerCheckbox.closest('.upTime2').classList.remove(
                                    'clicked');
                            }
                        });
                        allB.classList.add('clicked');

                        // '전체' 값을 배열에 추가
                        if (!arr2[1].includes('전체')) {
                            arr2[1] = [];
                            arr2[1].push('전체');
                        }
                    } else {
                        // '전체' 값을 배열에서 제거
                        const index = arr2[1].indexOf('전체');
                        if (index > -1) {
                            arr2[1].splice(index, 1);
                        }
                    }
                }

                // 다른 체크박스가 체크된 경우
                else if (this.checked) {
                    label.classList.add('clicked');
                    allB.classList.remove('clicked');
                    if (!arr2[1].includes(this.value)) {
                        arr2[1].push(this.value);
                    }

                    // '전체' 값을 배열에서 제거
                    const index = arr2[1].indexOf('전체');
                    if (index > -1) {
                        arr2[1].splice(index, 1);
                    }
                }
                // 체크박스 해제
                else {
                    label.classList.remove('clicked');
                    const index = arr2[1].indexOf(this.value);
                    if (index > -1) {
                        arr2[1].splice(index, 1);
                    }
                    // 모든 체크박스 해제 시 '전체' 버튼 체크
                    let allUnchecked = true;
                    checkBoxes.forEach(function(innerCheckbox) {
                        if (innerCheckbox.checked) {
                            allUnchecked = false;
                        }
                    });

                    if (allUnchecked) {
                        allB.classList.add('clicked');
                        arr2[1].push('전체');
                    }
                }

                console.log(arr2);
            });
        });


        const radioButtonsRegion = document.querySelectorAll('.upTime3 input[type="radio"]');
        radioButtonsRegion.forEach(function(radio) {
            radio.addEventListener('change', function() {
                const radioValue = this.value;

                const labels = document.querySelectorAll('.upTime3');
                labels.forEach(function(label) {
                    label.classList.remove('clicked');
                });

                const label = this.closest('.upTime3');
                if (this.checked) {
                    label.classList.add('clicked');

                    // 다섯 번째 위치에 upTime2의 값을 설정합니다.
                    arr2[4] = radioValue;

                    console.log(arr2);
                }
            });
        });
        const radioBusiAreas = document.querySelectorAll('.BusiAreasBig input[type="radio"]');
        const subItems = document.querySelector('.subItems');
        const backBox = document.querySelector('.backBox');
        const ff = document.querySelector('.ff');
        radioBusiAreas.forEach(function(area) {
            area.addEventListener('change', function() {
                const areaValue = this.value;

                const labels = document.querySelectorAll('.BusiAreasBig');
                labels.forEach(function(label) {
                    label.classList.remove('clicked');
                });


                const label = this.closest('.BusiAreasBig');
                if (this.checked) {
                    label.classList.add('clicked');
                    if (areaValue == '기술창업') {
                        allBuss.classList.add('clicked');
                        subItems.style.display = '';
                        backBox.style.maxHeight = '78rem';
                    } else {
                        arr2[3] = ['무관'];
                        subItems.style.display = 'none';
                        backBox.style.maxHeight = '58rem';
                        const labelsAR = document.querySelectorAll('.BusiAreas');
                        labelsAR.forEach(function(labelar) {
                            labelar.classList.remove('clicked');
                        });
                    }
                    // 세 번째 위치에 upTime2의 값을 설정합니다.
                    arr2[2] = areaValue;

                    console.log(arr2);
                }
            });
        });
        const colorButtons = document.getElementsByClassName('button-checkbox2');
        for (const colorButton of colorButtons) {
            colorButton.addEventListener('click', function() {
                const checkbox = colorButton.querySelector('.checkbox-icon');
                checkbox.checked = !checkbox.checked;
                if (checkbox.checked == true) {
                    colorButton.classList.add('clicked');
                } else {
                    colorButton.classList.remove('clicked');
                }
            });
        }
        // 체크박스 요소들을 가져옵니다.
        // var checkboxes2 = document.querySelectorAll('.BusiAreas input[type="checkbox"]');

        // 각 체크박스에 대한 클릭 이벤트를 등록합니다.
        // checkboxes2.forEach(function(checkbox) {
        //     checkbox.addEventListener('click', function() {
        //         const label2 = this.closest('.BusiAreas');
        //         // 체크박스가 체크되었는지 확인합니다.
        //         if (this.checked) {
        //             const ind = arr2[3].indexOf('무관');
        //             if (ind > -1) {
        //                 arr2[3].splice(ind, 1);
        //             }
        //             // 체크박스가 체크된 경우 'clicked' 클래스를 추가하고 값을 배열에 추가합니다.
        //             label2.classList.add('clicked');
        //             arr2[3].push(this.value);
        //             console.log(arr2);
        //         } else {
        //             // 체크박스가 해제된 경우 'clicked' 클래스를 제거하고 값을 배열에서 제거합니다.
        //             label2.classList.remove('clicked');
        //             var index = arr2[3].indexOf(this.value);
        //             if (index !== -1) {
        //                 arr2[3].splice(index, 1);
        //                 if (arr2[3].length === 0) {
        //                     arr2[3].push('무관');
        //                 }
        //                 console.log(arr2);
        //             }
        //         }
        //     });
        // });



        const checkBoxes3 = document.querySelectorAll('.BusiAreas input[type="checkbox"]');
        const allBuss = document.querySelector('#allBuss');
        const BusiAreas25 = document.querySelector('#BusiAreas25');

        checkBoxes3.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const label2 = this.closest('.BusiAreas');

                // '무관' 체크박스를 눌렀을 때
                if (this.value === '무관') {
                    if (this.checked) {
                        // 나머지 체크박스들 모두 해제 및 클래스 제거
                        checkBoxes3.forEach(function(innerCheckbox) {
                            if (innerCheckbox !== checkbox) {
                                innerCheckbox.checked = false;
                                innerCheckbox.closest('.BusiAreas').classList
                                    .remove(
                                        'clicked');
                            }
                        });
                        allBuss.classList.add('clicked');
                        BusiAreas25.checked = true;
                        // '전체' 값을 배열에 추가
                        if (!arr2[3].includes('무관')) {
                            arr2[3] = [];
                            arr2[3].push('무관');
                        }
                    }
                    // } else {
                    //     // '전체' 값을 배열에서 제거
                    //     const index = arr2[3].indexOf('무관');
                    //     if (index > -1) {
                    //         arr2[3].splice(index, 1);
                    //     }
                    // }
                }

                // 다른 체크박스가 체크된 경우
                else if (this.checked) {
                    label2.classList.add('clicked');
                    allBuss.classList.remove('clicked');
                    BusiAreas25.checked = false;
                    if (!arr2[3].includes(this.value)) {
                        arr2[3].push(this.value);
                    }

                    // '전체' 값을 배열에서 제거
                    const index = arr2[3].indexOf('무관');
                    if (index > -1) {
                        arr2[3].splice(index, 1);
                    }
                }
                // 체크박스 해제
                else {
                    label2.classList.remove('clicked');
                    const index = arr2[3].indexOf(this.value);
                    if (index > -1) {
                        arr2[3].splice(index, 1);
                    }
                    // 모든 체크박스 해제 시 '전체' 버튼 체크
                    let allUnchecked = true;
                    checkBoxes3.forEach(function(innerCheckbox) {
                        if (innerCheckbox.checked) {
                            allUnchecked = false;
                        }
                    });

                    if (allUnchecked) {
                        allBuss.classList.add('clicked');
                        arr2[3].push('무관');
                    }
                }

                console.log(arr2);
            });
        });
        // const buttonCheckboxs = document.querySelectorAll('.button-checkbox2');
        // const areasFromPHP = <?php //echo json_encode(explode(',', $_GET['areas'])); ?>;

        // buttonCheckboxs.forEach(function(colorButton) {
        //     // const buttonText = colorButton.querySelector('.button-text2').textContent;
        //     const checkbox = colorButton.querySelector('.checkbox-icon');
        //     const areaAttr = colorButton.getAttribute('data-area');

        //     if (areasFromPHP.includes(areaAttr)) {
        //         colorButton.classList.toggle('clicked');
        //         checkbox.checked = true;
        //         arr.push(areaAttr);
        //     }

        //     colorButton.addEventListener('click', function(event) {
        //         event.stopPropagation();
        //         const clickedButton = event.target.closest('.button-checkbox2');
        //         if (!clickedButton) return;

        //         clickedButton.classList.toggle('clicked');
        //         const clickedCheckbox = clickedButton.querySelector('.checkbox-icon');
        //         clickedCheckbox.checked = !clickedCheckbox.checked;

        //         const index = arr.indexOf(areaAttr);
        //         if (clickedCheckbox.checked && index === -1) {
        //             arr.push(areaAttr);
        //         } else if (!clickedCheckbox.checked && index !== -1) {
        //             arr.splice(index, 1);
        //         }
        //         console.log(arr);
        //     });
        // });

        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
        }

        // function roundToThousand(num) {
        //     return Math.round(num / 10000) * 10000;
        // }

        function animateValue(obj, start, end1, end2, cnt1, cnt2, duration) {
            let startTimestamp = null;
            obj.css('width', '100%');
            obj.css('margin-top', '8.8rem');
            obj.css('margin-bottom', '0');
            obj.css('display', 'flex');
            obj.css('justify-content', 'center');
            obj.css('flex-direction', 'column');
            obj.css('align-items', 'center');

            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress1 = Math.min((timestamp - startTimestamp) / duration, 1);
                const currentValue1 = Math.floor(progress1 * (end1 - start) + start);
                const progress2 = Math.min((timestamp - startTimestamp) / duration, 1);
                const currentValue2 = Math.floor(progress2 * (end2 - start) + start);
                if (currentValue1 && currentValue2) { //formatNumber(currentValue1)
                    obj.html(
                        '<div class="d-flex flex-column justify-content-between align-items-center" style="margin:51px 0 45px 30px; width:50rem;">' +
                        '<div class="d-flex  justify-content-between align-items-center">' +
                        '<div class="amount" style="margin: 0 19.3rem 0 8rem;">' +
                        '<span class="amountwww" style="margin-left:5px;">￦</span>' + formatNumber(
                            currentValue1) +
                        '</div>' +
                        '<div class="amount">' +
                        '<span class="amountwww">￦</span>' + formatNumber(currentValue2) +
                        '</div>' +
                        '</div>' +
                        '<div class="d-flex  justify-content-between align-items-center" style="margin: 23px 0 0 75px;">' +
                        '<div class="amount" style="margin:0 14rem 0 1rem;margin-top: -2px;">' +
                        cnt1 + '<span class="amountwww">개</span>' +
                        '</div>' +
                        '<div class="amount" style="margin-top: -2px;">' +
                        cnt2 + '<span class="amountwww">개</span>' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                    );
                } else if (!currentValue1 && currentValue2) {
                    obj.html(
                        '<div class="d-flex flex-column justify-content-between align-items-center" style="margin:44px 0 45px 100px; width:50rem;">' +
                        '<div class="d-flex  justify-content-between align-items-center">' +
                        '<div class="amount2" style="margin:0 5rem 0 1rem;">' +
                        '현재조건으로는<br/>지원금이 없습니다.' +
                        '</div>' +
                        '<div class="amount" style="margin-left:6rem;">' +
                        '￦' + formatNumber(currentValue2) +
                        '</div>' +
                        '</div>' +
                        '<div class="d-flex  justify-content-between align-items-center" style="margin: 23px 0 0 25px;">' +
                        '<div class="acount" style="margin-right:14rem;">' +
                        cnt1 + '개' +
                        '</div>' +
                        '<div class="acount">' +
                        cnt2 + '개' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                    );
                } else if (currentValue1 && !currentValue2) {
                    obj.html(
                        '<div class="d-flex flex-column justify-content-between align-items-center" style="margin:44px 0 45px 100px; width:50rem;">' +
                        '<div class="d-flex  justify-content-between align-items-center">' +
                        '<div class="amount" style="margin:0 13rem 0 9rem;">' +
                        '￦' + formatNumber(currentValue1) +
                        '</div>' +
                        '<div class="amount2" style="margin:0 5rem 0 1rem;">' +
                        '현재조건으로는<br/>융자금이 없습니다.' +
                        '</div>' +
                        '</div>' +
                        '<div class="d-flex  justify-content-between align-items-center" style="margin: 23px 0 0 25px;">' +
                        '<div class="acount" style="margin-right:14rem;">' +
                        cnt1 + '개' +
                        '</div>' +
                        '<div class="acount">' +
                        cnt2 + '개' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                    );
                } else {
                    obj.html(
                        '<div class="d-flex flex-column justify-content-between align-items-center" style="margin:44px 0 45px 100px; width:50rem;">' +
                        '<div class="d-flex  justify-content-between align-items-center">' +
                        '<div class="amount2" style="margin:0 5rem 0 10rem;">' +
                        '현재조건으로는<br/>지원금이 없습니다.' +
                        '</div>' +
                        '<div class="amount2" style="margin:0 5rem 0 4rem;">' +
                        '현재조건으로는<br/>융자금이 없습니다.' +
                        '</div>' +
                        '</div>' +
                        '<div class="d-flex  justify-content-between align-items-center" style="margin: 23px 0 0 25px;">' +
                        '<div class="acount" style="margin-right:14rem;">' +
                        cnt1 + '개' +
                        '</div>' +
                        '<div class="acount">' +
                        cnt2 + '개' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                    );
                }

                if (progress1 < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }


        var modal = document.getElementById("myModal");
        var btn = document.getElementById("submitSearch");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block"; // 모달창 보이기
            setTimeout(function() {
                modal.classList.add('show'); // 애니메이션을 위한 delay 추가
            }, 10); // 10ms 딜레이
            console.log('arr2', arr2);
            // AJAX 요청을 보내서 $sum 값을 가져와서 표시
            $.ajax({
                url: './Search.php',
                type: 'POST',
                cache: false, // 캐싱 방지
                data: {
                    whereClause: generateWhereClause(arr2)
                },
                dataType: 'json',
                success: function(res) {
                    var sumContainer = $('.modal-body p');
                    console.log(res);
                    if (res) {
                        console.log('res', res);
                        var sumValue1 = res[0].total_amount; //출연금
                        var cnt1 = res[0].cnt; // 출연금 사업공고 갯수
                        var sumValue2 = res[1].total_amount; //융자금
                        var cnt2 = res[1].cnt; // 융자금 사업공고 갯수
                        //var sumValue3 = res[2].sql; //융자금
                        animateValue(sumContainer, 0, parseInt(sumValue1), parseInt(
                                sumValue2), cnt1, cnt2,
                            2000);
                    } else {
                        sumContainer.text('받을 금액: bad');
                    }
                },
                error: function() {
                    $('.modal-body p').text('받을 금액: error');
                }
            });

        }



        span.onclick = function() {
            modal.classList.remove('show'); // 'show' 클래스 제거
        }

        modal.addEventListener('transitionend', function(event) {
            // transform 속성에 대한 전환만 체크
            if (event.propertyName === 'transform') {
                if (!modal.classList.contains('show')) {
                    modal.style.display = "none";
                }
            }
        });

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.remove('show');
            }
        }

        function generateWhereClause(arr2) {
            let whereConditions = [];

            whereConditions.push(generateCareerWhereClause(arr2[0]));

            whereConditions.push(GWC(arr2[1]));

            whereConditions.push(busiABig(arr2[2]));

            whereConditions.push(busiAreas(arr2));

            if (arr2[4] === '지역무관') {
                whereConditions.push(`local1 = '무관'`);
            } else {
                whereConditions.push(`local1 IN ('무관', '${arr2[4]}')`);
            }



            // let whereClause = '';
            if (whereConditions.length > 0) {
                whereClause = "AND (" + whereConditions.join(' AND ') + ")";
            }
            return whereClause;
        }


        function generateCareerWhereClause(selectedYears) {
            // let whereClause = '';

            switch (selectedYears) {
                case "1":
                    whereClause = "career_int IN (1,3,5,7,8) AND career1 <> '3년 초과'";
                    break;
                case "3":
                    whereClause = 'career_int IN (3,5,7,8)';
                    break;
                case "5":
                    whereClause = 'career_int IN (5,7,8)';
                    break;
                case "7":
                    whereClause = 'career_int IN (7,8)';
                    break;
                case "9":
                    whereClause = "career_int IN (9) or pre = 'o'";
                    break;
                default:
                    // whereClause = 'career_int NOT IN (9)';
                    break;
            }

            return whereClause;
        }

        function busiABig(Big) {
            let bAB = '';

            bAB = "detailarea_category in " + `('${Big}','기술,일반')`;

            return bAB;
        }

        function busiAreas(busiAreas) {
            let bb = [];
            for (let i = 0; i < busiAreas[3].length; i++) {
                if (busiAreas[2] == '일반창업') {
                    bb.push("detailarea = '무관'");
                } else {
                    bb.push("detailarea IN " + `('${busiAreas[3][i]}','무관')`);
                }

            }
            if (bb.length > 1) {
                whereClause = "(" + bb.join(' OR ') + ")";
            } else {
                whereClause = bb.join(' OR ');
            }

            return whereClause;
        }

        function GWC(arr2) {
            let conditionsMapping = {
                '재창업자': "(isfemale = 'x' and isBoy = 'x' and restartup = 'x' and isSocialed = 0 or restartup='o')",
                '청년창업': "(isfemale = 'x' and restartup ='x' and isBoy = 'x' and isSocialed = 0 or isBoy = 'o')",
                '여성창업': "(isBoy = 'x' and restartup ='x' and isfemale = 'x' and isSocialed = 0 or isfemale = 'o')",
                '1': "(isfemale = 'x' and isBoy = 'x' and restartup ='x' and isSocialed = 1 or isSocialed = 0)", // 사회적기업
                '전체': "(isfemale = 'x' and isBoy = 'x' and restartup ='x' and isSocialed = 0)"
            };

            let whereConditions = arr2.map(item => conditionsMapping[item]).filter(
                Boolean); // 필터는 undefined나 null 항목 제거용

            return whereConditions.length ? "(" + whereConditions.join(' OR ') + ")" : '';
        }



        // 중복 선택 제어를 위한 이벤트 리스너 등록
        document.querySelectorAll('.upTime2 input[type="checkbox"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                if (this.value === '해당사항없음') {
                    // 해당사항없음 체크박스를 선택한 경우 다른 체크박스 모두 해제
                    document.querySelectorAll('.upTime2 input[type="checkbox"]').forEach(
                        function(otherCheckbox) {
                            if (otherCheckbox !== checkbox) {
                                otherCheckbox.checked = false;
                            }
                        });
                } else {
                    // 다른 체크박스 선택 시 해당사항없음 체크박스 해제
                    document.getElementById('all-b').checked = false;
                }
            });
        });
    });

    function redirectToMapPage() {
        // 임시 폼 생성
        let form = document.createElement('form');
        document.body.appendChild(form);

        form.method = 'post';
        // form.action = './Consulting.php';
        form.action = './Map.php';

        // whereClause 데이터를 input 요소로 추가
        let input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'arr2';
        input.value = JSON.stringify(arr2); // 전역 변수로 선언된 whereClause 사용
        form.appendChild(input);
        // whereClause 데이터를 input 요소로 추가
        let inputWhereClause = document.createElement('input');
        inputWhereClause.type = 'hidden';
        inputWhereClause.name = 'whereClause';
        inputWhereClause.value = whereClause; // 원하는 whereClause 값을 설정
        form.appendChild(inputWhereClause);
        // 폼 제출
        form.submit();
    }
    </script>
    </div>
    <?php include("../../common/Footer.php") ?>
</body>

</html>