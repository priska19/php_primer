<?php 
$title="Function";
include 'includes/header.php' ?>

    <h1><?php echo $title ?></h1>
    <?php

    //mendefinisikan fungsi
    function writeMessage(){
        echo "have a great day<br/>";
    }
    //panggil fungsinya
    writeMessage();

    //fungsi with parameter
    function addNumber($num1, $num2){
        $sum = $num1+$num2;
        echo "hasil tambah $num1 dan $num2 : $sum<br/>";
    }

    function changeNum(&$num){
        $num=$num+10;
        //cara lain $num+=10
    }

    function returnProduk($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }
    
    $num=10;
    addNumber(12, 34);
    addNumber(12, $num);
    addNumber('12', "45");

    changeNum($num);
    //echo "$num <br/>";
    
    $return_nilai = returnProduk(12, 100);
    echo $return_nilai . '<br/>'
    ?>
    
    <?php require 'includes/footer.php'; ?>
