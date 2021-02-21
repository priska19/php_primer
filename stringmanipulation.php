<?php
$title = "String Manipulation";
include 'includes/header.php' 
?>

<h1><?php echo $title ?></h1>
    <?php
    //menyambungkan string (concatination)
    $phrase1= "student came late";
    $phrase2= "in class, stand with rock";
    $name= "jeon jungkook";
    echo $phrase1 . ", name Lucas, " . $phrase2 . "</br>";
    echo '<hr/>';
    //perubahan string
    echo 'Dimulai dengan huruf besar: ' . ucfirst($name) . '</br>';
    echo 'Per kata dengan huruf besar: ' . ucwords($name) . '</br>';
    echo 'huruf besar semua: ' . strtoupper($name) . '</br>';
    echo 'huruf kecil semua: ' . strtolower("CAPSLOCK BOSS") . '</br>';
    echo 'ganti kata: '. str_replace("stand", "sit", $phrase2).'<br/>';
    echo '<hr/>';

    echo 'ulang string: ' . str_repeat($name, 5) . '<br/>';
    echo 'ulang string +nested fungsi: ' . strtoupper(str_repeat($name, 5)) . '<br/>';
    echo 'get a substring: ' . substr($name, 3, 7).'<br/>';
    
    echo 'get position of string: ' . strpos($name, 'g').'<br/>';
    echo 'temukan huruf n: ' . strchr($name, 'n').'<br/>';
    echo 'temukan huruf k: ' . strchr($name, 'k').'<br/>';
    echo 'temukan huruf J: ' . strchr($name, 'J').'<br/>';

    echo 'banyak huruf: ' . strlen($name).'<br/>';

    echo 'tanpa trim: ' . 'a'. (' b c d ') . 'e'.'<br/>';
    echo 'trim ngapus spasi sesudah sebelum tanda petik : ' . 'a'. trim(' b c d ') . 'e'.'<br/>';
    echo 'trim ngapus spasi tanda petik kiri: ' . 'a'. ltrim(' b c d ') . 'e'.'<br/>';
    echo 'trim ngapus spasi tanda petik kanan: ' . 'a'. rtrim(' b c d ') . 'e'.'<br/>';
    
    ?>
    <?php require 'includes/footer.php'; ?>
