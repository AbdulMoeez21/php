<?php
session_start();
include_once("../database/connection.php");

if (isset($_POST['title'])) {


    $Title = $_POST['title'];
    $Short_Description = mysqli_real_escape_string($conn, $_POST['short_desc']);
    $Long_Description = mysqli_real_escape_string($conn, $_POST['long_desc']);
    $Author = $_POST['author'];



    $Image = $_FILES['blog_img'];

    $filename = $Image['name'];

    $filepath = $Image['tmp_name'];
    $fileerror = $Image['error'];
    // img.png
    // echo "$filename";
    $file_ext = explode('.', $filename);
    // print_r($file_ext);

    $file_ext_check = strtolower(end($file_ext));
    // echo $file_ext_check;

    $valid_file_ext = array('png', 'jpg', 'jpeg');

    if ($fileerror == 0) {
        // file extension
        if (in_array($file_ext_check, $valid_file_ext)) {

            $temp = explode(".", $_FILES["blog_img"]["name"]);
            // img_12963821687213782.png

            $newfilename = $temp[0] . '_' . round(microtime(true)) . '.' . end($temp);
            $destfile = '../uploads/Blogs/' . $newfilename;

            move_uploaded_file($filepath, $destfile);
            // File upload done



            // $destfile = 'uploads/' . $filename;

            // move_uploaded_file($filepath, $destfile);



            $sql = 'INSERT INTO `blog`( `title`, `short_desc`, `long_desc`, `category`, `blog_img`, `addedBy`) VALUES ("' . $Title . '","' . $Short_Description . '","' . $Long_Description . '","Computer Science","' . $newfilename . '","Admin")';
            $result = mysqli_query($conn, $sql);

            // echo $sql;
            if ($result) {

                echo "<script>alert('Form Submit Successfully');window.location.replace('create-blog.php');  </script>";



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
    }
} else {
    echo "No Button Click ";
}
