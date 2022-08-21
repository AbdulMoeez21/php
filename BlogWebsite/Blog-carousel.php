<div class="row d-flex flex-row">


    <?php

    include("./database/connection.php");

    $sql = 'SELECT * FROM `Blog`';
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
  
    while ($row = mysqli_fetch_assoc($result)) {

      // echo var_dump($row) ;
      

    ?>

      <div class="col-12 col-md-6 col-xl-4 ">
        <div class="card m-5">
          <img src="./uploads/Blogs/<?php echo  $row['blog_img'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo  $row['title'] ?></h5>
            <p class="card-text"><?php echo  $row['short_desc'] ?></p>
            <a href="Blog-details.php?id=<?php echo  $row['id'] ?>" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>


    <?php


    }




    ?>





  </div>