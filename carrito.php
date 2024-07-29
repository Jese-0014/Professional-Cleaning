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
        <h3>Carrito de Compras</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <!-- Los elementos del carrito se añadirán aquí con JavaScript -->
            </tbody>
        </table>
        <h4>Total: <span id="total-price">L0.00</span></h4>
        <button class="btn btn-success" onclick="proceedTocarrito()">Comprar</button>
        <button class="btn btn-danger" onclick="emptyCart()">Vaciar carrito</button>
    </div>

    <script>
        function loadCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartItems = document.getElementById('cart-items');
            let totalPrice = 0;
            
            cartItems.innerHTML = '';
            
            cart.forEach(item => {
                let row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>L${item.price.toFixed(2)}</td>
                    <td>${item.quantity}</td>
                    <td>L${(item.price * item.quantity).toFixed(2)}</td>
                `;
                cartItems.appendChild(row);
                totalPrice += item.price * item.quantity;
            });
            
            document.getElementById('total-price').innerText = `L${totalPrice.toFixed(2)}`;
        }
        
        function proceedToCheckout() {
            // Redirige al usuario a una página de pago o procesamiento
            window.location.href = './checkout.php'; // Cambia esto según tu estructura de URLs
        }

        function emptyCart() {
            // Elimina el carrito del localStorage
            localStorage.removeItem('cart');
            // Recarga la vista del carrito para reflejar que está vacío
            loadCart();
        }
        
        window.onload = loadCart;
    </script>

</body>

</html>