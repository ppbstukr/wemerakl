<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글자 구멍 효과</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    canvas {
        border: 2px solid black;
    }
    </style>
</head>

<body>
    <canvas id="canvas" width="500" height="500"></canvas>
    <script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    const backgroundImage = new Image();
    backgroundImage.src = './public/img/각종지원사업연계.png'; // 배경 이미지 설정

    const text = 'Your Text Here';
    const fontSize = 50;

    backgroundImage.onload = function() {
        ctx.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height);

        ctx.font = `${fontSize}px Arial`;
        ctx.fillStyle = 'white';
        ctx.textAlign = 'center';
        ctx.fillText(text, canvas.width / 2, canvas.height / 2);

        ctx.globalCompositeOperation = 'destination-out';
        ctx.font = `${fontSize}px Arial`;
        ctx.fillStyle = 'black';
        ctx.fillText(text, canvas.width / 2, canvas.height / 2);
    };
    </script>
</body>

</html>