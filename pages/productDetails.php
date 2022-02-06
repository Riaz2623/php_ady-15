<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class=" col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">All Products Details</div>
                    <div class="card-body">

                        <form action="product.php" method="Post">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" name="search"/>
                                <div class="input-group-append">
                                    <button type="submit" name="search_button" class="btn btn-outline-success">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>description</th>
                                <th>category</th>
                                <th>brand</th>
                                <th>price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product) { ?>
                                <tr>
                                    <td><?php echo $product['name'];?></td>
                                    <td><?php echo $product['description'];?></td>
                                    <td><?php echo $product['category'];?></td>
                                    <td><?php echo $product['brand'];?></td>
                                    <td><?php echo $product['price'];?></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<?php include 'footer.php';?>

