<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="description" content="사업계획서강의">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메라클</title>
    <link rel="stylesheet" href="./Map.css">
</head>



<body>
    <div class="bmTicketUI">
        <div class="bmTicketScroll">
            <div class="bmTicketSpace">
                <div class="bmTicketNumQuestion">
                    <div class="bmTicketNum">fds2548s2</div>
                </div>
            </div>
            <div class="bmTicketDescription">
                <div class="bmTicketDescriptionFont">* 해당 사용권은 사업계획서 작성을 도와주는 BMDS 사이트에 최초 로그인 후 30일간 사용하실 수 있는
                    쿠폰입니다.
                </div>
                <div class="bmTicketDescriptionFont">* 하단에 있는 비즈니스 모델 설계 툴 사용하러 가기 버튼을 클릭하시면 사용하실 수 있는 사이트로 이동합니다.
                </div>
            </div>
        </div>
        <div class="bmTicketBtn" onclick="gotoBMDS()">
            비즈니스 모델 설계 툴 사용하러 가기
            <span>(BMDS 사이트로 이동)</span>
        </div>
    </div>
</body>

<script>
var verificationCode = document.getElementById('verificationCode').value;
console.log('verificationCode', verificationCode);

$.ajax({
    url: './bmdsNumGet.php',
    type: 'GET',
    data: {
        authCode: verificationCode
    },
    success: function(res) {
        console.log('Success:', res);

        try {
            var parsedResponse = JSON.parse(res);
            console.log('Parsed Response:', parsedResponse);
        } catch (error) {
            console.error('Error parsing JSON:', error);
        }
    },
    error: function(xhr, status, error) {
        console.log('Error:', status, error);

        // If the response contains JSON, try to parse and log it
        try {
            var parsedError = JSON.parse(xhr.responseText);
            console.log('Parsed Error:', parsedError);
        } catch (parseError) {
            console.error('Error parsing JSON in the error response:', parseError);
        }
    }
});


function gotoBMDS() {
    window.open("https://bmds.co.kr", "_blank");
}
</script>

</html>