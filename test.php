<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 페이지</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            background: linear-gradient(to bottom, rgba(100, 77, 157, 0.9), rgba(150, 137, 177, 0.9));
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-weight: bold;
            color: white;
        }

        .card:nth-child(1) {
            background-color: rgba(100, 77, 157, 0.9);
        }

        .card:nth-child(2) {
            background-color: #28a745;
        }

        .card:nth-child(3) {
            background-color: #17a2b8;
        }

        .card:nth-child(4) {
            background-color: #dc3545;
        }

        .card-text {
            color: white;
        }

        hr {
            border: none;
            /* 기본 border 제거 */
            height: 2px;
            /* 선의 높이 설정 */
            overflow: hidden;
            /* 동그란 점이 높이를 넘어가지 않게 하기 위해 */
            background-image: radial-gradient(circle, #FFF 50%, transparent 50%);
            /* 동그란 점 생성, 색상을 #FFF로 변경 */
            background-size: 8px 8px;
            /* 점의 크기 및 간격 설정 */
            background-position: 0 2px;
            /* 점의 위치 설정 */
            background-repeat: repeat-x;
            /* 가로 방향으로 반복 */
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">기술시장조사</h5>
                        <hr>
                        <p class="card-text">성장 중인 기업에게 기술시장조사는 미래의 비즈니스 기회를 포착하고 지속적인 성장을 위한 발판을 마련하는 중요한 역할을 합니다.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">경쟁사분석</h5>
                        <hr>

                        <p class="card-text">경쟁사분석을 통해 업계 선두 주자들의 전략과 혁신을 파악하고, 기업의 지속적인 성장과 발전을 위한 새로운 전략을 수립해보세요.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">R&D 투자</h5>
                        <hr>

                        <p class="card-text">기업의 지속적인 성장을 위해 R&D 투자를 확대하여 기술 혁신을 이끌고, 시장 선점 및 고객 만족도 향상에 기여하세요.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">투자 확보</h5>
                        <hr>

                        <p class="card-text">앞으로의 성장을 위한 안정적인 투자 확보를 위해, 기업의 비전과 목표를 명확하게 전달하는 사업계획서를 작성하고 투자자들의 지지를
                            얻으세요.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>