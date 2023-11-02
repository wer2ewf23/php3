<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Montserrat+Subrayada:wght@400;700&display=swap" rel="stylesheet">
    <title>sm2</title>
</head>
<body>
    <?php
        if(isset($_POST['signup'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];

            if(empty($name)){
                $errors .= 'Введите имя';
            }elseif(strlen($name) <= 2){
                $errors .= 'Имя должно содержать не менее 2 символов';
            }
            if(empty($email)){
                $errors .= 'Введите почту';
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors .= 'Неверный формат почты';
            }
            if(empty($number)){
                $errors .= 'Введите номер';
            }elseif(strlen($number) <= 11){
                $errors .= 'номер должен содержать хотя бы 11 символов';
            }
        }
       
    ?>
<div class="container">
    <div class="content">
        <h2 class="title">Просто форма</h2>
        <form name="signup" method="POST" class="form">
            
            <label for="input_1">name <br> <input type="text" id="input_1" name="name" value="<?php if(isset($name)) echo $name?>" class="input" placeholder="input name"></label>
            <label for="input_2">email <br> <input type="text" name="email" value="<?php if(isset($email)) echo $email?>" id="input_2" class="input"  placeholder="input email"></label>
            <label for="input_3">number <br> <input type="number" name="number" value="<?php if(isset($number)) echo $number?>" id="input_3" class="input"  placeholder="+7(777)-77-777-77"></label>
            <input type="submit" name="signup" class="submit">
            <p class="errors"><? if(isset($errors)) echo $errors?></p>
        </form>
    </div>
    
    
</div>
    
</body>
</html>