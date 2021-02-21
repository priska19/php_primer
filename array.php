<?php
$title = "Arrays";
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>
    <?php
    $num = 3;

    $numbers=array(1,2,3,4,5,6,7,8,9,10,34,56,23,85,23,86,12);

    echo $numbers[5];

    $size = count($numbers);
    echo "<p> banyaknya angka : $size</p>";

    for($count=0; $count<$size; $count++){
        echo "<p>$numbers[$count]</p>";
    }
    ?>

    <?php require 'includes/footer.php'; ?>
