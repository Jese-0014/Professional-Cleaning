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
            <h3 style="color: green;">Lo mejor para tus dientes</h3>
            <p></p>
            <?php
            include("./linea.php");
            ?>

            <p><br></p>

            <!-- Productos -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pasta1.jpg" class="card-img-top" alt="Pasta Menta blanqueadora">
                    <div class="card-body">
                        <h5 class="card-title">Pasta Menta blanqueadora</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L100.00</del></p>
                            <p>L70.00</p>
                            <button onclick="addToCart('Pasta Menta blanqueadora', 70.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pasta2.jpg" class="card-img-top" alt="Pasta Menta fuerte">
                    <div class="card-body">
                        <h5 class="card-title">Pasta Menta fuerte</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L100.00</del></p>
                            <p>L70.00</p>
                            <button onclick="addToCart('Pasta Menta fuerte', 70.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pasta3.jpg" class="card-img-top" alt="Pasta Jasmin">
                    <div class="card-body">
                        <h5 class="card-title">Pasta Jasmin</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L100.00</del></p>
                            <p>L70.00</p>
                            <button onclick="addToCart('Pasta Jasmin', 70.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pasta4.jpg" class="card-img-top" alt="Pasta Menta y Canela">
                    <div class="card-body">
                        <h5 class="card-title">Pasta Menta y Canela</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L100.00</del></p>
                            <p>L70.00</p>
                            <button onclick="addToCart('Pasta Menta y Canela', 70.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pasta5.jpg" class="card-img-top" alt="Pasta Regaliz Amareli">
                    <div class="card-body">
                        <h5 class="card-title">Pasta Regaliz Amareli</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L100.00</del></p>
                            <p>L70.00</p>
                            <button onclick="addToCart('Pasta Regaliz Amareli', 70.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="./imagenes/pasta6.jpg" class="card-img-top" alt="Pasta Menta y Jengibre">
                    <div class="card-body">
                        <h5 class="card-title">Pasta Menta y Jengibre</h5>
                        <div class="precio">
                            <p class="text-muted"><del>L100.00</del></p>
                            <p>L70.00</p>
                            <button onclick="addToCart('Pasta Menta y Jengibre', 70.00)" class="btn btn-primary">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>

            <p><br><br></p>

            <!-- Flecha izquierda -->
            <div class="navigation-arrows arrow-left">
                <a href="./shampoo.php" class="arrow-left">
                    &#x2039; <!-- Unicode para la flecha izquierda -->
                </a>
            </div>

            <!-- Flecha derecha -->
            <div class="navigation-arrows arrow-right">
                <a href="./jabon.php" class="arrow-right">
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