<?php require_once "dbconfig.php" ?>
<div class="container-fluid">
    <!-- <div class="col-lg-12"> -->
    <h1 class="page-header">
        Purchase <a href="products.php" class="btn btn-success pull-right">Back</a>
    </h1>
    <!-- <ol class="breadcrumb"> -->
    <div class="content-wrapper">
        <form id="form_tbll" method="post">
            <section class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity </th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody class="init_data">
                                <?php
                                while ($row = $result->fetch_assoc()) :
                                ?>
                                    <tr id="left_tbl">
                                        <td><?php echo $row['id']; ?></td>
                                        <td id="name_<?php echo $row['id']; ?>"><?php echo $row['name']; ?></td>
                                        <td id="sell_price_<?php echo $row['id']; ?>"><?php echo $row['sell_price']; ?></td>
                                        <td id="quantity_<?php echo $row['id']; ?>"><?php echo $row['quantity']; ?></td>
                                        <td>
                                            <a data-id="<?php echo $row['id']; ?>" class="add_btn btn btn-info">buy</a>
                                        </td>
                                    </tr>
                            </tbody>
                        <?php endwhile; ?>
                        </table>
                    </div>



                    <!-- SECOND TABLE TO APEND -->
                    <div class="col-lg-6" id="invoice">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity </th>
                                    <th>total</th>

                                </tr>
                            </thead>
                            <tbody id="right_tbl">

                            </tbody>
                        </table>

                    </div>
                </div>

            </section>
        </form>
    </div>

</div>

<table style="display: none;">
        <tbody id="right_div">
            <tr class="right_row">
                <td class="idt"></td>
                <td class="name"></td>
                <td class="sell_price"></td>
                <td><input type='number' name="quantity" class="quantity" id="sel_quantity" value="0"></td>
                <td><input class="total" name="ind_total" value="0" readonly></td>
            
                <!-- <td><button class="btn btn-danger remove_btn"><i class="fa fa-fw fa-minus"></i> Remove Item</button></td> -->
            </tr>
        </tbody>
    </table>
<script>


    $('.add_btn').on('click', function() {
        var id = $(this).attr('data-id');
        console.log(id);
        $('#right_div').find('.right_row').attr('id', 'right_row_' + id);
        $('#right_div').find('.idt').html(id);
        
        var name = $('#name_' + id).html();
        $('#right_div').find('.name').html(name);

        var sell_price = $("#sell_price_" + id).html();
        $('#right_div').find(".sell_price").html(parseInt(sell_price));

        $('#right_div').find('.quantity').attr('id', 'quantity_' + id);
        // $('#right_div').find('#id_hid').val($id);
        $('#right_div').find('.quantity').attr('data-id', id);

        
        $('#right_div').find('.total').attr('id', 'total_' + id);




        $('#right_tbl').append($('#right_div').html());

    });



    $('#right_tbl').on('change keyup', '.quantity', function () {
    var quantity = this.value;
    console.log(quantity);
    var id = $(this).attr('data-id');
    
    console.log(id);
    let sell_price = $("#sell_price_" + id).html();
    console.log(sell_price);

    
    var new_total = parseInt((sell_price)) * quantity;
    console.log(new_total);
     $('#total_'+id).val(new_total);
    });

</script>