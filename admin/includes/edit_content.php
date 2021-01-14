<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit <small>product details</small> <a href="products.php" class="btn btn-success pull-right">Back</a>
        </h1>
        <ol class="breadcrumb">
        <?php require_once "dbconfig.php" ?>

            <div class="container-fluid"></div>
            <div class="row justify-content-center">
                <form action="process.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Product name: </label>
                        <input type="text" class="form-control" name="pname" value="<?php echo $pname; ?>">
                    </div>
                    <div class="form-group">
                        <label>Product quantity: </label>
                        <input type="number" class="form-control" name="quantity" value="<?php echo $quantity; ?>">
                    </div>
                    <div class="form-group">
                        <label>Price: </label>
                        <input type="number" class="form-control" name="price" value="<?php echo $price; ?>">
                    </div>
                    <div class="form-group">
                        <label>Sell Price: </label>
                        <input type="number" class="form-control" name="sell_price" value="<?php echo $sell_price; ?>">
                    </div>
                    <div class="form-group">
                        <label>Image: </label>
                        <input type="file" class="form-control" name="image" value="<?php echo $image; ?>">
                    </div>
                    <div class="form-group">
                        <?php
                        if ($update == true) : ?>

                            <button type="submit" class="btn btn-info" name="update">Update</button>
                        <?php else : ?>
                            <button type="submit" class="btn btn-dark" name="Submit">Submit</button>
                        <?php endif; ?>
                    </div>


                </form>
            </div>
    </div>


    </ol>
</div>
</div>