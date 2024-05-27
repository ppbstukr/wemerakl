<?php

$serviceKey = 'b35Hfp5PsLF2%2F3ZJ5LlbD9BMlx%2FgYQ6rm4EPTEkH1zMV%2BmHFA%2BkIknsg9X0E1u66PVVFIp7YiVecPPlMdrbXgA%3D%3D'; // 발급받은 서비스 키를 입력하세요.
$pageNo = 2; // 페이지 번호를 입력하세요.
$numOfRows = 1000; // 한 페이지 결과 수를 입력하세요.
$startDate = '2023-01-01'; // 검색 시작 일자를 입력하세요. (입력형식: YYYY-MM-DD)
$endDate = '2023-12-31'; // 검색 종료 일자를 입력하세요. (입력형식: YYYY-MM-DD)

// $serviceKey = urlencode($serviceKey); // 서비스 키를 URL 인코딩

$url = 'https://apis.data.go.kr/1421000/mssBizService/getbizList'; // API 요청 URL
$url .= '?serviceKey=' . $serviceKey; // 서비스키 추가
$url .= '&pageNo=' . $pageNo;
$url .= '&numOfRows=' . $numOfRows;
$url .= '&startDate=' . $startDate;
$url .= '&endDate=' . $endDate;
// 필요한 추가적인 파라미터가 있다면 여기에 추가하세요.

$ch = curl_init(); // curl 초기화
curl_setopt($ch, CURLOPT_URL, $url); // curl에 URL 설정
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 문자열로 반환
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // 연결 시간 제한
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // SSL 인증 무시

$response = curl_exec($ch); // curl 실행 및 응답 저장

curl_close($ch); // curl 종료

if ($response === false) {
    die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}

$xml = new SimpleXMLElement($response);
// var_dump($xml->body->items->item->subTitle);
// var_dump($xml->body->items->item->title);
// var_dump($xml->body->items->item->dataContents);
// var_dump($xml->body->items->item->writerName);
// var_dump($xml->body->items->item->writerPosition);
// var_dump($xml->body->items->item->writerPhone);
// var_dump($xml->body->items->item->writerEmail);
// var_dump($xml->body->items->item->viewUrl);
// echo '부제목: ' .  $xml->body->items->item->subTitle;
$list2 = $xml->body;
$itemCount2 = count($list->itmes);
echo '<hr>';
echo $xml->body->totalCount;
echo '<hr>';
echo $xml->body->numOfRows;
echo '<hr>';
echo $xml->body->pageNo;
echo '<hr>';

$list = $xml->body->items;
$itemCount = count($list->item);
echo '아이템의 수: ' . $itemCount;
foreach ($list->item as $item) {
    echo '제목: ' .  $item->title . '<br/>';
    // echo '내용: ' .  $item->dataContents . '<br/>';
    echo '작성자 이름: ' .  $item->writerName . '<br/>';
    echo '작성 부서: ' .  $item->writerPosition . '<br/>';
    echo '작성자 연락처: ' .  $item->writerPhone . '<br/>';
    echo '작성자 이메일: ' .  $item->writerEmail . '<br/>';
    echo '페이지로 이동: <a href="' .  $item->viewUrl . '">이동하기</a><br/>';
    echo '<hr>';
};
// echo '응답: ' . htmlspecialchars($response); // 응답 출력