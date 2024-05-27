<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="description" content="사업계획서강의">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메라클</title>
    <link rel="stylesheet" href="./Map.css">
</head>

<body>
    <div class="modalScreen">
        <div class="modalContent">
            <!-- 사이드바 -->
            <div class="sidebar">
                <div class="modalSideBarTitle">
                    사업계획서 작성<br />강의영상
                </div>
                <div class="modalSideBarBtnList">
                    <div class="modalSideBarBtnList2">
                        <label for="intro" class="modalSideBarBtn active">
                            <input type="radio" name="videoCategories" id="intro" checked />
                            intro
                        </label>
                        <?php for($i=1; $i <=10; $i++) { ?>
                        <label for="<?php echo 'btn'.$i ?>" class="modalSideBarBtn">
                            <input type="radio" name="videoCategories" id="<?php echo 'btn'.$i ?>" />
                            <?php echo $i.강 ?>
                        </label>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- 강의영상 모니터 -->
            <div class="monitor">
                <!-- <div class="toggleSidebarButton">
                    <img src="../../public/img/banner/arrow.png" alt="토글이미지">
                </div> -->
                <div class="monitor2">
                    <div class="monitor3">
                        <div class="lectureTitle">
                            사업계획서 작성 강의영상 소개
                        </div>
                        <div class="monitorBorder">
                            <div class="monitorScreen">
                                <div class="image-container3">
                                    <video controls loop muted style="width: 879px; height:495px;">
                                        <source src="../../public/img/banner/bmds.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="monitorStand"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modalPurpleBottomBar">
            <div class="bottomBarContent">
                <h3 class="bottomBarContent1">
                    * 설명글을 간단하게 작성합니다.
                </h3>
                <h3 class="bottomBarContent2">
                    * 설명글을 간단하게 작성합니다.
                </h3>
            </div>
        </div>
    </div>
</body>

<script>
document.querySelectorAll('.modalSideBarBtn').forEach(function(btn) {
    btn.addEventListener('click', function() {
        // 모든 버튼의 활성화 클래스를 제거
        document.querySelectorAll('.modalSideBarBtn').forEach(function(btn) {
            btn.classList.remove('active');
        });

        // 클릭한 버튼에 활성화 클래스 추가
        this.classList.add('active');

        console.log(this.textContent.trim());

        // 클릭한 버튼의 값을 가져와서 변수에 저장
        if (this.textContent.trim() === 'intro') {
            var selectedValue = this.textContent.trim().replace('소개', '');
            // '사업계획서 작성 강의영상' 뒤에 선택된 값 추가
            var lectureTitle = document.querySelector('.lectureTitle');
            lectureTitle.textContent = '사업계획서 작성 강의영상 ' + '소개';
        } else {
            var selectedValue = this.textContent.trim().replace('강', '');
            // '사업계획서 작성 강의영상' 뒤에 선택된 값 추가
            var lectureTitle = document.querySelector('.lectureTitle');
            lectureTitle.textContent = '사업계획서 작성 강의영상 ' + selectedValue + '강';
        }

        var videoPath; // 비디오 파일 경로를 저장할 변수

        // 클릭한 버튼의 값을 가져와서 변수에 저장
        if (this.textContent.trim() === 'intro') {
            videoPath = '../../public/img/banner/bmds.mp4'; // intro에 대한 경로
        } else {
            var selectedValue = this.textContent.trim().replace('강', '');
            videoPath = '../../public/img/banner/testVideo' + selectedValue + '.mp4'; // 다른 강의에 대한 경로
        }

        // video 태그의 src 속성을 변경
        var videoElement = document.querySelector('video');
        videoElement.setAttribute('src', videoPath);
        videoElement.load(); // 비디오 다시 로드
    });
});
document.querySelector('.toggleSidebarButton').addEventListener('click', function() {
    var icon = document.querySelector('.toggleSidebarButton img');

    var sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('hide');

    if (sidebar.classList.contains('hide')) {
        // 회전 효과를 적용합니다.
        icon.style.transform = 'rotate(180deg)';
    } else {
        // 회전 효과를 적용합니다.
        icon.style.transform = 'rotate(0deg)';
    }
});
</script>

</html>