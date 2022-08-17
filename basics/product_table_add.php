<?php

include("./header.php");
?>
]<div class="container  mt-5" style="background-color: black; color:aliceblue;">
    <h1 class=" mb-5">Products </h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Date & Time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-light">
            <?php

            include("./connection.php");

            $sql = 'SELECT * FROM `product_table`';
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $sno++;

            ?>
                <tr>
                    <th scope="row"><?php echo  $sno ?></th>
                    <td><?php echo  $row['Name'] ?></td>
                    <td><?php echo  $row['Description'] ?></td>
                    <td><?php echo  $row['Time'] ?></td>
                    <td class="text-center cursor-pointer" style="cursor: pointer;"><i class="fa-solid fa-trash text-danger ml-n5" onclick="deleteUser(<?php echo $row['Id'] ?>) "></i>
                        <a href="./editProduct.php?id=<?php echo  $row['Id']  ?>"> <i class="fa-solid fa-file-pen text-success ml-3 mr-3" style="cursor: pointer;"></i></a>



                    </td>

                </tr>


            <?php


            }




            ?>










        </tbody>
    </table>
    <script>
        const deleteUser = (id) => {
            console.log(id)


            $.ajax({
                url: "./deleteProduct.php",
                type: "post",
                data: {
                    user_id: id
                },
                success: function(response) {

                    // You will get response from your PHP page (what you echo or print)

                    console.log(response)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

            location.reload();
        }
    </script>
</div>
<?php

include("./footer.php");
?>