  <?php

    session_start();
    require_once 'connect.php';

    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];   
      
    if ($password === $password_confirm){
        //con...
    }else{
      $_SESSION['message'] = 'Пароли не совпадают';
        
    }
 ?>

 
