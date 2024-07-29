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
            <h3 style="color: green;">Lo mejor en jabones de baño</h3>
            <p></p>
            <?php
            include("./linea.php");
            ?>

            <p><br></p>

            <!-- Productos -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/dove1.jpg" class="card-img-top" alt="Jabon de baño Original">
                    <div class="card-body">
                        <h5 class="card-title">Jabon de baño Original</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L130.00</del></p>
                            <p>L110.00</p>
                            <button onclick="addToCart('Jabon de baño Original', 110.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/dove2.jpg" class="card-img-top" alt="Jabon de baño Cool moisture">
                    <div class="card-body">
                        <h5 class="card-title">Jabon de baño Cool moisture</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L130.00</del></p>
                            <p>L110.00</p>
                            <button onclick="addToCart('Jabon de baño Cool moisture', 110.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/dove3.jpg" class="card-img-top" alt="Jabon de baño Sensitive skin">
                    <div class="card-body">
                        <h5 class="card-title">Jabon de baño Sensitive skin</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L130.00</del></p>
                            <p>L110.00</p>
                            <button onclick="addToCart('Jabon de baño Sensitive skin', 110.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/dove4.jpg" class="card-img-top" alt="Jabon de baño Shea butter">
                    <div class="card-body">
                        <h5 class="card-title">Jabon de baño Shea butter</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L130.00</del></p>
                            <p>L110.00</p>
                            <button onclick="addToCart('Jabon de baño Shea butter', 110.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/dove5.jpg" class="card-img-top" alt="Jabon de baño Rosa">
                    <div class="card-body">
                        <h5 class="card-title">Jabon de baño Rosa</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L130.00</del></p>
                            <p>L110.00</p>
                            <button onclick="addToCart('Jabon de baño Rosa', 110.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/dove6.jpg" class="card-img-top" alt="Jabon de baño Indulgin">
                    <div class="card-body">
                        <h5 class="card-title">Jabon de baño Indulgin</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L130.00</del></p>
                            <p>L110.00</p>
                            <button onclick="addToCart('Jabon de baño Indulgin', 110.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <p><br><br></p>

            <!-- Flecha izquierda -->
            <div class="navigation-arrows arrow-left">
                <a href="./pasta.php" class="arrow-left">
                    &#x2039; <!-- Unicode para la flecha izquierda -->
                </a>
            </div>

            <!-- Flecha derecha -->
            <div class="navigation-arrows arrow-right">
                <a href="./info.php" class="arrow-right">
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