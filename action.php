<?php

        $conn = mysqli_connect("localhost", "root", "", "table1");
        
         
        
         
        $address_line_1 =  $_POST['address_line_1'];
        $address_line_2 = $_POST['address_line_2'];
        $city =  $_POST['city'];
        $state = $_POST['state'];
        $zip_code =$_POST['zip_code'];

        
         $sql = "INSERT INTO `table1`(`address1`, `address2`, `city`, `state`, `zip_code`) VALUES ('$address_line_1','$address_line_2','$city','$state','$zip_code')";
       
        $result = mysqli_query($conn,$sql);
        


        if($sql){
            echo "done";
        }
        else {
            echo "false";
        }
    
         
        // Close connection
        mysqli_close($conn);
        ?>