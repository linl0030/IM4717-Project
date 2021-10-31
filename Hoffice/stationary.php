<?php
include_once('connect.php');
$query = "SELECT f32ee.product.p_id, f32ee.product.p_name, f32ee.product.p_price, f32ee.product.p_sht_desc, f32ee.image.img_id,f32ee.image.img_dir 
	FROM f32ee.product
	INNER JOIN image ON f32ee.product.p_id=f32ee.image.p_id
	WHERE f32ee.image.img_id like '6%0'";
$result = $conn->query($query);
$num_result = $result->num_rows;
?>

<?php
include_once("header.php");
?>

<hr>
<br>
<!-- Category Listing -->

<div class="section-title">
    <h2> Stationary</h2>
</div>
<form id="submit" action="productDetails.php" method="post">
    <input type="hidden" id="imgSrc" name="imgSrc" value="">
</form>
<div class="products">
    <div class="row">

        <?php
        for ($i = 0; $i < $num_result; $i++) {
            $row = $result->fetch_assoc();
            ?>
            <div class="col-4" onclick="submit(this)">
                    <img class="product-img" src="<?php echo $row['img_dir']; ?>">
                    <h4><?php echo $row['p_name']; ?></h4>
                    <small><?php echo $row['p_sht_desc']; ?></small>
                    <h4>$<?php echo $row['p_price']; ?></h4>

                </a>
            </div>
            <?php
        }
        ?>

    </div>

</div>

<br>
<br>
<br>

<?php
include_once("footer.php");
?>

</body>
</html>
