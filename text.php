<?php
     $text = $_POST['censor_text'];
     $censorship = trim($_POST['censor_word']);
     $replace = '***'; 
     $new_text = str_replace($censorship,$replace,$text);
     var_dump($new_text); 
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text</title>
</head>
<body>
    <h1>Censura il testo!</h1>
    <p><?php echo $text; ?></p>
    <p><?php echo strlen($text); ?></p>
    <p><?php echo $new_text ?></p>
    <p><?php echo strlen($new_text)?></p>

</body>
</html>

