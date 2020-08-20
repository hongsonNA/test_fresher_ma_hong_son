<?php
function default_bai1(){
    $input = [];
    $count_array = count($input);
    $n = ceil($count_array / 3);
    $output = [];
    for($i=0; $i < $n ; $i++) {
        $stt_0 = $i;
        $stt_1 = $n + $i ;
        $stt_2 = (2 * $n) + $i ;
        $output[] = $input[$stt_0]; 
        $output[] = $input[$stt_1]; 
        $output[] = $input[$stt_2]; 
    }

    print_r($output);
    die();
}


function default_bai2(){
    $input = [];

    $number_1 = $input[0];
    $number_2 = $input[1];
    if($number_2 > $number_1) {
        $number_1 = $input[1];
        $number_2 = $input[0];
    }

    for($i > 1; $i < count($input); $i++){
        if($input[$i] > $number_1){
            $number_2 = $number_1;
            $number_1 = $input[$i];
        }elseif($input[$i] > $number_1) $number_2 = $input[$i];
    }


    echo $number_1 + $number_2;
    die();
}
?>