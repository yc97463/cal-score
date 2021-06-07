<?php
header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8

if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    @$sc1 = $_POST["sc1"];
    @$sc2 = $_POST["sc2"];
    @$sc3 = $_POST["sc3"];
    @$tc1 = $_POST["tc1"];
    if ($sc1 != null && $sc2 != null && $tc1 != null && $sc1 <=100 && $sc2 <=100 && $sc3 <=100 && $tc1 <=100 && $sc1 >=0 && $sc2 >=0 && $sc3 >=0 && $tc1 >=0) { //如果 nickname 和 gender 都有填寫
        //回傳 nickname 和 gender json 資料
        $scorce = $sc1*0.2+$sc2*0.2+$tc1*0.3;
        $scorce_semester = (round($scorce+$sc3*0.3));
        if ($sc3 != null){
            if($scorce_semester >=60){
                $rc1 = "有過";
            }else{
                $rc1 = "沒過";
            };   
        }else{
            $scorce2 = floor((60-$scorce)/0.3-1);
            $scorce3 = floor((40-$scorce)/0.3-1);
            $sc3out = round($scorce2,2);
            $sc3out2 = round($scorce3);
        };
          
        
        echo json_encode(array(
            'rsc' => "ok",  
            'sc3out' => $sc3out,
            'sc3out2' => $sc3out2,
            'sc3out3' => $scorce_semester,
            'rc1' => $rc1,
            'rc2' => round($scorce+$sc3*0.3)
        ));
    } else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            // 'errorMsg' => '資料有漏，或有錯誤（可能是分數超標），無法試算'
            'errorMsg' => '試算發生錯誤，可能是「一二段、平時成績有漏輸入」，或「輸入的分數超過臺灣滿分標準」，請檢查後再試'
        ));
    }
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}
?>