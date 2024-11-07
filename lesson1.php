<?php
    //lesson1
    //1
    $hello = "Hello World";
    echo $hello;
    echo "\n";

    //2
    $my_name = "Kazuki Minami";
    echo "Welcome " . $my_name;
    echo "\n";
    
    //3
    $apple_price = 200;
    $apple_number = 3;
    $orange_price = 100;
    $orange_number = 4;
    $total_price = $apple_price * $apple_number + $orange_price * $orange_number;
    echo $total_price . "円";
    echo "\n";

    //4
    $color = array("red", "blue", "green");
    echo $color[1];
    echo "\n";

    //5
    $personal_info =array(
        "佐藤"=>["年齢"=>"36歳", "職業"=>"営業"],
        "田中"=>["年齢"=>"23歳", "職業"=>"事務"],
        "吉田"=>["年齢"=>"54歳", "職業"=>"社長"]
    );
    $name = array_keys($personal_info);
    echo $name[1] . $personal_info["田中"]["年齢"];
    echo "\n";
?>