<?php
    #lesson4
    #1
    #1から100までの数値で、10の倍数だけを表示するプログラムを作成してください
    echo "第1問";
    echo "\n";
    for($i = 1; $i <= 100; $i++){
        if($i % 10 == 0){
            echo $i;
            echo "\n";
        }
    }

    #2
    #1から100までの数値で、偶数の数値の合計を出力してください
    echo "第2問";
    echo "\n";
    for($i = 1; $i <= 100; $i++){
        if($i % 2 == 0){
            echo $i;
            echo "\n";
        }
    }

    #3
    #1から100までの数値で、条件によって下記の表示をするプログラムを作成してください
    #3の倍数 -> Fizz, 5の倍数 -> Buzz, 15の倍数 -> FizzBuzz, それ以外 -> 数字
    echo "第3問";
    echo "\n";
    for($i = 1; $i <= 100; $i++){
        if($i % 3 == 0 && $i % 5 == 0 ){
            echo "FizzBuzz";
        }else if($i % 3 == 0){
            echo "Fizz";
        }else if($i % 5 == 0){
            echo "Buzz";
        }else{
            echo $i;
        }
        echo "\n";
    }

    #4
    #5つの数字の中から最も大きい数字を出力するプログラムを作成してください
    #組み込み関数を使うのは禁止です

    #最大値に、配列の最初の数を仮の最大値として代入
    #最大値と、2番目の数を比較し、最大値より大きな値だったら、その値を最大値に代入する
    #5番目まで、繰り返す
    #最大値が代入されている値が最大値

    echo "第4問";
    echo "\n";
    $A = [3, 1, 20, 30, 10];
    $B = 0;

    $B = $A[0];
    for($j = 0; $j < 5;$j++){
        for($i = 0; $i < 4 - $j; $i++){
            if($A[$i] > $A[$i + 1]){
                $B = $A[$i];
                $A[$i] = $A[$i + 1];
                $A[$i + 1] = $B;

            }
        }
    }
    for($i = 0; $i < 5; $i++){
        echo $A[4 - $i];
        echo "\n";
    }

    #5
    #特定の文字列が回文かどうかを判別するプログラムを作成してください
    
    echo "第5問";
    echo "\n";

    $word_1 = "abaa";
    $word_2 = "aaaa";

    function Palindrome($str){
        if(strrev($str) == $str){
            return true;
        }else{
            return false;
        }
    }

    if(Palindrome($word_1)){
        echo "回文です";
    }else{
        echo "回文ではありません";
    }

    echo "\n";

    if(Palindrome($word_2)){
        echo "回文です";
    }else{
        echo "回文ではありません";
    }
    echo "\n";
?>