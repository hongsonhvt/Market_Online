<?php
    require_once("include/conn.php");
    session_start();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';

    $quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;

    if($quantity <= 0){
        $quantity = 1;
    }
    $query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE productID = '$id'");

    if($query){  
        $product = mysqli_fetch_assoc($query);
    }

    $item = [
        'id'=> $product['productID'],
        'name'=> $product['productName'],
        'price'=> $product['productPrice'],
        'quantity'=> $quantity
    ];

    if($action == 'add'){
        if($_SESSION['cart'][$id]){
            $_SESSION['cart'][$id]['quantity'] += $quantity;
        } else{
            $_SESSION['cart'][$id] = $item;
        }
    }

    if($action == 'update'){
        $_SESSION['cart'][$id]['quantity'] = $quantity;
    }

    if($action == 'delete'){
        unset($_SESSION['cart'][$id]);
    }
  
    header('location:cart.php');
    echo "<pre>";
    print_r($_SESSION['cart']);

    //Add new product to cart

    //Update cart

    //Delete product in cart

?>