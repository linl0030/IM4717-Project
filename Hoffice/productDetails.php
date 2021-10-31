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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=“utf-8”>
    <title><?php echo get_name($row); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/product-details.css">
    <script type="text/javascript" src="js/mainSlide.js"></script>
    <script type="text/javascript" src="js/openDetail.js"></script>
</head>
<body>
<body>

<div class="header">
    <div class="inner-header">

        <div class="logo-container">
            <h1><a href="index.html">HO<span>FFICE</span></a></h1>
        </div>

        <div class="nav-bar">
            <ul class="navigation">
                <a href="furniture.html">
                    <li>Furniture</li>
                </a>
                <a href="home-electronics.html">
                    <li>Home Electronics</li>
                </a>
                <a href="lightening.html">
                    <li>Lightening</li>
                </a>
                <a href="organizer.html">
                    <li>Organizer</li>
                </a>
                <a href="storage.html">
                    <li>Storage</li>
                </a>
                <a href="stationary.html">
                    <li>Stationary</li>
                </a>
                <a href="aboutus.html">
                    <li>About Us</li>
                </a>

            </ul>
            <div class="nav-user-center">
                <a href="login_signup.php"><img class="icon" src="picture/user.png"></a>
                <a href=""><img class="icon" src="picture/online-shopping.png"></a>
                <a href=""><img class="icon" src="picture/search.png"></a>
            </div>
        </div>
    </div>

</div>


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

<footer>
    <small><i>Copyright &copy; HOFFICE 2021<br>
            <a href="mailto:lixian@lin.com">lixian@lin.com</a>
        </i></small>
</footer>

</body>
</html>