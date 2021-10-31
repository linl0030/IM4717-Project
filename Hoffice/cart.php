<?php
	include_once("header.php");
?>
<hr>
<br>

<div class="section-title">
    <h2>Shopping cart</h2>
</div>

<form action="processorder.php" method="post" class="cart-page">
    <div class="cart-items ">
        <table>
            <tr>
                <th> Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="item-info">
                        <img src="picture/prod-110.jpg" alt="">
                        <div>
                            <p>Product Name</p>
                            <small>Price</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="item-info">
                        <img src="picture/prod-110.jpg" alt="">
                        <div>
                            <p>Product Name</p>
                            <small>Price</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="item-info">
                        <img src="picture/prod-110.jpg" alt="">
                        <div>
                            <p>Product Name</p>
                            <small>Price</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="item-info">
                        <img src="picture/prod-110.jpg" alt="">
                        <div>
                            <p>Product Name</p>
                            <small>Price</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="item-info">
                        <img src="picture/prod-110.jpg" alt="">
                        <div>
                            <p>Product Name</p>
                            <small>Price</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
        </table>
    </div>


    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$200.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$200.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$200.00</td>
            </tr>

        </table>
    </div>

    <div class="order-botton">
        <a class="btn-submit"> Order </a>
    </div>
</form>    

<?php
	include_once("footer.php");
?>