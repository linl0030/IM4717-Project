<?php
include('connect.php');
?>

<?php
include_once("header.php");
?>
    <link rel="stylesheet" href="css/orderHistory.css">
    <link rel="stylesheet" href="css/orderSummary.css">
    <link rel="stylesheet" href="css/settings.css">
    <hr>
    <br>

    <div class="section-title">
        <h2>Order Summary</h2>
    </div>

    <div class="orderSum-main">
    <div class="orderAdd">
        <h2>Address</h2>
        <div class="address" style="float: left">
            <input type="radio" id="conAdd" name="conAdd">
            <div class="addName" id='addName0'>May</div>
            <div class="addPhone" id='addPhone0'>87654321</div>
            <div class="addDetail" id='addDetail0'>20 Nanyang Avenue 654876</div>
        </div>
        <button id="changeAddress" onclick="editAdd()">Change</button>
    </div>

    <div class="orderItems">
    <?php
    for ($i = 0; $i < count($_SESSION['itemList']); $i++) {
        $_SESSION['qty'][$i] = $_POST["order" . $i];
        $curSrc = $_SESSION['itemList'][$i];
        $query = "SELECT *
            FROM f32ee.product
	        INNER JOIN image ON f32ee.product.p_id=f32ee.image.p_id
	        WHERE f32ee.image.img_dir = '" . $curSrc . "'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
    ?>
    <div class="items" id="item<?php echo $i ?>">
<!--        <input type="radio" class="selectItem" id="selectItem1" name="selectItem1">-->
        <img class="itemImg" src="<?php echo $row['img_dir']; ?>">
        <div class="itemName" id="itemName<?php echo $i ?>" name="itemName1"><?php echo $row['p_name']; ?></div>
        <div class="itemPrice" id="itemPrice<?php echo $i ?>" name="itemPrice1">$<?php echo $row['p_price'] * $_SESSION['qty'][$i]; ?></div>
        <input type="number" class="itemQty" id="itemQty<?php echo $i ?>" name="itemQty1" readonly value="<?php echo $_SESSION['qty'][$i] ?>">
    </div>
        <?php
    }
    ?>
    </div>

    <div class="orderSummary">
        <div class="summary" id="sum" name="sum">
            <h3 id = "total"><script>
                    var  total = 0;
                    const prodSummary = document.getElementsByClassName("items");
                    for(var i = 0; i < prodSummary.length; i++){
                        total += parseInt(prodSummary[i].innerHTML.split("$")[1], 10);
                    }
                    document.getElementById("total").innerHTML = "Total:  $" + parseFloat(total * (1 + 0.07)).toFixed(2) + "(" + parseFloat(total).toFixed(2)
                        + " + " + parseFloat(total * 0.07).toFixed(2) + ")";
                </script></h3>
            <button class="editOrder" id="edit" name="edit" onclick="history.back()">Edit</button>
            <button class="editOrder" id="proceed" name="proceed" onclick="proceed()">Proceed</button>
        </div>
    </div>
    </div>
    <form id="clearCart" action="clearCart.php" method="post">
    </form>

    <?php
    include_once("footer.php");
    ?>