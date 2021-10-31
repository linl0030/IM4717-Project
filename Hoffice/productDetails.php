<?php
include_once('fetchDetails.php');
include_once('connect.php');
$query = "SELECT f32ee.product.p_id, f32ee.product.p_name, f32ee.product.p_price, f32ee.product.p_sht_desc, f32ee.image.img_id,f32ee.image.img_dir 
	FROM f32ee.product
	INNER JOIN image ON f32ee.product.p_id=f32ee.image.p_id
	WHERE f32ee.image.img_id like '1%0'";
// $query="SELECT * from f32ee.product";
//$result = $conn->query($query);
//$num_result = $result->num_rows;
?>
<?php
include_once("header.php");
?>
<link rel="stylesheet" href="css/product-details.css">

<hr>
<br>

<div class="detail-main">
    <div class="detail-grid">
        <table>
            <tr>
                <td>
                    <img id="mainImg" src=<?php echo get_img($row); ?>>
                </td>
            </tr>

        </table>
    </div>
    <form id="changeColor" action="productDetails.php" method="post">
        <input type="hidden" id="color" name="color" value="">
    </form>
    <div class="detail-description">
        <h2><?php echo get_name($row); ?><br><?php echo get_price($row); ?></h2>
        <h5><?php echo get_shtDes($row); ?></h5>
        <hr/>
        <table>
            <tr>
                <?php
                for ($i = 0;
                $i < numberOfVariation($various_prod);
                $i++) {
                ?>
                <td>
                    <button class="choice-btn" onclick="changeColor(<?php echo($i + 1) ?>)">
                        Color <?php echo($i + 1) ?></button>
                <td>
                    <?php
                    }
                    ?>
                    <!--                <td>-->
                    <!--                    <button class="choice-btn">Color 2</button>-->
                    <!--                </td>-->
                    <!--                <td>-->
                    <!--                    <button class="choice-btn">Color 3</button>-->
                    <!--                </td>-->
            </tr>
        </table>
        <hr/>
        <input type="number" id="quantity" min="1"></input>
        <button class="add2Cart-btn">Add to cart</button>
    </div>
</div>

<div class="content">
    <h2>Product Details</h2>
    <p><?php echo get_lngDes($row); ?></p>
</div>
<form id="submit" action="productDetails.php" method="post">
    <input type="hidden" id="imgSrc" name="imgSrc" value="">
</form>
<div class="content">
    <h2>Similar Products</h2>
    <div class="similar-grid">
        <table>
            <tr>
                <?php
                for ($i = 0; $i < $num_result; $i++) {
                $row = $cat_result->fetch_assoc();
                ?>
                <td onclick="submit(this)">
                    <img class="product-img" src="<?php echo $row['img_dir']; ?>">
                    <!--                    <h4>--><?php //echo $row['p_name']; ?><!--</h4>-->
                    <!--                    <small>--><?php //echo $row['p_sht_desc']; ?><!--</small>-->
                    <!--                    <h4>$--><?php //echo $row['p_price']; ?><!--</h4>-->
                <td>
                    <?php
                    }
                    ?>
            </tr>
        </table>
    </div>
</div>

<div class="content">
    <h2>Best Sellers</h2>
    <div class="similar-grid">
        <table>
            <tr>
                <td onclick="submit(this)">
                    <img class="product-img" src="picture/prod-110.jpg">
                </td>
                <td onclick="submit(this)">
                    <img class="product-img" src="picture/prod-130.jpg">
                </td>
                <td onclick="submit(this)">
                    <img class="product-img" src="picture/prod-210.jpg">
                </td>
                <td onclick="submit(this)">
                    <img class="product-img" src="picture/prod-410.jpg">
                </td>
            </tr>
        </table>
    </div>
</div>

<?php
include_once("footer.php");
?>

</body>
</html>