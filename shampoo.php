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
            <h3 style="color: green;">El mejor Shampoo del país</h3>
            <p></p>
            <?php
            include("./linea.php");
            ?>

            <p><br></p>

            <!-- Productos -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pantene1.jpg" class="card-img-top" alt="Pantene Agán tapón dorado">
                    <div class="card-body">
                        <h5 class="card-title">Pantene Agán tapón dorado</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L195.00</del></p>
                            <p>L180.00</p>
                        </div>
                        <button onclick="addToCart('Pantene Agán tapón dorado', 180.00)" class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pantene2.jpg" class="card-img-top" alt="Pantene Agán tapón blanco">
                    <div class="card-body">
                        <h5 class="card-title">Pantene Agán tapón blanco</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L195.00</del></p>
                            <p>L180.00</p>
                        </div>
                        <button onclick="addToCart('Pantene Agán tapón blanco', 180.00)" class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pantene3.jpg" class="card-img-top" alt="Pantene Arroz tapón dorado">
                    <div class="card-body">
                        <h5 class="card-title">Pantene Arroz tapón dorado</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L195.00</del></p>
                            <p>L180.00</p>
                        </div>
                        <button onclick="addToCart('Pantene Arroz tapón dorado', 180.00)" class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pantene5.jpg" class="card-img-top" alt="Pantene Arroz tapón blanco">
                    <div class="card-body">
                        <h5 class="card-title">Pantene Arroz tapón blanco</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L195.00</del></p>
                            <p>L180.00</p>
                        </div>
                        <button onclick="addToCart('Pantene Arroz tapón blanco', 180.00)" class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pantene4.jpg" class="card-img-top" alt="Pantene Rosa tapón dorado">
                    <div class="card-body">
                        <h5 class="card-title">Pantene Rosa tapón dorado</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L195.00</del></p>
                            <p>L180.00</p>
                        </div>
                        <button onclick="addToCart('Pantene Rosa tapón dorado', 180.00)" class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pantene6.jpg" class="card-img-top" alt="Pantene Rosa tapón blanco">
                    <div class="card-body">
                        <h5 class="card-title">Pantene Rosa tapón blanco</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L195.00</del></p>
                            <p>L180.00</p>
                        </div>
                        <button onclick="addToCart('Pantene Rosa tapón blanco', 180.00)" class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <p><br><br></p>

            <!-- Flecha izquierda -->
            <div class="navigation-arrows arrow-left">
                <a href="./toallas.php" class="arrow-left">
                    &#x2039; <!-- Unicode para la flecha izquierda -->
                </a>
            </div>

            <!-- Flecha derecha -->
            <div class="navigation-arrows arrow-right">
                <a href="./pasta.php" class="arrow-right">
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

    </div>

</body>

</html>