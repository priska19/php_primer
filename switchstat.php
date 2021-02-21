<?php
$title = "Switch Statments";
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>
<?php 
$grade = 'A';

switch($grade){
    case 'A' :
        echo '<h3 style=color:blue>Asik dapet A</h3>';
        break;
    
    case 'B' :
        echo '<h3 style=color:green>Bagus Dapet B</h3>';
        break;

    default:
        echo '<h3 style=color:yellow>Cukup lah Dapet C</h3>';
        break;
}
?>
    <?php require 'includes/footer.php'; ?>
