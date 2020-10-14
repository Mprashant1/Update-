<?php
    include "config.php";
    if(isset($_POST['submit'])){
        $name=isset($_POST['name'])?$_POST['name']:"";
        $price=isset($_POST['price'])?$_POST['price']:"";
        move_uploaded_file($_FILES['image']['tmp_name'],"resources/images/".$_FILES['image']['name']);
        $img=$_FILES['image']['name'];
        $dis=$_POST['textfield'];
        $tag=implode(',',$_POST['tag']);
        $cat=$_POST['category'];
        $sql = "INSERT INTO products (`name`, `price`, `image`,`tag`,`category`,`discription`)
        VALUES ('$name', '$price', '$img','$tag','$cat','$dis')";

        if ($c->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $c->error;
        }

        $c->close();
    }
?>