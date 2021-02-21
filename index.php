<?php 
$title = "Index";
include 'includes/header.php' 
//kalo pake include, file gk ditemukan page bisa tetep jalan
?>
    <h1><?php echo $title ?></h1>
    <h2>hello world</h2>
    <br>
    <?php
    echo 'hello php';
    echo '<br/>';
    echo'second line ';
    echo '<br/>';
    

    $name = 'priska arlinda';
    $age = 20;
    echo $name;
    echo '<h1>hy my name is: '.$name.'</h1>';
    echo "<h1> my age is: $age </h1>";
    //perbedaan petiknya ada di cara penulisan variabel
    ?>
    <button type="button" class="btn btn-dark">Klik Disini</button>
    <button type="button" class="btn btn-primary">Klik Disini</button>
    <button type="button" class="btn btn-success">Klik Disini</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-info">Heroku.com</a>
    <?php require 'includes/footer.php'; 
    //kalo require, file gk ada pagenya gk bisa diload
    ?>