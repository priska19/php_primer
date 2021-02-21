<?php
$title="While/Do-While Loops";
include 'includes/header.php'
?>

    <h1><?php echo $title ?></h1>
    <h2>While</h2>
    <?php 
    $grade = 0;
    // infinite loop karena gk ada batasnya (gradenya 0 terus)
    // while($grade<10){       
    //     echo '<p>nilai kurang dari 10</p>';
    // }
    
    //pre-condition loop
    while($grade<5){       
        echo '<p>nilai kurang dari 10</p>';
        $grade++;
    }  
    echo 'exit loop' 
    ?>

    <h2>Do-While</h2>
    <?php
    
    $grade = 0;
    //post-condition
    do{
        echo '<p>do-while loop</p>';
        $grade++;
    } while ($grade<5);
    echo 'exit loop' ;
    ?>

    <?php require 'includes/footer.php'; ?>
