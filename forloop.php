<?php
$title='For Loop';
include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>
<?php
for($count=0; $count<5; $count++){
    echo '<p>Hope world</p>';
}

for($count=0; $count<5; $count++){
    echo "<p>The Count is : $count</p>";
}
?>  

    <?php require 'includes/footer.php'; ?>
