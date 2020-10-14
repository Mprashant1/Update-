<?php
    include "config.php";
    $id=$_POST['pid'];
    print_r($id) ;
    $sql = "DELETE FROM products WHERE product_id='.msg[$id].'";
    if ($c->query($sql) === TRUE) {
    return "Record deleted successfully";
    } else {
    return "Error deleting record: " . $c->error;
    }

    $c->close();
?>