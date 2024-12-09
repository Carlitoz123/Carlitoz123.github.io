<?php
if(isset($_GET['error'])){
  $error = $_GET['error'];
}
?>
<?php 
    include "../php/conexion.php";
    $sql="select * from users order by id DESC";
    $res= $conexion->query($sql) or die($conexion->error);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/mediaquery.css">
</head>
<body>
    <div class="wrapper">
        <form action="../php/login.php" method="post">
            <h1>Login</h1>
            <div class="user">
                <input type="text" placeholder="Username" name="nombre" required>
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="user">
                <input type="password" placeholder="Password" name="contra" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            
                <div class="recordar">
                    <label> <input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <!-- no me queda este boton de enlace -->
               <div class="btn"><button type="submit" class="btnlogin" href="">Login</button> </div>

                <div class="register">
                    <p>Don't have an account?<a href="../register/register.php" >Register</a></p>
                    
                </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
        if(isset($_GET['error'])){
    ?>
                <script>
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Datos no validos",
                    });
                </script>
    <?php  } ?>
</body>
</html>