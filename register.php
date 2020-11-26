<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../lab2/assets/css/main.css">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  
  <title>Регистрация</title>
</head>
<body>
<?php require 'header.php' ?>  
<main>
    <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="logo">
              <a href="index.php"><img src="../lab2/assets/img/logo.png" alt="Logo"> </a>
            </div>
          </div>
        </div>
</div>              
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="reg_form" action="reg_script.php" method="post">
          <div class="form-group">
            <label for="first_name">Имя</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
          </div>
          <div class="form-group">
            <label for="Last_name">Фамилия</label>
            <input type="text" class="form-control" id="Last_name" name="Last_name" required>
          </div>
          <div class="form-group">
            <label for="Email">Електроная почта</label>
            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="Email" required>
            <small id="emailHelp" class="form-text text-muted">Мы никогда никому не передадим вашу электронную почту.</small>
          </div>
          <select class="custom-select" name="role" required>
            <option selected>Open this select menu</option>
            <option value="1">Admin</option>
            <option value="2">User</option>
          </select>
          <div class="form-group">
            <label for="Password">Пароль</label>
            <input type="password" class="form-control" id="Password" name="Password" required>
          </div>
          <div class="form-group">
            <label for="RPassword">Повторите пароль</label>
            <input type="password" class="form-control" id="RPassword" name="RPassword" onChange="checkPasswordMatch();" required> 
          </div>
          <div class="registrationFormAlert" id="divCheckPasswordMatch">
          </div>
          <br>
          <script src="../lab2/assets/js/reg.js"></script>
          <button type="submit" class="btn btn-primary" value="Регистрация">Регистрация</button>
        </form>
      </div>
    </div>
  </div>
</main>
<?php require 'footer.php' ?>  
</body>
</html>