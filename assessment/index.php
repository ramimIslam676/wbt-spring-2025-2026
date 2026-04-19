<?php
    $length = 10;
    $width = 7;
    $rectangle = $length*$width;
    echo "rectangle $rectangle";
    echo "br";

    $amount = 100;
    $vat = 0.15;
    $vatAmount = $amount*$vat;
    echo "vat = $vatAmount";
    echo "br";

    $num = 19;
    if($num%2===0){
        echo 'The number is even';
    }
    else{
        echo 'The number is odd';
    }

    echo "br";

    for( $i=10; $i<=100; $i++){
        if($i%2===0){
            echo '';
        }
        else{
            echo "$i";
        }
    }

    $array = array("toyota", "volvo", "BMW", "porsche");
    foreach($array as $find){
        if($find==="volvo"){
            echo 'Found';
        }
    }


    // no 7
    for($i=1; $i<4; $i++){
        for($j=0; $j<$i; $j++){
            echo '*';
        }
    }

    for($i=4; $i>0; $i--){
        for($j=1; $j<$i; $j++){
            echo "$j";
        }
    }

    $alph = array("A", "B", "C");
    for($i=1; $i<3; $i++){
        for($j=0; $j<$i; $j++){
            echo "$alph[$j]";
        }

    }

    ?>