<?php
session_start();
include_once("../database/connection.php");

if (isset($_POST['submit'])) {


    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Address = mysqli_real_escape_string($conn, $_POST['Address']);
    $Number = $_POST['Number'];



   

           


            $sql = 'INSERT INTO `team_table`(`Name`, `Email`, `Address`, `Number`)
             VALUES ("' . $Name . '","' . $Email . '","' . $Address . '","'. $Number .'")';
            $result = mysqli_query($conn, $sql);

            // echo $sql;
            if ($result) {

                echo "<script>alert('Form Submit Successfully');window.location.replace('create-team.php');  </script>";



            } else {
                echo "<script>alert('No');</script>";
            }
        } else {
            // echo "<script>alert('Sorry, there was an error upload your png or jpg.');</script>";
            echo "
        <body style='background-image: linear-gradient(60deg, #523fff 0%, #2FB5D2 100%);'></body><h1 style='position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); color: white; font-size: 45px; font-family: poppins; text-align: center;'><img src='assets/images/taslive.svg' style='text-align:center; width: 220px;'> <br> Sorry <br> <span style='font-size: 18px; font-weight: 200;'>Only png and jpg Image Format.</span> <br> <button onclick='history.back()' style='background-color: black; color: white; padding: 7px; padding-left: 20px; padding-right: 20px; border-radius: 6px; margin-top: 15px; cursor: pointer; font-family: poppins;'>Go Back</button></h1>";
        }
    