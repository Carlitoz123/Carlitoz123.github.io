<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleregister.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/mediaquery.css">
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>Register</h1>
            <div class="user">
                <input type="text" placeholder="Username" required>
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="user">
                <input type="text" placeholder="Correo" required>
                <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="user">
                <input type="password" placeholder="Password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="user">
                <input type="password" placeholder="Confirm Password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            
                
                <!-- no me queda este boton de enlace -->
               <div class="btn"><button type="submit" class="btnregister"  href="../BD/products.php" onclick="changeIndex5()" >Register</button></div>

                <div class="register">
                    <p>Do you have an account??<a href="../login/login.php" >Log in</a></p>
                    
                </div>
        </form>

    </div>
   
    
</body>
</html>