<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./view/public/css/custom.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/ss.css">


</head>

<body>

    <?php include 'inc/header.php'; ?>
    <?php include 'inc/banner.php'; ?>




    <!-- category section starts  -->


    <section class="category" id="category">

        <h1 class="heading"> shop by category </h1>

        <div class="box-container">
            <?php $product_list = get_all_products() ?>
            <?php foreach ($product_list as $product) { ?>

                <div class="box">
                    <a href="product-detail.php?id=<?php echo $product['id']; ?>">
                        <img class="card-img-top" src="<?php echo $product['img']; ?>" alt="Product">
                    </a>

                    <div class="content">
                        <h3><?php echo $product['name']; ?></h3>

                        <a href="#" class="btn" style=" margin-bottom:4rem;">shop now</a>
                    </div>
                </div>
            <?php } ?>


        </div>

    </section>

    <!-- category section ends -->

    <!-- product section starts  -->

    <section class="product" id="product">

        <h1 class="heading"> new products </h1>

        <div class="box-container">
            <?php $product_list = get_all_products() ?>
            <?php foreach ($product_list as $product) { ?>


                <form action="cart.php" method="post" class="box">
                    <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="action" value="create">
                    <span class="discount">-10%</span>

                    <a href="product_detail.php?id=<?php echo $product['id']; ?>">
                        <img class="card-img-top" height="40px; width:30px;" src="<?php echo $product['img']; ?>" alt="Product">
                    </a>
                    <h3>OrangesFood</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>

                    </div>
                    <div class="quantity">
                        <span> quantity : </span>
                        <input name="quantity" type="number" min="1" max="100" value="1">
                    </div>
                    <div class="price">$<?php echo $product['price'] ?> <span>$<?php echo $product['price'] ?></span></div>
                    <button type="submit" class="btn" style=" border-radius: 10px;padding: 5px; background:var(--black);color:#FFFFFF;width:200px;font-family: 'FontAwesome'; ">ADD TO CART </button>
                </form>
            <?php } ?>


        </div>

    </section>




    <!-- category section ends -->

    <!-- footer section starts  -->

    <?php include 'inc/footer.php'; ?>

    <!-- footer section ends -->

























    <!-- custom js file link  -->
    <!-- <script src="js/script.js"></script> -->

</body>

</html>