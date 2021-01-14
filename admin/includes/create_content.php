<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
            Create <small>Products</small> <a href="products.php" class="btn btn-success pull-right">Back</a>
        </h2>
        <ol class="breadcrumb">
            <?php require_once "process.php" ?>
            <div class="container-fluid"></div>
            <div class="row justify-content-center">
                <form action="process.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Product name: </label>
                        <input type="text" class="form-control" name="pname">
                    </div>
                    <div class="form-group">
                        <label>Product quantity: </label>
                        <input type="number" class="form-control" name="quantity">
                    </div>
                    <div class="form-group">
                        <label>Price: </label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label>Sell Price: </label>
                        <input type="number" class="form-control" name="sell_price">
                    </div>
                    <div class="form-group">
                        <label>Image: </label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="Submit">Submit</button>

                    </div>


                </form>
            </div>
    </div>

    </ol>
</div>
</div>