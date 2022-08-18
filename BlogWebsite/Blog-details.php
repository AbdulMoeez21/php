<!-- https://codepen.io/loracsilva/pen/ZrRYVL -->
<?php
include('./includes/Header.php');
?>


<?php

include("./database/connection.php");

$sql = 'SELECT * FROM `Blog` where id = ' . $_GET['id'] . '';
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result)


?>


<!-- navbar -->

<!-- slider -->



<!-- cards -->

<div class="container">
    <div class="row d-flex flex-row mt-5">

        <img src="./assets/Blog_Images/<?php echo  $row['blog_img'] ?>" class="card-img-top" alt="...">

        <div class="my-5 row">

            <div class="col-8">
                <h1 class="text-dark my-2"><?php echo  $row['title'] ?></h1>

                <p class="text-dark my-3"><?php echo  $row['long_desc'] ?></p>

            </div>

            <div class="px-4 col-4">


                <?php

                include("./database/connection.php");

                $sql = 'SELECT * FROM `Blog` order by posted_date desc limit 5';
                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result);

                while ($row = mysqli_fetch_assoc($result)) {

                    // echo var_dump($row) ;


                ?>

                    <div class="col-12 my-5">
                    
                                <h5 class="text-primary" style="font-size:14px"><?php echo  $row['title'] ?></h5>
                              
                                <a href="Blog-details.php?id=<?php echo  $row['id'] ?>" style="font-size:13px" class="text-dark ">Read More</a>
                            
                    </div>


                <?php


                }




                ?>

            </div>
        </div>


    </div>
</div>

<?php
include('./includes/Footer.php');
?>