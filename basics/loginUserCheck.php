<?php
include("./connection.php");
// $a =2 ;





        if (isset($_POST['submit'])) {
            // echo " Form Submit";

            $name = $_POST['name'];
            $password = $_POST['password'];


            $sql = 'SELECT * FROM `user` WHERE `Name` = "'.$name.'" AND `Password` = "'.$password.'"';
            // echo $sql;
            $result = mysqli_query($conn,$sql);

            
            if(mysqli_num_rows($result)>0){
                header("Location: http://localhost/login/basics/uploadProducts.php");
                echo '<script>alert("Login  successfully")</script>';


            }else{
                
                echo 'Kindly register youself then login ';
                header("Location: http://localhost/login/basics/loginUser.php");
            }

            

           


        }