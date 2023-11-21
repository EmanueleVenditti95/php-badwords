<?php
    $text='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel eligendi praesentium, 
    commodi fugit, beatae sit dolorem nam laboriosam, omnis asperiores in corporis cum tenetur
     nostrum labore eveniet sed nemo! Voluptas tempora perspiciatis, et commodi deleniti, atque
      porro neque sapiente similique ut, officia nesciunt quibusdam qui explicabo. Aperiam reiciendis laudantium commodi.';

     $censorship = $_POST['censor_word'];
     var_dump($_POST['censor_word']);  
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
    <p><?php echo $_POST['censor_word'];  ?></p>
</body>
</html>

