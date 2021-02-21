<?php
$title="If Statements";
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>
<?php 
$grade = 95;

if($grade >= 65){
    echo '<h3 style=color:green>LOLOS</h3>';
} else {
    echo '<h3 style=color:red>Tidak Lolos</h3>';
}

$nilai ='A';
if($nilai == 'A'){
    echo '<h3 style=color:blue>Asik dapet A</h3>';    
} elseif($nilai =='B'){
    echo '<h3 style=color:green>Bagus Dapet B</h3>';
} else {
    echo '<h3 style=color:yellow>Cukup lah Dapet C</h3>';
}
?>

    <?php require 'includes/footer.php'; ?>
