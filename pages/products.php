<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image'];?>" alt="" class="card-img-top" height="300"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product['name'];?></h3>
                            <h4><?php echo $product['description'];?></h4>
                            <h5><?php echo $product['category'];?></h5>
                            <h5><?php echo $product['brand'];?></h5>
                            <h4><?php echo $product['price'];?></h4>



                            <hr/>
                            <a href="action,php?pages=productdetails.php" class="btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>
</section>

<?php include 'footer.php';?>

