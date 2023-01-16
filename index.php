<?php
session_start();
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music House</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

    <nav class="p-3" style="background-color: #F8F0EF;">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-secondary">Каталог</a></li>
            <li><a href="about.html" class="nav-link px-2 text-dark">О нас</a></li>
            <li><a href="adress.html" class="nav-link px-2 text-dark">Где нас найти?</a></li>
          </ul>
          <div class="d-flex">
            <button type="button" class="btn btn-outline-dark me-2" data-bs-toggle="modal" data-bs-target="#SingIn">Вход</button>
            <button type="button" class="btn btn-warning "data-bs-toggle="modal" data-bs-target="#registration">Регистрация</button>
          </div>       
        </div>      
      </div>
    </nav>
<!-- Modal -->
  <div class="modal fade" id="SingIn" tabindex="-1" aria-labelledby="SingInLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="SingInLabel">Вход</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
        </div>
        <div class="modal-body">
          <div class="container" style="margin-top: 1rem; padding-left: 20%; padding-right: 20%;">
            <form action="vendor/signup.php" method="post">
                <div class="form-group">
                    <label for="SingInInputEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="SingInInputEmail" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group" style="margin-top: 1.5rem;">
                    <label for="SingInInputPassword">Пароль</label>
                    <input type="password" name="password" class="form-control" id="SingInInputPassword" placeholder="Пароль">
                </div>
                <div class="form-check" style="margin-top: 1.5rem;">
                    <input type="checkbox" class="form-check-input" id="SingInCheck">
                    <label class="form-check-label" for="SingInCheck1">Показать пароль</label>
                </div>
                <div class="modal-footer"> 
                   <button type="submit" class="btn btn-outline-secondary" style="margin-top: 1.5rem; margin-left: 40%; margin-right: 40%;">Войти</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registrationLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registrationLabel">Регистрация</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
        </div>
        <div class="modal-body">
          <div class="container" style="margin-top: 1rem; padding-left: 20%; padding-right: 20%;">
            <form action="vendor/signup.php" method="post">
                <div class="form-group">
                    <label for="registrationInputsurname" style="margin-top: 1.5rem;">Фамилия</label>
                    <input type="surname" name="surname" class="form-control" id="surname" aria-describedby="surnameHelp" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <label for="registrationInputname" style="margin-top: 1.5rem;">Имя</label>
                    <input type="name" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label for="registrationInputpatronymic" style="margin-top: 1.5rem;">Отчество</label>
                    <input type="patronymic" name="patronymic" class="form-control" id="patronymic" aria-describedby="patronymiclHelp" placeholder="Отчество">
                </div>
                <div class="form-group">
                    <label for="registrationInputlogin" style="margin-top: 1.5rem;">Логин</label>
                    <input type="login" name="login" class="form-control" id="login" aria-describedby="loginlHelp" placeholder="Логин">
                </div>
                <div class="form-group">
                    <label for="registrationInputemail" style="margin-top: 1.5rem;">email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emaillHelp" placeholder="email">
                </div>
                <div class="form-group" style="margin-top: 1.5rem;">
                    <label for="registrationInputPassword">Пароль</label>
                    <input type="password" name="password" class="form-control" id="Password" placeholder="Пароль">
                </div>
                <div class="form-group" style="margin-top: 1.5rem;">
                    <label for="registrationInputPassword_confirm">Повторите пароль</label>
                    <input type="password_confirm" name="password_confirm" class="form-control" id="Password_confirm" placeholder="Повторите пароль">
                </div>
                <div class="form-check" style="margin-top: 1.5rem;">
                    <input type="checkbox" class="form-check-input" id="registrationCheck">
                    <label class="form-check-label" for="registrationCheck1">Показать пароль</label>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-outline-secondary" style="margin-top: 1.5rem; margin-left: 40%; margin-right: 40%;">Зарегистрировать</button>
                </div>
                <p class="msg">
                  <?= $_SESSION['message'] ?>
                </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Modal -->

          <div class="container text-center" style="margin-top: 3rem;">
            <div class="row" style="margin-bottom: 3rem; ">
              
            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>