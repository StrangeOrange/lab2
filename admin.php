<?php 
session_start();
$e=$_SESSION['email'];
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../lab2/assets/css/main.css">
    <link rel="stylesheet" href="../lab2/assets/css/modal.css">
    <title>Кабинет администратора</title>
</head>
<body>
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                    <div class="header_text">
                    <h1>Кабинет администратора</h1>
                    </div>
            </div>
        </div>
    </div>
</header>
<main>
<div class="container">
        <div class="row">
          <div class="col-6">
            <div class="logo">
              <a href="acc_admin.php"><img src="../lab2/assets/img/logo.png" alt="Logo"> </a>
            </div>
          </div>
        </div>
</div>   
<?php $q= mysqli_query($conn, "SELECT * FROM users, roles WHERE users.role_id = roles.id_r AND users.email = '$e'");
$row=mysqli_fetch_array($q);?>
<div class="container">
    <div class="row">
        <div class="foto_wrapper">
        <div class="col-6">
        <?php foreach ($q as $row){ ?>
            <img src="<?php echo $row['photo'] ; ?>" alt="Ваш Аватр">
            <?php } ?>
            
            <form enctype="multipart/form-data" method="post" action="edit.php">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="image" multiple accept="image/*,image/jpeg">
            <label class="custom-file-label" for="customFile">Выберете файл</label>
        </div>
        </div>
        </div>
        <div class="col-6">
        <div class="form_wrapper">
            <?php foreach ($q as $row){ ?>
                <form method="post" action="edit.php">
                <div class="form-group">
                    <label for="first_name">Имя</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['first_name'] ; ?>">
                </div>
                <div class="form-group">
                    <label for="Last_name">Фамилия</label>
                    <input type="text" class="form-control" id="Last_name" name="Last_name" value="<?php echo $row['last_name'] ; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Почта</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'] ; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password'] ; ?>">
                </div>
                <select class="custom-select" name="role" required>
                <?php echo ' <option value="'.$row['role_id'].'" selected>'.$row['title'].'</option>';?>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
                <?php } ?>
                <button type="submit" class="btn btn-primary" value="Регистрация">Внести изменения</button>
            </form>
                <form method="post" action="delete.php" class="delete">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" value="Регистрация">Удалить</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer_text">copyright</div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>