<?php
    $text='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel eligendi praesentium, 
    commodi fugit, beatae sit dolorem nam laboriosam, omnis asperiores in corporis cum tenetur
     nostrum labore eveniet sed nemo! Voluptas tempora perspiciatis, et commodi deleniti, atque
      porro neque sapiente similique ut, officia nesciunt quibusdam qui explicabo. Aperiam reiciendis laudantium commodi.';

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

