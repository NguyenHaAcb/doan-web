<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    
    <link rel="stylesheet" href="./view/public/css/custom.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/ss.css">
    <title>Document</title>
    
</head>
<body>
<?php include 'inc/header.php'; ?>
<?php include 'inc/banner.php'; ?>


<section class="about">

        <div class="image">
            <img src="view/public/images/gallery-img-1.jpg" alt="">
        </div>

        <div class="content">
            <span>welcome to our shop</span>
            <h3>fresh and organic groceries</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vel sequi nostrum quae nobis non quaerat
                nisi voluptatibus recusandae reprehenderit tempore eligendi, eum quibusdam perferendis dicta, incidunt
                dolores nemo ex.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem cumque molestiae blanditiis deleniti
                aspernatur, ab tempora quisquam sapiente commodi hic.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </section>



    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="gallery">

        <h1 class="title"> our <span>gallery</span> <a href="#">view all >></a> </h1>

        <div class="box-container">

            <div class="box">
                <img src="view/public/images/blog-1.jpg" alt="">
                
            </div>

            <div class="box">
                <img src="view/public/images/blog-2.jpg" alt="">
                
            </div>

            <div class="box">
                <img src="view/public/images/blog-3.jpg" alt="">
                
            </div>

            <div class="box">
                <img src="view/public/images/blog-5.jpg" alt="">
                
            </div>

            <div class="box">
                <img src="view/public/images/blog-6.jpg" alt="">
                
            </div>

            <div class="box">
                <img src="view/public/images/gallery-img-3.jpg" alt="">
               
            </div>
            

        </div>

    </section>

      


<?php include 'inc/footer.php'; ?>
</body>
</html>