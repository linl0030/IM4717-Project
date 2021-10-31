<?php
session_start();

if (!isset($_SESSION['itemList'])) {
    $_SESSION['itemList'] = array();
}
if (!isset($_SESSION['qty'])) {
    $_SESSION['qty'] = array();
}
$founded = false;
if(isset($_POST['addCartProd']) && isset($_POST['addCartQty'])){
    for($i = 0; $i < count($_SESSION['itemList']); $i++){
        if($_SESSION['itemList'][$i] == $_POST['addCartProd']){
            $_SESSION['qty'][$i] += $_POST['addCartQty'];
            $founded = true;
            break;
        }
    }
    if(!$founded) {
    $_SESSION['itemList'][] = $_POST['addCartProd'];
    $_SESSION['qty'][] = $_POST['addCartQty'];
    }
}

if(isset($_POST['remove'])){
    \array_splice($_SESSION['itemList'], $_POST['remove'], 1);
    \array_splice($_SESSION['qty'], $_POST['remove'], 1);
}

header('Location:cart.php');
//unset($_SESSION['itemList']);
//unset($_SESSION['qty']);
?>
