<?php
    //lesson1
    //1
    //Hello Worldを変数に代入し、出力してください
    $hello = "Hello World";
    echo $hello;
    echo "\n";

    //2
    //Welcome 〇〇と表示してください
    //〇〇にはご自身の名前を格納し、Welcomeと変数を文字列けつどうして表示してください
    $my_name = "Kazuki Minami";
    echo "Welcome " . $my_name;
    echo "\n";
    
    //3
    //200円のりんごを3つ、100円のみかんを4つ買った際の合計金額を表示してください
    //ただし、各果物の単価と個数を変数に代入した上で、計算式を用いて表示してください
    $apple_price = 200;
    $apple_number = 3;
    $orange_price = 100;
    $orange_number = 4;
    $total_price = $apple_price * $apple_number + $orange_price * $orange_number;
    echo $total_price . "円";
    echo "\n";

    //4
    //配列に、red, blue, greenの3つの値を格納し、blueを表示してください
    //ただし、配列と添字を用いて表示してください
    $color = array("red", "blue", "green");
    echo $color[1];
    echo "\n";

    //5
    //下記3名の情報が格納された連想配列を作成し、田中さんの年齢を表示してください
    //key, valueを意識して配列を作成してください
    //名前->佐藤、年齢->36歳、職業->営業
    //名前->田中、年齢->23歳、職業->事務
    //名前->吉田、年齢->54歳、職業->社長
    $personal_info =array(
        "佐藤"=>["年齢"=>"36歳", "職業"=>"営業"],
        "田中"=>["年齢"=>"23歳", "職業"=>"事務"],
        "吉田"=>["年齢"=>"54歳", "職業"=>"社長"]
    );
    $name = array_keys($personal_info);
    echo $name[1] . $personal_info["田中"]["年齢"];
    echo "\n";
?>