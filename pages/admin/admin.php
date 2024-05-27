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
    <link rel="stylesheet" href="../load/Map.css" />
    <style>
    .header {
        font-size: 30px;
        color: #45328A;
        font-weight: 500;
        margin-bottom: 19px;
    }

    .amount {
        font-size: 23px;
        color: #333;
        width: 415px;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        color: #45328A;
        font-weight: 600;
    }

    .amount2 {
        font-size: 16px;
        color: #333;
        width: 415px;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        color: #45328A;
        font-weight: 600;
        line-height: 40px;
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
        width: 190px;
        height: 45px;
        border-radius: 7px;
        color: white;
        font-size: 20px;
        background: #45328A;
        font-weight: 500;
    }

    .marauto {
        margin: 39px 60px 0 0;
        width: 420px;
    }

    .marauto2 {
        margin: 59px 7px 10px 0;
        width: 420px;
    }

    /* 스타일링을 위한 CSS */
    .post {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 5px;
    }

    .notice-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        align-items: center;
    }

    .notice-area55 {
        display: flex;
        flex-direction: column;
        gap: 20px;
        /* 간격 조정 */
    }

    .notice-content {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 80rem;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        /* 간격 조정 */
    }

    .page_num {
        display: flex;
        justify-content: center;
        /* 페이지 번호 가운데 정렬 */
        margin-top: 20px;
        margin-bottom: 20px;
        /* 아래쪽 여백 추가 */
    }

    .page-numbers {
        display: flex;
        align-items: center;
        margin-top: 20rem;
        /* 세로 중앙 정렬 */
    }

    .page-numbers span {
        margin: 0 5px;
        padding: 5px 10px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        cursor: pointer;
    }

    .page-numbers .current {
        background-color: #45328A;
        color: white;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php include('../../common/Nav.php') ?>

    <div class="bmps-banner mb-5">
        <div class="top-text">
            <h1>BMPS</h1>
            <h4>(Business Model Platform Solution)</h4>
        </div>
    </div>

    <div class="cont2">
        <div class="d-flex justify-content-between" style="width:110rem; height:50rem;">
            <!-- 조회 박스 start -->
            <div
                style="background-color: #F2F4F6; max-width: 25rem; height:35rem; border-radius: 35px; padding: 0 1% 2% 1%; margin: 3rem 0 0 0;">
                <div>
                    <div class="col-12 my-4">
                        <div class="d-flex flex-column align-items-between mt-4">
                            <label for="upTimeSelect" class="mr-2 mb-2">창업 기간:</label>
                            <select id="upTimeSelect" name="upTime" class="mb-2">
                                <option value="9">예비창업자</option>
                                <option value="1">1년 미만</option>
                                <option value="3">3년 미만</option>
                                <option value="5">5년 미만</option>
                                <option value="7">7년 미만</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between my-0">
                        <div class="col-12">
                            <div class="d-flex flex-wrap justify-content-start"><span
                                    style="font-weight: bold;font-size:25px;">사업자 유형:</span>
                            </div>
                            <div class="jcs mt-4">
                                <label for="all-b" class="button-checkbox2 mr-2 mb-2 upTime2 clicked" id="all-bc">
                                    <input type="checkbox" value="전체" name="upTime-b" id="all-b" class="checkbox-icon1"
                                        style="display: none;">
                                    <span class="button-text">없음</span>
                                </label>
                                <label for="b-2" class="button-checkbox2 mr-2 mb-2 upTime2">
                                    <input type="checkbox" value="청년창업" name="upTime-b" id="b-2" class="checkbox-icon1"
                                        style="display: none;">
                                    <span class="button-text">청년</span>
                                </label>
                                <label for="b-3" class="button-checkbox2 mr-2 mb-2 upTime2">
                                    <input type="checkbox" value="재창업자" name="upTime-b" id="b-3" class="checkbox-icon1"
                                        style="display: none;">
                                    <span class="button-text">재창</span>
                                </label>
                                <label for="b-4" class="button-checkbox2 mr-2 mb-2 upTime2">
                                    <input type="checkbox" value="여성창업" name="upTime-b" id="b-4" class="checkbox-icon1"
                                        style="display: none;">
                                    <span class="button-text">여성</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-4">
                        <div class="d-flex flex-column align-items-between mt-4">
                            <label for="upTimeRegionSelect" class="mr-2 mb-2">지역:</label>
                            <select id="upTimeRegionSelect" name="upTime" class="mb-2">
                                <option value="지역무관">지역무관</option>
                                <option value="서울">서울</option>
                                <option value="경기">경기</option>
                                <option value="인천">인천</option>
                                <option value="강원">강원</option>
                                <option value="강원">대전</option>
                                <option value="강원">충북</option>
                                <option value="강원">충남</option>
                                <option value="강원">경남</option>
                                <option value="강원">세종</option>
                                <option value="강원">광주</option>
                                <option value="강원">전북</option>
                                <option value="강원">전남</option>
                                <option value="강원">부산</option>
                                <option value="강원">울산</option>
                                <option value="강원">대구</option>
                                <option value="강원">경북</option>
                                <option value="강원">제주</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr class="mt-3" style="border: none; border-top: 2px solid white; " />
                    </div>
                    <div class="col-12">
                        <button class="button-checkbox8 mt-2" id="showBoardButton">지원사업 조회하기</button>
                    </div>
                    <div class="col-12">
                        <hr class="mt-3" style="border: none; border-top: 2px solid white; " />
                    </div>
                    <div class="col-12">
                        <button class="button-checkbox8 mt-2" onclick="adminList()">고객상태변경</button>
                    </div>
                </div>
            </div>
            <div class="notice-container">
                <div class="notice-content">
                    <div class="notice-board-area">
                        <div class="notice-board"></div>
                    </div>
                </div>
                <div class="page-numbers"></div>
            </div>
        </div>
    </div>


    <script>
    function adminList() {
        window.location.href = "./admin_list.php";
    }
    document.addEventListener("DOMContentLoaded", function() {
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

        let currentPage = 1; // 현재 페이지 초기값 설정
        let totalPages = 0;
        const showBoardButton = document.getElementById('showBoardButton');
        const prevPageButton = document.getElementById('prevPageButton');
        const nextPageButton = document.getElementById('nextPageButton');
        const noticeBoard = document.querySelector('.notice-board');

        showBoardButton.onclick = function() {
            currentPage = 1; // 검색 버튼을 누르면 첫 페이지부터 로딩
            loadPosts(currentPage);
        };

        const arr = []; // arr 배열을 이벤트 핸들러 외부에서 선언
        const arr2 = ['9', ['전체'], '지역무관'];
        const upTimeSelect = document.getElementById("upTimeSelect");
        upTimeSelect.addEventListener("change", function() {
            const selectedValue = upTimeSelect.value;
            arr2[0] = selectedValue;
            console.log(arr2);
        });

        const upTimeRegionSelect = document.getElementById("upTimeRegionSelect");
        upTimeRegionSelect.addEventListener("change", function() {
            const selectedValue = upTimeRegionSelect.value;
            arr2[2] = selectedValue;
            console.log(arr2);
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

                console.log('ㅇㅇ', arr2);
            });
        });

        function loadPosts(page) {
            $.ajax({
                url: './support_project.php',
                type: 'POST',
                cache: false,
                data: {
                    whereClause: generateWhereClause(arr2),
                    page: page
                },
                dataType: 'json',
                success: function(res) {
                    if (res) {
                        console.log('res', res);
                        displayPosts(res.posts);
                        displayPageNumbers(res.totalPages, currentPage);
                    } else {
                        console.log('No data found');
                        showBoardButton.disabled = true;
                    }
                },
                error: function() {
                    console.log('Error loading data');
                }
            });
        };

        prevPageButton.addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                loadPosts(currentPage);
            }
        });

        nextPageButton.addEventListener('click', function() {
            if (currentPage < totalPages) {
                currentPage++;
                loadPosts(currentPage);
            }
        });

        function displayPosts(posts) {
            const noticeBoard = document.querySelector('.notice-board');

            // 각 항목을 표시하기 전에 이전에 표시된 내용을 지웁니다.
            noticeBoard.innerHTML = '';

            if (posts.length === 0) {
                noticeBoard.innerHTML = '<p>데이터가 없습니다.</p>';
                return;
            }
            // 테이블 헤더 추가
            noticeBoard.innerHTML = `
        <ul>
            <li class="no">번호</li>
            <li class="areas">분야</li>
            <li class="local1">지역</li>
            <li class="titlle">제목</li>
            <li class="supplyAmount">인당지급액</li>
            <li class="target1">지원대상</li>
        </ul>`;

            // 현재 페이지 번호를 계산
            const startNumber = (currentPage - 1) * 10 + 1;

            for (let i = 0; i < posts.length; i++) {
                const post = posts[i];
                const postElement = document.createElement('ul');
                postElement.innerHTML = `
            <li class="no">${startNumber + i}</li>
            <li class="areas">${post.areas}</li>
            <li class="local1">${post.local1}</li>
            <li class="titlle">${post.titlle}</li>
            <li class="supplyAmount">${post.supply_amount}</li>
            <li class="target1">${post.target1}</li>
        `;
                noticeBoard.appendChild(postElement);
            }
        };
        // 페이지 번호 클릭 시 호출되는 함수
        function goToPage(pageNumber) {
            loadPosts(pageNumber); // 해당 페이지의 데이터 로딩
            currentPage = pageNumber; // 현재 페이지 업데이트
            displayPageNumbers(totalPages, currentPage); // 페이지 번호 갱신
        }
        // displayPageNumbers 함수 내에서 페이지 번호 생성 부분 수정
        function createPageButton(pageNumber, currentPage) {
            const pageNumberElement = document.createElement('span');
            pageNumberElement.textContent = pageNumber;

            if (pageNumber === currentPage) {
                pageNumberElement.classList.add('current');
            }

            pageNumberElement.addEventListener('click', function() {
                if (pageNumber !== '...') {
                    goToPage(pageNumber); // 페이지 번호 클릭 시 해당 페이지로 이동
                }
            });

            return pageNumberElement;
        }

        // displayPageNumbers 함수 내에서 페이지 번호 표시 부분 수정
        function displayPageNumbers(totalPages, currentPage) {
            const pageNumbersContainer = document.querySelector('.page-numbers');
            pageNumbersContainer.innerHTML = '';

            // 첫 페이지로 이동하는 버튼 표시
            if (currentPage !== 1) {
                const firstPageButton = createPageButton(1, currentPage);
                firstPageButton.textContent = '처음';
                pageNumbersContainer.appendChild(firstPageButton);
            }

            // ... 이전 페이지 번호 표시
            if (currentPage > 1) {
                const prevPageButton = createPageButton(currentPage - 1, currentPage);
                prevPageButton.textContent = '...';
                pageNumbersContainer.appendChild(prevPageButton);
            }

            // 가운데 페이지 번호 표시 (최대 10개)
            const maxVisiblePages = 10;
            const startPage = Math.max(1, Math.min(currentPage - Math.floor(maxVisiblePages / 2), totalPages -
                maxVisiblePages + 1));
            const endPage = Math.min(startPage + maxVisiblePages - 1, totalPages);
            for (let i = startPage; i <= endPage; i++) {
                const pageNumberButton = createPageButton(i, currentPage);
                pageNumbersContainer.appendChild(pageNumberButton);
            }

            // ... 다음 페이지 번호 표시
            if (currentPage < totalPages) {
                const nextPageButton = createPageButton(currentPage + 1, currentPage);
                nextPageButton.textContent = '...';
                pageNumbersContainer.appendChild(nextPageButton);
            }

            // 끝 페이지 번호로 이동하는 버튼 표시
            if (currentPage !== totalPages) {
                const lastPageButton = createPageButton(totalPages, currentPage);
                lastPageButton.textContent = '마지막';
                pageNumbersContainer.appendChild(lastPageButton);
            }
        }

        // function displayPageNumbers(totalPages, currentPage) {
        //     const pageNumbersContainer = document.querySelector('.page-numbers');
        //     pageNumbersContainer.innerHTML = '';

        //     for (let i = 1; i <= totalPages; i++) {
        //         const pageNumberElement = document.createElement('span');
        //         pageNumberElement.textContent = i;
        //         if (i === currentPage) {
        //             pageNumberElement.classList.add('current');
        //         }
        //         // Create a function wrapper to capture the current value of i
        //         (function(pageIndex) {
        //             pageNumberElement.addEventListener('click', function() {
        //                 loadPosts(pageIndex);
        //                 pageNumbersContainer.querySelectorAll('.page-numbers span').forEach(el => {
        //                     el.classList.toggle('current', el.textContent === pageIndex
        //                         .toString());
        //                 });
        //             });
        //         })(i); // Pass the current value of i to the function wrapper

        //         pageNumbersContainer.appendChild(pageNumberElement);
        //     }
        // };

        function generateWhereClause(arr2) {
            let whereConditions = [];

            whereConditions.push(generateCareerWhereClause(arr2[0]));

            whereConditions.push(GWC(arr2[1]));
            console.log('wrdf', GWC(arr2[1]));

            if (arr2[2] === '지역무관') {
                whereConditions.push(`(local1 = '무관')`);
            } else {
                whereConditions.push(`(local1 IN ('무관', '${arr2[2]}'))`);
            }
            let whereClause = '';
            if (whereConditions.length > 0) {
                whereClause = "AND " + whereConditions.join(' AND ');
            }
            return whereClause;
        };

        function generateCareerWhereClause(selectedYears) {
            let whereClause = '';

            switch (selectedYears) {
                case "1":
                    whereClause = '(career_int NOT IN (9))';
                    break;
                case "3":
                    whereClause = '(career_int NOT IN (1, 9))';
                    break;
                case "5":
                    whereClause = '(career_int NOT IN (1, 3, 9))';
                    break;
                case "7":
                    whereClause = '(career_int IN (7, 8))';
                    break;
                case "9":
                    whereClause = "(career_int IN (9) or pre = 'o')";
                    break;
                default:
                    whereClause = '(career_int NOT IN (9))';
                    break;
            }

            return whereClause;
        };

        function GWC(arr2) {
            let conditionsMapping = {
                '재창업자': "(isfemale = 'x' or isBoy = 'x')",
                '청년창업': "(isfemale = 'x' or restartup ='x')",
                '여성창업': "(isBoy = 'x' or restartup ='x')",
                '전체': "(isfemale = 'x' and isBoy = 'x' and restartup ='x')"
            };

            let whereConditions = arr2.map(item => conditionsMapping[item]).filter(
                Boolean); // 필터는 undefined나 null 항목 제거용

            return whereConditions.length ? whereConditions.join(' OR ') : '';
        };

    });
    </script>
    <?php include("../../common/Footer.php") ?>
</body>

</html>