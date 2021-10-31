<?php
    include_once("header.php");
?>

<hr>
<br>

<div class="section-title">
    <h2>Order Summary</h2>
</div>

<div class="orderSum-main">
    <div class="orderAdd">
        <h2>Manage Address</h2>
        <div class="address" style="float: left">
            <input type="radio" id="conAdd" name="conAdd">
            <div class="addName" id='addName0'>May</div>
            <div class="addPhone" id='addPhone0'>87654321</div>
            <div class="addDetail" id='addDetail0'>20 Nanyang Avenue 654876</div>
        </div>
        <button id="changeAddress">Change</button>
    </div>

    <div class="orderItems">
        <div class="items" id="item1">
            <input type="radio" class="selectItem" id="selectItem1" name="selectItem1">
            <img class="itemImg" src="picture/prod-110.jpg">
            <div class="itemName" id="itemName1" name="itemName1">Table Stand</div>
            <div class="itemPrice" id="itemPrice1" name="itemPrice1">$60</div>
            <input type="number" class="itemQty" id="itemQty1" name="itemQty1">
        </div>
    </div>

    <div class="orderSummary">
        <div class="summary" id="sum" name="sum">
            <h3>Total: </h3>
            <button class="editOrder" id="delete" name="delete">Delete</button>
            <button class="editOrder" id="proceed" name="proceed">Add to cart</button>
        </div>
    </div>
</div>

<?php
    include_once("footer.php");
?>