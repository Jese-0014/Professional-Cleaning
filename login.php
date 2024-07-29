<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("./head.php"); ?>
</head>

<body>

    <?php include("./navbar.php"); ?>

    <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form action="login_usuario_be.php" method="POST" class="flip-card__form" action="">
                        <input class="flip-card__input" name="correo" placeholder="Email" type="email">
                        <input class="flip-card__input" name="contrasena" placeholder="Password" type="password">
                        <button class="flip-card__btn">Vamos!</button>
                     </form>
                  </div>
                  <div class="flip-card__back">
                     <div class="title">Sign up</div>
                     <form action="registro_usuario_be.php" method="POST" class="flip-card__form" action="">
                        <input class="flip-card__input" name="nombre" placeholder="Name" type="name">
                        <input class="flip-card__input" name="correo" placeholder="Email" type="email">
                        <input class="flip-card__input" name="contrasena" placeholder="Password" type="password">
                        <button class="flip-card__btn">Confirmar!</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>
    

</body>

</html>