<?php

// 크롤링할 대상 URL
$url = 'https://www.k-startup.go.kr/web/contents/bizpbanc-ongoing.do';

// cURL 초기화
$ch = curl_init();

// cURL 옵션 설정
curl_setopt($ch, CURLOPT_URL, $url); // 크롤링할 URL 설정
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 응답을 문자열로 반환
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // 연결 시간 제한 설정
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // SSL 인증 무시
$userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36';
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);

// 크롤링 실행 및 응답 저장
$response = curl_exec($ch);

// cURL 종료
curl_close($ch);

// DOMDocument을 사용하여 HTML 소스 코드 파싱
$dom = new DOMDocument();
libxml_use_internal_errors(true); // HTML 파싱 오류를 무시하기 위해 오류 보고를 비활성화합니다.
$dom->loadHTML($response);
libxml_use_internal_errors(false); // 오류 보고를 다시 활성화합니다.

// 파싱한 데이터 처리
// body 태그 선택
$body = $dom->getElementsByTagName('body')->item(0);

// div 태그 선택
$divs = $body->getElementsByTagName('div');
foreach ($divs as $div) {
    // script 태그 선택
    $scripts = $div->getElementsByTagName('script');
    foreach ($scripts as $script) {
        $scriptContent = $script->nodeValue;
        // script 태그의 내용 출력
        echo 'Script Content: ' . $scriptContent . PHP_EOL;
    }
}
