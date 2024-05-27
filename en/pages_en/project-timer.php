<?php 
    //모집 마감 알림
    /*추후 파라미터에 시작일, 종료일 추가*/
    function timer($sdate, $edate){
        $start_date_str = "2021-09-02";
        $end_date_str = "2021-09-22";

        $start_date = strtotime($start_date_str);
        $end_date = strtotime($end_date_str);

        $current_date = strtotime(date("Y-m-d"));

        $start_diff = ($current_date - $start_date)/3600;
        $end_diff = ($current_date - $end_date) /3600;

        if($start_diff >= 0 && $end_diff <0){
            echo '모집중';
        }else if($start_diff <0 && $end_diff <0){
            echo '모집 예정';
        }else{
            echo '모집 마감';
        };
    };