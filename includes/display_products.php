        <!-- Blog Search Well -->


        <!-- Blog Categories Well -->
        <div class="well">
            <h4>Products</h4>
            <div class="row">
                <div class="col-lg-12">
                <?php require_once "admin/dbconfig.php" ?>


                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Price</th>
                                        <th>Photo</th>
                                        <th colspan="2">Action</th>

                                    </tr>
                                </thead>
                                <?php
                                while ($row = $result->fetch_assoc()) :
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><img height="50px" src='admin/images/<?php echo $row['image'];  ?>'></td>
                                        <td>
                                            <a href="edit.php?edit=<?php// echo $row['id']; ?>" class=" btn btn-info">add</a>
                                            <a href="process.php?delete=<?php //echo $row['id']; ?>" class=" btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>











                </div>
            </div>
        </div>

        </div>