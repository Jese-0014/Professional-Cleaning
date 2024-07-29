<!DOCTYPE html>
<html lang="en">

<?php
include("./head.php");
?>

<body>

    <?php
    include("./navbar.php");
    ?>

    <!-- Contenido Principal -->
    <div class="container mt-4">
        <div class="row">
            <!-- Noticias Principales -->

            <?php
            include("./linea.php");
            ?>

            <p></p>
            <h3 style="color: green;">Las mejores toallas del país</h3>
            <p></p>
            <?php
            include("./linea.php");
            ?>

        <p><br></p>

        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="./imagenes/toallanegra.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Toallas color Negro</h5>
                    <div class="precio">
                    <br>
                        <p class="text-muted"><del>L95.00</del></p>
                        <p>L85.00</p>
                    </div>
                    <button onclick="addToCart('Toallas color Negro', 85.00)" class="btn btn-primary">Añadir al carrito</button>
                </div>
            </div>
        </div>

        

        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="./imagenes/toallagris.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Toallas color Gris</h5>
                    <div class="precio">
                        <br>
                        <p class="text-muted"><del>L95.00</del></p>
                        <p>L85.00</p>
                    </div>
                    <button onclick="addToCart('Toallas color Gris', 85.00)" class="btn btn-primary">Añadir al carrito</button>
                </div>
            </div>
        </div>

       

        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="./imagenes/toallablanca.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Toallas color Blanco</h5>
                    <div class="precio">
                        <p class="text-muted"><del>L95.00</del></p>
                        <p>L85.00</p>
                    </div>
                    <button onclick="addToCart('Toallas color Blanco', 85.00)" class="btn btn-primary">Añadir al carrito</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="./imagenes//toallaazul.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Toallas color Azul</h5>
                    <div class="precio">
                        <p class="text-muted"><del>L95.00</del></p>
                        <p>L85.00</p>
                    </div>
                    <button onclick="addToCart('Toallas color Blanco', 85.00)" class="btn btn-primary">Añadir al carrito</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="./imagenes/toallacarmesi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <br>
                    <h5 class="card-title">Toallas color Carmesí</h5>
                    <div class="precio">
                        <p class="text-muted"><del>L95.00</del></p>
                        <p>L85.00</p>
                    </div>
                    <button onclick="addToCart('Toallas color Blanco', 85.00)" class="btn btn-primary">Añadir al carrito</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="./imagenes/toallaverde.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <br>
                    <h5 class="card-title">Toallas color Verde</h5>
                    <div class="precio">
                        <p class="text-muted"><del>L95.00</del></p>
                        <p>L85.00</p>
                    </div>
                    <button onclick="addToCart('Toallas color Blanco', 85.00)" class="btn btn-primary">Añadir al carrito</button>
                </div>
            </div>
        </div>


            <!-- Flecha izquierda -->
            <div class="navigation-arrows arrow-left">
                <a href="./index.php" class="arrow-left">
                    &#x2039; <!-- Unicode para la flecha izquierda -->
                </a>
            </div>

            <!-- Flecha derecha -->
            <div class="navigation-arrows arrow-right">
                <a href="./shampoo.php" class="arrow-right">
                    &#x203A; <!-- Unicode para la flecha derecha -->
                </a>
            </div>

    </div>

    <div id="notification" class="alert alert-success" style="display: none; position: fixed; top: 10px; right: 10px;">
        Producto añadido al carrito
    </div>

    <script>
        function addToCart(productName, productPrice) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existingProductIndex = cart.findIndex(item => item.name === productName);
            
            if (existingProductIndex !== -1) {
                // Product already in cart, update quantity
                cart[existingProductIndex].quantity += 1;
            } else {
                // Product not in cart, add new product
                cart.push({ name: productName, price: productPrice, quantity: 1 });
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            showNotification('Producto añadido al carrito');
        }

        function showNotification(message) {
            const notification = document.getElementById('notification');
            notification.innerText = message;
            notification.style.display = 'block';
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000); // Ocultar el mensaje después de 3 segundos
        }
    </script>

</body>

</html>