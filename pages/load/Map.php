<link rel="stylesheet" href="../../public/css/aboutus.css">
<link rel="stylesheet" href="../../public/css/qna.css">
<!DOCTYPE html>
<meta charset="UTF-8">

<html lang="ko">

<head>
    <meta charset="UTF-8" name="description" content="비즈니스 모델 플랫폼 솔루션에 대한 페이지입니다.">
    <title>메라클 BMPS</title>
    <!-- jQuery 라이브러리 로드 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.iamport.kr/v1/iamport.js"></script>

    <script>
    function isMobile() {
        return /Mobi|Android/i.test(navigator.userAgent);
    }


    // 이곳에서 함수 호출
    IMP.init('imp47860156');

    function requestPay() {

        // 입력 값들을 가져옵니다.
        var merchant_uid = `mid_${new Date().getTime()}`;
        var amount = 9900;
        var buyerName = document.getElementById('buyer_name').value;
        var buyerTel = document.getElementById('buyer_tel').value;
        var buyerEmail = document.getElementById('buyer_email').value;
        var query = document.getElementById('whereClause').value;
        var arr2 = document.getElementById('arr2').value;
        var whereIn = document.getElementById('whereIn').value;
        var consulting_fields = document.getElementById('selecteFields').value;
        var consulting = document.getElementById('consulting').value;

        // 먼저 결제 금액을 사전 등록합니다.
        $.post('./preparePayment.php', {
            merchant_uid: merchant_uid,
            amount: amount
        }).done(function(response) {
            // 사전 결제금액 등록에 성공하면 아임포트 결제를 진행합니다.
            if (isMobile()) {
                localStorage.setItem('buyerName', buyerName);
                localStorage.setItem('buyerEmail', buyerEmail);
                localStorage.setItem('buyerTel', buyerTel);
                var data = {
                    merchant_uid: merchant_uid,
                    amount: "9900",
                    name: "(주)메라클",
                    buyer_name: buyerName,
                    buyer_tel: buyerTel,
                    buyer_email: buyerEmail,
                    query: query,
                    agreeOrNot: "Y",
                    arr2: arr2,
                }

                IMP.request_pay({
                        pg: "html5_inicis.MOI6801286",
                        pay_method: "card",
                        merchant_uid: merchant_uid,
                        amount: amount,
                        name: "(주)메라클", // 주문명
                        buyer_name: buyerName,
                        buyer_tel: buyerTel,
                        buyer_email: buyerEmail,

                        m_redirect_url: `https://wemerakl.com/pages/load/DataVue.php?merchant_uid=${encodeURIComponent(data.merchant_uid)}&amount=${encodeURIComponent(data.amount)}&name=${encodeURIComponent(data.name)}&buyer_email=${encodeURIComponent(data.buyer_email)}&buyer_tel=${encodeURIComponent(data.buyer_tel)}&buyer_name=${encodeURIComponent(data.buyer_name)}&query=${encodeURIComponent(data.query)}&agreeOrNot=${encodeURIComponent(data.agreeOrNot)}`
                    },
                    // &imp_success=${encodeURIComponent(imp_success)}

                )
            } else if (!isMobile()) {
                var data = {
                    merchant_uid: merchant_uid,
                    amount: "9900",
                    name: "(주)메라클",
                    buyer_name: buyerName,
                    buyer_tel: buyerTel,
                    buyer_email: buyerEmail,
                    query: query,
                    agreeOrNot: "Y",
                    arr2: arr2,
                }
                IMP.request_pay({
                    pg: "html5_inicis.MOI6801286",
                    pay_method: "card",
                    merchant_uid: merchant_uid,
                    amount: amount,
                    name: "(주)메라클", // 주문명
                    buyer_name: buyerName,
                    buyer_tel: buyerTel,
                    buyer_email: buyerEmail,
                    // appointment_date: selectedDate, // 추가된 날짜 항목
                    // appointment_time: selectedTime, // 추가된 시간 항목
                }, function(response) {
                    if (response.success) {
                        localStorage.setItem('buyerName', buyerName);
                        localStorage.setItem('buyerEmail', buyerEmail);
                        localStorage.setItem('buyerTel', buyerTel);
                        var data = {
                            merchant_uid: merchant_uid,
                            amount: "9900",
                            name: "(주)메라클",
                            buyer_name: buyerName,
                            buyer_tel: buyerTel,
                            buyer_email: buyerEmail,
                            status: response.status, // 결제 상태
                            query: query,
                            agreeOrNot: "Y",
                            arr2: arr2,
                        }
                        var xhr = new XMLHttpRequest();
                        var url = 'https://merakl.co.kr/api/coupon/merakl/pay'; // 실제 서버 스크립트 경로로 대체

                        xhr.open('POST', url, true);
                        xhr.setRequestHeader('Content-Type', 'application/json');

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                console.log('Server Response:', xhr.responseText);
                            }
                        };

                        xhr.send(JSON.stringify(data));

                        if (!alert('결제가 성공적으로 완료되었습니다.')) {
                            window.location.href =
                                `https://wemerakl.com/pages/load/Consulting.php?merchant_uid=${encodeURIComponent(data.merchant_uid)}`;
                        }
                    } else {
                        alert('결제가 취소되었습니다. 이전 화면으로 되돌아갑니다.');
                        window.location.href = "https://wemerakl.com/pages/load/Map2.php";

                    }
                });
            }


            // 여기서는 기존의 IMP.request_pay() 호출 코드가 들어갑니다.
            // ...
        }).fail(function(error) {
            alert('결제 준비 과정에서 문제가 발생했습니다.');
            console.error(error);
        });
        if (!isMobile()) {
            // 페이지가 로드될 때 이벤트 리스너를 등록합니다.
            window.addEventListener('beforeunload', function() {
                // 로컬 스토리지에서 값들을 삭제합니다.
                localStorage.removeItem('buyerName');
                localStorage.removeItem('buyerTel');
                localStorage.removeItem('buyerEmail');
            });
        }
    }
    </script>

    <?php include('../../common/Header.php') ?>
    <?php include('../../communication/floatmenu.php') ?>
    <link rel="stylesheet" href="./Map.css" />

</head>


<body>
    <?php include('../../common/Nav.php') ?>

    <div class="d-flex justify-content-center align-items-center mb-3">
        <img src="../../public/img/banner/사업공고_상세페이지_v1.1.jpg" style="width:100%;height:100%;" alt="사업계획서-상세페이지">
    </div>

    <div style="background:#F7F7F7; height:68rem;">
        <div class="d-flex flex-column justify-content-center align-items-center" style="padding:5rem 25px;">
            <div style="font-size:26px; font-weight:600;margin-bottom:1rem;">사업계획서, 정부지원사업을 컨설팅 받은</div>
            <div><mark class="realReview">사용자들의 찐 후기!</mark></div>
        </div>
        <div class="slideWrap2">
            <div class="slideUp">
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/9.png" alt="백">
                                <div class="nameSpace">백**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            <span class="reviewSpan">
                                효율적인 운영 방법을 배워서 좋았어요!<br />
                            </span>
                            이를 향후에 적용하고 싶습니다!
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/10.png" alt="성">
                                <div class="nameSpace">성**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            비즈니스 모델을 조정하고 효율성을 높이는 방법을 배웠습니다.<br />
                            <span class="reviewSpan">
                                비즈니스 아이디어가 더 구체적으로 정리됐어요.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/7.png" alt="김">
                                <div class="nameSpace">김**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            사업계획서 처음 쓰기엔 너무 막막했는데
                            <span class="reviewSpan">
                                컨설팅을 받고나선 어떻게 적어야할지 길이 보입니다! 감사합니다~
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/4.png" alt="안">
                                <div class="nameSpace">안**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            컨설팅 서비스를 통해 어려운 작업을 단숨에 처리할 수 있었고,
                            <span class="reviewSpan">
                                저희 사업은 성공적으로 출발하게 되었습니다.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/6.png" alt="황">
                                <div class="nameSpace">황**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            컨설팅으로 비즈니스 방향 찾는 데
                            <span class="reviewSpan">
                                도움을 받았습니다.<br />
                            </span>
                            그로인해
                            <span class="reviewSpan">
                                계획을 실행할 수 있게 됐습니다.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/8.png" alt="박">
                                <div class="nameSpace">박**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            비즈니스 전략이 더 명확해져서 저희 회사의
                            <span class="reviewSpan">
                                방향성이 제대로 잡히고 더욱 더 성장할 수 있게 된것 같습니다.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/5.png" alt="이">
                                <div class="nameSpace">이**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            컨설팅을 통해 저희 아이디어를
                            <span class="reviewSpan">
                                현실적인 비즈니스 계획으로 변환하는데 큰 도움을 받았습니다.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/2.png" alt="유">
                                <div class="nameSpace">유**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            정부사업 참여의 문턱을 넘게 해준
                            <span class="reviewSpan">
                                전문적인 조언으로 인해 성과를 이뤘습니다.
                            </span>
                            감사합니다!
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/3.png" alt="강">
                                <div class="nameSpace">강**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            서비스를 통해 사업계획서 작성에 대한 전문가의 도움을<br />받게 되었는데,
                            <span class="reviewSpan">
                                그 경험이 정말 중요한 도움이 되었습니다.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slideCard">
                    <div class="slideCardContent">
                        <div class="nameAndStar">
                            <div class="nameAndImg">
                                <img class="imgIcon" src="../../public/img/banner/1.png" alt="김">
                                <div class="nameSpace">김**님</div>
                            </div>

                            <div>
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                                <img class="star" src="../../public/img/banner/redStar.png" alt="별점">
                            </div>
                        </div>
                        <div class="mx-3"></div>
                        <div class="review">
                            우리 기업은 컨설팅 서비스를 통해
                            <span class="reviewSpan">
                                정부사업에 성공적으로<br />참여
                            </span>
                            할 수 있었습니다.<br />그 동안 기다렸던 성과를 이룬 기분이에요.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-5" style="padding:5rem 222px;">
        <div class="d-flex justify-content-start align-items-center">
            <div style="width:62rem;">
                <div style="width:62rem; font-size:40px; font-family:Reko !important;">
                    메라클만의 차별점!<br />
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="width:20rem; font-size:40px; font-family:Reko !important;">
                            <span style="color:#706FCB;">BMDS</span> 서비스
                        </div>
                        <div class="d-flex justify-content-center align-items-center" onclick="gotoBMDS()"
                            style="float: right; width: 15rem; height: 40px; font-weight:600; font-size: 20px; background: linear-gradient(45deg, #755FCE, #5A86C3); color: white; border-radius: 30px; cursor:pointer; z-index:3;">
                            BMDS 이용하러가기
                        </div>
                    </div>
                </div>
                <!-- <div class="d-flex flex-column justify-content-center align-items-center"
                    style="margin:2rem 0 0 0; width:62rem; height:5rem; border-radius:10px; background:#EAE4EF;">
                    <div style="font-size:17px;font-weight:600;"><span style="font-weight:800; font-size:21px;">베이직 버전은
                            무료로 제공</span>되어
                        기본적인 기능을 비용없이 이용할 수 있습니다.
                    </div>
                </div> -->
                <div>
                    <div style="font-size:31px; font-weight:800; margin:3rem 0 3rem 0;">
                        여러분의 사업화 실현 가능성을 한 층 더 높여 드립니다.
                    </div>
                    <div style="font-size:27px; font-weight:600; letter-spacing:0;margin:-1rem 0 0 0;">BMDS의 11가지
                        세부
                        항목을 통해 아이템 구상부터 사업 론칭, 스케일업까지의</div>
                    <div style="font-size:27px; font-weight:600; letter-spacing:-0.1px;">비즈니스 계획을 체계적이면서도 구체적으로 설계할 수
                        있습니다.
                        더하여 다양한</div>
                    <div style="font-size:27px; font-weight:600; letter-spacing:-0.8px;">우수 BM 사례를 확인하거나 투자, R&D, 정부지원
                        등의
                        전문적인 서비스도 받을 수</div>
                    <div style="font-size:27px; font-weight:600; letter-spacing:-0.4px;"> 있습니다.</div>
                </div>
                <div class="d-flex justify-content-start align-items-center" style="width:62rem; margin:1.5rem 0 0 0;">
                    <div class="blocks11">■</div>
                    <div style="width:62rem; margin:0 0 0 5px; font-weight:600; font-size:15px;">11-Blocks 비즈니스모델 디자인
                        보고서</div>
                </div>
                <div class="image-container4 d-flex justify-content-center aline-items-center"
                    style="margin:.5rem 0 1.5rem 0;">
                    <div class="preViewBtn" onclick="preViewDown()">
                        Bulid-up_Full.Ver 미리보기 다운로드
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="displayOpacity"
        style="display: none; position: fixed; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; z-index:4;">
    </div>
    <div class="cont" style=" position: fixed; bottom: 0; width: 100%; background-color: #ffffff; z-index:99;">
        <div id="downArrow" class="w-100 hidden">
            <div class="w-100 d-flex justify-content-center align-items-center" style="height:0;">
                <div class="d-flex justify-content-center align-items-center"
                    style="width:7rem; height:3rem; border-width: 1px 1px 0 1px; z-index:3; border-style: solid; border-color: rgba(0,0,0,0.3); cursor:pointer; border-radius:5px 5px 0 0; background:white; margin-bottom:40px;"
                    onclick="hideArrow()">
                    <img src="../../public/img/banner/downArrow.png"
                        style="width:30px; height:15px; color:rgba(0,0,0,0.3);" alt="아래화살표">
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="width:100%;">
                <div class="d-flex flex-column justify-content-center align-items-center w-100"
                    style="height:54rem; padding:10rem 0; margin-bottom:-100px; border-top:1px solid rgba(0,0,0,0.3); z-index:2;">
                    <div class="d-flex justify-content-center align-items-center" style="margin:0 0 3rem 0">
                        <div style=" font-size:27px; font-weight:600;">
                            *쿠폰 발급과 정보제공을 위하여 고객님의 기본정보가 반드시 필요합니다.
                        </div>
                    </div>
                    <form id="paymentForm"
                        style="background-color: #f7f4fb; width:57rem; border-radius:20px; box-shadow: 12px 12px 10px rgba(0, 0, 0, 0.2);">
                        <div style="padding:4.5rem 0 1rem 3rem;">
                            <h2 class="my-1" style="text-align:left; font-weight:600;">기본정보 입력</h2>
                            <hr style="border: none; width:2rem; border-top: 3px solid #909396;margin:30px 0 10px 0;" />
                            <div class="d-flex flex-column justify-content-between"
                                style="height:21rem; margin-top: -7px;">
                                <input type="hidden" id="resultInput" />
                                <div class="d-flex justify-content-start align-items-center"
                                    style="width:50rem; height:4rem; background:white; border-radius:5px;box-shadow: 4px 4px 3px rgba(0, 0, 0, 0.2);margin:2rem 0;">
                                    <label for="buyer_name" style="margin:0 0 0 10px;"><span
                                            style="font-size:18px; font-weight:600;">이름
                                            :</span>
                                        <input type="text" id="buyer_name" name="buyer_name" placeholder="홍길동" required
                                            style="width: 44rem; height:3rem; font-size:18px; border:none; outline:none; margin-left:1rem;"></label>
                                </div>
                                <div class="d-flex justify-content-start align-items-center"
                                    style="width:50rem; height:4rem; background:white; border-radius:5px;box-shadow: 4px 4px 3px rgba(0, 0, 0, 0.2);margin-bottom:2rem;">
                                    <label for="buyer_tel" style="margin:0 0 0 10px;"><span
                                            style="font-size:18px; font-weight:600;">휴대폰 번호
                                            :</span>
                                        <input type="text" id="buyer_tel" name="buyer_tel" placeholder="'-'를 빼고 입력해주세요."
                                            required
                                            style="width: 40rem; height:3rem; font-size:18px; border:none; outline:none; margin-left:1rem;"></label>
                                </div>
                                <div class="d-flex justify-content-start align-items-center"
                                    style="width:50rem; height:4rem; background:white; border-radius:5px;box-shadow: 4px 4px 3px rgba(0, 0, 0, 0.2);margin-bottom:2rem;">
                                    <label for="buyer_email" style="margin:0 0 0 10px;"><span
                                            style="font-size:18px; font-weight:600;">이메일
                                            :</span>
                                        <input type="text" id="buyer_email" name="buyer_email"
                                            placeholder="example@example.com" required
                                            style="width: 43rem; height:3rem; font-size:18px; border:none; outline:none; margin-left:1rem;"></label>
                                </div>
                                * 이메일을 확인해 주세요.
                                <div class="d-flex justify-content-between align-items-center" style="width:50rem;">
                                    <div class="d-flex justify-content-start align-items-center"
                                        style="width:43rem; height:3rem; background:white; border-radius:5px;box-shadow: 4px 4px 3px rgba(0, 0, 0, 0.2);margin-bottom:2rem;">
                                        <label for="buyer_email" style="margin:0 0 0 10px;"><span
                                                style="font-size:18px; font-weight:600;">이메일 확인
                                                :</span>
                                            <input type="text" id="buyer_email2" name="buyer_email2"
                                                placeholder="example@example.com" required
                                                style="width: 33rem; height:3rem; font-size:18px; border:none; outline:none; margin-left:1rem;"></label>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" onclick="emailCheck()"
                                        style="width:6rem;height:2.5rem;font-size:15px;background: linear-gradient(45deg, #755FCE, #5A86C3);color:white;border-radius:30px; cursor:pointer;margin-bottom:2rem;">
                                        <span style="margin-top:2.5px;">확인하기</span>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-start align-items-center form-group mt-3"
                                style="width:100%;">
                                <div style="width:50rem;">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex justify-content-start">
                                            <button type="button" class="btn"
                                                style="border:1px solid black; color:black;"
                                                id="submitSearch">약관보기</button>
                                        </div>
                                        <label class="d-flex justify-content-center align-items-center" for="agreement"
                                            style="width:10rem; display:block;">
                                            <input type="checkbox" id="agreement" style="width:2rem;" required />약관에
                                            동의합니다.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center form-group mt-4"
                                style="width:100%;">
                                <div class="d-flex justify-content-between align-items-center"
                                    style="width:27rem; height:4rem; margin-right:55px;">
                                    <div class="d-flex justify-content-center align-items-center"
                                        style="margin-top:12px;">
                                        <div style="font-size:23px; font-family:Reko !important;">상품금액</div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center"
                                        style="margin-top:10px;">
                                        <div style="font-size:30px; font-family:Reko !important;">9,900원</div>
                                    </div>
                                    <button id="disBtn" class="btn" type="button" onclick="validateInput()"
                                        disabled="true"
                                        style="width:10rem;height:3.5rem;font-size:25px;background: linear-gradient(45deg, #755FCE, #5A86C3);color:white;border-radius:30px;">결제하기</button>
                                </div>
                            </div>
                        </div>
                        <?php
                        $arr2 = [];
                        $whereClause = "";
                        $whereIn = $_POST['whereIn'];

                        if (isset($_POST['arr2'])) {
                            $arr2 = json_decode($_POST['arr2'], true);  // 받아온 데이터를 배열로 변환

                        }
                        // 체크박스 값 처리
                        $consulting_fields = isset($_POST['consulting_fields']) ? $_POST['consulting_fields'] : [];
                        $other_field = "";  // 기타 필드 초기화
                        // "기타" 체크박스가 선택된 경우
                        if (in_array("기타", $consulting_fields)) {
                            $other_field = $_POST['otherField'];
                            $key = array_search("기타", $consulting_fields);  // "기타" 값의 키를 찾습니다.
                            $consulting_fields[$key] = "기타: " . $other_field; // 해당 키의 값을 수정합니다.
                        }

                        if (isset($_POST['consulting'])) {
                            $consulting = $_POST['consulting'];
                        }

                        $selected_fields = implode(", ", $consulting_fields);  // 배열을 문자열로 변환
                        if (isset($_POST['whereClause'])) {
                            // 권장되지 않는 방법: 사용자 입력을 직접 쿼리에 사용하면 안됩니다.
                            $whereClause = $_POST['whereClause'];
                        }


                        ?>
                        <input type="hidden" name="arr2" id="arr2" value='<?php echo json_encode($arr2); ?>'>
                        <input type="hidden" name="whereIn" id="whereIn" value='<?php echo $whereIn; ?>'>
                        <textarea name="whereClause" id="whereClause"
                            style="display:none;"><?php echo $whereClause; ?></textarea>
                        <textarea name="consulting" id="consulting"
                            style="display:none;"><?php echo $consulting; ?></textarea>
                        <textarea name="selecteFields" id="selecteFields"
                            style="display:none;"><?php echo $selected_fields; ?></textarea>


                    </form>
                </div>
                <div id="myModal" class="modal">
                    <div class="modal-content2">
                        <span class="close">&times;</span>
                        <div class="modal-body2" style="max-height: 80vh; overflow: auto;">
                            <?php include('./terms.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center" id="priceShow"
            style="width:100%; height: 7rem; border-top:1px solid rgba(0,0,0,0.3);">
            <div class="d-flex justify-content-between" style="width:60rem; height:4rem; margin-right:10rem;">
                <div class="d-flex justify-content-center align-items-center" style="margin-top:7px;">
                    <div style="font-size:23px; font-weight:800; color:#755FCE">지금 바로 확인하러 가기</div>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="width:5rem;margin-top:-4px;">
                    <img style="width:38px;" src="../../public/img/banner/finger.png" alt="손가락" class="move-animation">
                </div>
                <div class="d-flex justify-content-center align-items-center" style="margin-top:12px;">
                    <div style="font-size:23px; font-family:Reko !important;">상품금액</div>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="margin-top:10px;">
                    <div style="font-size:30px; font-family:Reko !important;">9,900원</div>
                </div>
                <button id="showButton" class="btn mb-5" type="button"
                    style="float:right;width:15rem;height:60px;font-size:25px;background: linear-gradient(45deg, #755FCE, #5A86C3);color:white;border-radius:30px;">결제하기</button>
            </div>
        </div>
    </div>

    <?php //include("../../common/Footer.php") 
    ?>

</body>
<script>
function validateInput() {
    const nameRegex = /^[가-힣a-zA-Z]{1,20}$/;
    const telRegex = /^010-?\d{4}-?\d{4}$/;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    const buyerName = document.getElementById('buyer_name').value;
    const buyerTel = document.getElementById('buyer_tel').value;
    const buyerEmail = document.getElementById('buyer_email').value;
    const checkBox = document.getElementById('agreement');
    const buyerEmail2 = document.getElementById('buyer_email2').value;

    if (!checkBox.checked) {
        // Checkbox is checked
        alert("이용약관에 체크해주세요.");
        return false;
    }

    if (!nameRegex.test(buyerName)) {
        alert('올바른 이름 형식을 입력해주세요.');
        return false;
    }
    if (!telRegex.test(buyerTel)) {
        alert('올바른 휴대폰 번호 형식을 입력해주세요. (예: 010-1234-5678)');
        return false;
    }
    if (!emailRegex.test(buyerEmail)) {
        alert('올바른 이메일 형식을 입력해주세요.');
        return false;
    }
    if (buyerEmail != buyerEmail2) {
        alert('이메일이 동일하지 않습니다.');
        return false;
    }

    // 모든 검사를 통과하면 결제 함수 호출
    requestPay();

}

function emailCheck() {
    var buyerEmail = document.getElementById('buyer_email').value;
    var buyerEmail2 = document.getElementById('buyer_email2').value;
    var disBtn = document.getElementById('disBtn');
    if (buyerEmail != '' && buyerEmail2 != '') {
        if (buyerEmail != buyerEmail2) {
            alert('이메일이 동일하지 않습니다.');
            disBtn.setAttribute('disabled', 'true');
        } else {
            alert('확인되었습니다!');
            disBtn.removeAttribute('disabled');

        }
    } else {
        alert('이메일을 입력해주세요.');
        disBtn.setAttribute('disabled', 'true');
    }
}

function hideArrow() {
    document.getElementById('downArrow').classList.add('hidden');
    document.getElementById('priceShow').style.visibility = '';
    // document.getElementById('displayOpacity').style.background = 'rgba(255,255,255,0)';
    document.getElementById('displayOpacity').style.display = 'none';
}

function preViewDown() {
    const preViewDownloadLink = document.createElement('a');
    preViewDownloadLink.href = './Build Up_by Merakl v1.15_블러.pdf';
    preViewDownloadLink.download = 'Bulid-up_Full.Ver 미리보기.pdf';
    preViewDownloadLink.click();
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    var modal = document.getElementById("myModal");
    var btn = document.getElementById("submitSearch");
    var span = document.getElementsByClassName("close")[0];


    btn.onclick = function() {
        modal.style.display = "block"; // 모달창 보이기
        setTimeout(function() {
            modal.classList.add('show'); // 애니메이션을 위한 delay 추가
        }, 10); // 10ms 딜레이
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

    //validateInput()

});
document.getElementById('showButton').addEventListener('click', function() {
    document.getElementById('priceShow').style.visibility = 'hidden';
    document.getElementById('downArrow').classList.toggle('hidden');
    document.getElementById('displayOpacity').style.display = 'block';
    document.getElementById('displayOpacity').style.background = 'rgba(255,255,255,0.95)';
    // var button = document.getElementById('showButton');
    // button.value = (button.classList.contains('hidden')) ? '결제할래요?' : '결제하기';
});

function gotoBMDS() {
    window.open("http://bmds.co.kr", "_blank");
};
</script>
<script>
// 롤링 배너 복제본 생성
let roller = document.querySelector(".slideUp");
roller.id = "roller1"; // 아이디 부여

let clone = roller.cloneNode(true);
clone.id = "roller2";
document.querySelector(".slideWrap2").appendChild(clone);

document.querySelector("#roller1").style.top = "0px"; // 'left'를 'top'으로 변경
document.querySelector("#roller2").style.top = "0px";
//document.querySelector(".slideUp").offsetHeight + "px"; // 'offsetWidth'를 'offsetHeight'로 변경

roller.classList.add("original");
clone.classList.add("clone");
</script>


</html>