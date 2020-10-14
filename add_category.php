<?php
    include "config.php";
    if(isset($_POST['submit'])){
        $val=$_POST['id'];
        $sql = "SELECT * FROM category where `name`='$val'";
		$output = $c->query($sql);
		if ($output->num_rows > 0) {
			echo("Product tag with this name exist already!!!");
		} else {
                $in = "INSERT INTO tag (`name`)
                VALUES ('$val')";
                if ($c->query($in) === TRUE) {
                echo "New record created successfully";
                } else {
                echo "Error: " . $in . "<br>" . $c->error;
                }
             }
        
        $c->close();
    }
?>