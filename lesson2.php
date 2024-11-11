<?php
    #lesson2
    #1
    #変数A, Bを用意し、それぞれに数値を代入します
    #どちらの変数が大きいか判別し、大きい方の変数名を表示してください
    $A = 1;
    $B = 5;
    if($A > $B){
        echo "大きい方はA";
    }else if($A < $B){
        echo "大きい方はB";
    }else{
        echo "A = B";
    }
    echo "\n";

    #2
    #奇数か偶数かを判断するプログラムを作ってください
    function OddEven($A){
        if($A % 2 == 0 ){
            echo "偶数です";
        }else{
            echo "奇数です";
        }
        echo "\n";
    }

    $C = 10;
    $D = 5;
    OddEven($C);
    OddEven($D);

    #3
    #0から100の点数を変数に代入し、成績判定するプログラムを作成してください
    #100点 -> AA
    #90点以上 -> A
    #80点以上 -> B
    #70点以上 -> C
    #60点以上 -> D
    #60点未満 -> E
    function test_judgement($tp){
        if($tp == 100){
            echo "判定：AA";
        }else if($tp >= 90){
            echo "判定：A";
        }else if($tp >= 80){
            echo "判定：B";
        }else if($tp >= 70){
            echo "判定：C";
        }else if($tp >= 60){
            echo "判定：D";
        }else{
            echo "判定：E";
        }
        echo "\n";
    }

    $takasi = 100;
    $miyake = 92;
    $yamada = 80;
    $sato = 72;
    $yamaguchi = 60;
    $yusei = 30;

    test_judgement($takasi);
    test_judgement($miyake);
    test_judgement($yamada);
    test_judgement($sato);
    test_judgement($yamaguchi);
    test_judgement($yusei);

    #4
    #ある整数を変数に代入し、正の数か負の数か０のいずれかを判定するプログラムを作成してください
    function PN_jugement($number){
        if($number > 0){
            echo "正の数";
        }else if($number < 0){
            echo "負の数";
        }else{
            echo "0";
        }
        echo "\n";
    }
    $E = 10;
    $F = -2;
    $G = 0;

    PN_jugement($E);
    PN_jugement($F);
    PN_jugement($G);

    #5
    #年齢を入力し、下記の条件によってバスの料金を出力するプログラムを作成してください
    #0から5才 -> 無料
    #6才から12才 -> 200円
    #13才から70才 -> 500円
    #70才より上 -> 無料
    function bus_price($age){
        if($age >= 0 && $age <= 5){
            echo "無料";
        }else if($age >= 6 && $age <= 12){
            echo "200円";
        }else if($age >= 13 && $age <= 70){
            echo "500円";
        }else if($age > 70){
            echo "無料";
        }
        echo "\n";
    }

    $miyake_age = 28;
    $yamada_age = 3;
    $sato_age = 7;
    $takashi_age = 80;

    bus_price($miyake_age);
    bus_price($yamada_age);
    bus_price($sato_age);
    bus_price($takashi_age);
?>