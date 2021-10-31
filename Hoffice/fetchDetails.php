<?php
include('connect.php');
$src = 0;
if(isset($_POST['imgSrc'])){
    $src = $_POST['imgSrc'];
}elseif(isset($_POST['color'])){
    $src = $_POST['color'];
}
$query = "SELECT *
	FROM f32ee.product
	INNER JOIN image ON f32ee.product.p_id=f32ee.image.p_id
	WHERE f32ee.image.img_dir = '" . $src . "'";
//    $query="SELECT * from f32ee.product"
$result = $conn->query($query);
$row = $result->fetch_assoc();
function get_img($row){
    return $row["img_dir"];
}
function get_name($row){
    return $row["p_name"];
}
function get_shtDes($row){
    return $row["p_sht_desc"];
}
function get_price($row){
    echo "$";
    return $row["p_price"];
}
function get_lngDes($row){
    return $row["p_lng_desc"];
}
// display number of colors
$pID = substr($src, -7, 2 );
$query1 = "SELECT *
	FROM f32ee.product
	INNER JOIN image ON f32ee.product.p_id=f32ee.image.p_id
	WHERE f32ee.product.p_id = '" . $pID . "'";
$result1 = $conn->query($query1);
$row1 = $result1->fetch_assoc();
$various_prod = $result1->num_rows;
$various_prod -= 1;

function numberOfVariation($various_prod){
    return $various_prod;
}

//current category
$cat = substr($src,-7, 1);
$cat_query = "SELECT f32ee.product.p_id, f32ee.product.p_name, f32ee.product.p_price, f32ee.product.p_sht_desc, f32ee.image.img_id,f32ee.image.img_dir 
	FROM f32ee.product
	INNER JOIN image ON f32ee.product.p_id=f32ee.image.p_id
	WHERE f32ee.image.img_id like '".$cat."%0'";
$cat_result = $conn->query($cat_query);
$num_result = $cat_result->num_rows;
?>