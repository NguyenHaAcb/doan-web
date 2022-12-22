<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/custom.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/ss.css">


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
   

</head>

<body>
<style>
    /* shop */
.products .box-container {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.products .box-container .box {
  flex: 1 1 30rem;
  box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
  border-radius: .5rem;
  border: .1rem solid rgba(0, 0, 0, .1);
  position: relative;
}

.products .box-container .box .discount {
  position: absolute;
  top: 1rem;
  left: 1rem;
  padding: .7rem 1rem;
  font-size: 2rem;
  color: var(--pink);
  background: rgba(255, 51, 153, .05);
  z-index: 1;
  border-radius: .5rem;
}

.products .box-container .box .image {
  position: relative;
  text-align: center;
  padding-top: 2rem;
  overflow: hidden;
  left: 500px;
  
}

.products .box-container .box .image img {
  height: 25rem;

}

.products .box-container .box:hover .image img {
  transform: scale(1.1);
}

.products .box-container .box .image .icons {
  position: absolute;
  bottom: -7rem;
  left: 0;
  right: 0;
  display: flex;
}

.products .box-container .box:hover .image .icons {
  bottom: 0;
}

.products .box-container .box .image .icons a {
  height: 5rem;
  line-height: 5rem;
  font-size: 2rem;
  width: 50%;
  background: var(--pink);
  color: #3A9943;
}

.products .box-container .box .image .icons .cart-btn {
  border-left: .1rem solid #fff7;
  border-right: .1rem solid #fff7;
  width: 20%;
}

.products .box-container .box .image .icons a:hover {
  background: #a6e4ac;
}

.products .box-container .box .content {
  padding: 2rem;
  text-align: center;
}

.products .box-container .box .content h3 {
  font-size: 2.5rem;
  color: #333;
}

.products .box-container .box .content .price {
  font-size: 2.5rem;
  color: #000;
  font-weight: bolder;
  padding-top: 1rem;
}

.products .box-container .box .content .price span {
  font-size: 1.5rem;
  color: rgb(12, 12, 12);
  font-weight: lighter;
  text-decoration: line-through;
}
.image{
    text-align: center;
}
/* shop end */

</style>
    <?php include 'inc/header.php'; ?>
    




    <!-- product -->
    <section class="products" id="products">

        <h1 class="title"> our <span>products</span> <a href="#">view all >></a> </h1>

        <div class="box-container" >

            <div class="box">
                <?php $product_list =get_products_by_name($_GET['search']); ?>
                <?php foreach ($product_list as $product) { ?>
                    <div class="image">
                    <a href="product_detail.php?id=<?php echo $product['id']; ?>"> 
                        <img src="<?php echo $product['img']; ?>" alt="">
                    </a>
                        <div class="icons">
                            <!-- <a href="#" class="fas fa-heart"></a> -->
                            <a href="#" class="cart-btn" style="margin-top: 100px ;">add to cart</a>
                            <!-- <a href="#" class="fas fa-share"></a> -->
                        </div>
                    </div>
                    <div class="content">
                        <h3><?php echo $product['name']; ?></h3>
                        <div class="price"><?php echo $product['price']; ?></div>
                    </div>
                <?php } ?>
            </div>


    </section>

    <!-- product end -->



    <?php include 'inc/footer.php'; ?>

</body>

</html>

