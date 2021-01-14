<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Products <a href="create.php" class="btn btn-success pull-right">Add New Product</a>
        </h1>


        <ol class="breadcrumb">
            <?php require_once "dbconfig.php" ?>


            <div class="container-fluid">
                <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Sell price</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <?php
                        while ($row = $result->fetch_assoc()) :
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['sell_price']; ?></td>
                                <td><img height="50px" src='images/<?php echo $row['image'];  ?>'></td>
                                <td>
                                    <a href="edit.php?edit=<?php echo $row['id']; ?>" class=" btn btn-info">Edit</a>
                                    <a href="process.php?delete=<?php echo $row['id']; ?>" class=" btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>



        </ol>
    </div>
</div>