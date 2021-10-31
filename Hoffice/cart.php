<?php
include('connect.php');
?>


<?php
include_once("header.php");

?>
    <link rel="stylesheet" href="css/cart.css">
    <hr>
    <br>

    <div class="section-title">
        <h2>Shopping cart</h2>
    </div>

    <form id="processorder" action="processorder.php" method="post" class="cart-page">
        <div class="cart-items ">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <?php
                for ($i = 0; $i < count($_SESSION['itemList']); $i++) {
                    $curSrc = $_SESSION['itemList'][$i];
                    $query = "SELECT *
                        FROM f32ee.product
	                    INNER JOIN image ON f32ee.product.p_id=f32ee.image.p_id
	                    WHERE f32ee.image.img_dir = '" . $curSrc . "'";
                    $result = $conn->query($query);
                    $row = $result->fetch_assoc();
                    ?>
                    <tr>
                        <td>
                            <div class="item-info">
                                <img src="<?php echo $row['img_dir']; ?>" alt="">
                                <div>
                                    <p><?php echo $row['p_name']; ?></p>
                                    <small id="unitPrice<?php echo $i ?>">$<?php echo $row['p_price']; ?></small>
                                    <br>
                                    <a onclick="removeItem(<?php echo $i; ?>)">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" class="curQty" id="curQty<?php echo $i ?>" min="1"
                                   value="<?php echo $_SESSION['qty'][$i] ?>" onclick="update(<?php echo $i ?>)"></td>
                        <td class="subtotalPrice" id="subPrice<?php echo $i ?>">
                            $<?php echo $row['p_price'] * $_SESSION['qty'][$i]; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>


        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td id="subtotal">
                        <script>
                            var subtotal = 0;
                            const listProd = document.getElementsByClassName("subtotalPrice");
                            for (var i = 0; i < listProd.length; i++) {
                                subtotal += parseInt(listProd[i].innerHTML.split("$")[1], 10);
                            }
                            document.getElementById("subtotal").innerHTML = "$" + parseFloat(subtotal).toFixed(2);
                        </script>
                    </td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td id="tax">
                        <script>
                            var taxRate = 0.07;
                            var tax = subtotal * taxRate;
                            document.getElementById("tax").innerHTML = "$" + parseFloat(tax).toFixed(2);
                        </script>
                    </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="total">
                        <script>
                            document.getElementById("total").innerHTML = "$" + parseFloat(tax + subtotal).toFixed(2);
                        </script>
                    </td>
                </tr>

            </table>
        </div>
        <div class="order-botton">
            <a class="btn-submit" onclick="proceed2Summary()"> Order </a>
        </div>
    </form>
    <form id="submitOrder" action="orderSummary.php" method="post">
        <input type="hidden" id="total" name="total" value="">
        <?php
        for ($i = 0; $i < count($_SESSION['itemList']); $i++) {
        ?>
        <input type="hidden" id="order<?php echo $i ?>" name="order<?php echo $i ?>" value="">
            <?php
        }
        ?>
    </form>
    <form id="removeItem" action="prod2cart.php" method="post">
        <input type="hidden" id="remove" name="remove" value="">
    </form>
    <script>
        function update($id) {
            const qty = document.getElementById("curQty" + $id).value;
            const price = document.getElementById("unitPrice" + $id).innerHTML.split("$")[1];
            var subtotal = qty * price;
            document.getElementById("subPrice" + $id).innerHTML = "$" + parseFloat(subtotal).toFixed(1);

            const sum_subtotal = document.getElementsByClassName("subtotalPrice");
            var sumUpSubTotal = 0;
            for (var i = 0; i < sum_subtotal.length; i++) {
                sumUpSubTotal += parseInt(sum_subtotal[i].innerHTML.split("$")[1], 10);
            }
            document.getElementById("subtotal").innerHTML = "$" + sumUpSubTotal;

            const taxRate = 0.07;
            document.getElementById("tax").innerHTML = "$" + parseFloat(sumUpSubTotal * taxRate).toFixed(2);

            document.getElementById("total").innerHTML = "$" + parseFloat(sumUpSubTotal * taxRate + sumUpSubTotal).toFixed(2);
        }

        function proceed2Summary() {
            const total = document.getElementsByClassName("curQty");
        // .innerHTML.split("$")[1]
            for(var i = 0; i < total.length; i++){
                document.getElementById("order"+ i).setAttribute("value", total[i].value);
                console.log(document.getElementById("order"+ i).value);
            }
            document.getElementById("total").setAttribute("value", document.getElementById("total").innerHTML.split("$")[1])
            // console.log(document.getElementById("submitOrder"));
            document.getElementById("submitOrder").submit();
        }

        function removeItem(curId){
            document.getElementById("remove").setAttribute("value", curId);
            document.getElementById("removeItem").submit();
        }
    </script>
<?php
include_once("footer.php");
?>