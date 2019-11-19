

<!doctype html>

<html lang="en">



  <head>




      <link rel="stylesheet" href="style.css">

       <?php include "templates/header.php"; ?>  

    

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">

        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

        <li data-target="#myCarousel" data-slide-to="1"></li>

        <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

        <div class="carousel-inner">

        <div class="carousel-item active">

            <img class="first-slide" src="pizza-background.jpg" alt="First slide">

            <div class="container">

            <div class="carousel-caption text-left">

                <h1>Ready to Order?</h1>

                <p>Skip The Line and Order Online! Now Available </p>

                <p><a class="btn btn-lg btn-primary" href="order.php" role="button">Order Here!</a></p>

            </div>

            </div>

        </div>

        <div class="carousel-item">

            <img class="second-slide" src="pizzabanner2.jpg" alt="Second slide"width="1700" height="600">

            <div class="container">

            <div class="carousel-caption">

                <h1>Learn More About Us</h1>

                <p>To Learn about our mission click below</p>

                <p><a class="btn btn-lg btn-primary" href="about.php" role="button">Learn more</a></p>

            </div>

            </div>

        </div>

        <div class="carousel-item">

            <img class="third-slide" src="Pizzabanner3.jpg" alt="Third slide" width="1600" height="700">

            <div class="container">

            <div class="carousel-caption text-right">

                <h1>What location are you closest to?</h1>

                <p>Choose one of our 7 Locations in the Metro Area</p>

                <p><a class="btn btn-lg btn-primary" href="locations.php" role="button">Locations</a></p>

            </div>

            </div>

        </div>

        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>

        <span class="sr-only">Next</span>

        </a>

    </div>

          

          

    <div class="container marketing">

          

                  <!-- Three columns of text below -->

        <div class="row">

         <div class="col-lg-4">

            <img class="rounded-circle" src="efficient.png" alt="Generic placeholder image" width="170" height="130">

            <h2>Efficient</h2>

            <p>Don't want to wait in line? Do you want it ready when you walk in the door? Order Online!</p>

            <p><a class="btn btn-secondary" href="order.php" role="button">Order Online &raquo;</a></p>

        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">

            <img class="rounded-circle" src="location.png" alt="Generic placeholder image" width="140" height="140">

            <h2>Locations</h2>

            <p>Choose one of our 7 Locations in the Metro Area</p>

            <p><a class="btn btn-secondary" href="locations.php" role="button">Locations &raquo;</a></p>

         </div><!-- /.col-lg-4 -->

         <div class="col-lg-4">

            <img class="rounded-circle" src="likeornot.jpg" alt="Generic placeholder image" width="200" height="160">

            <h2>Love Us?</h2>

            <p>Write a review about you experience and let others know about us!</p>

            <p><a class="btn btn-secondary" href="reviews.php" role="button">Rate Us &raquo;</a></p>

         </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

          

          

                  <!-- START THE FEATURETTES -->

          

         <hr class="featurette-divider">

          

        <div class="row featurette">

         <div class="col-md-7">

            <h2 class="featurette-heading">Founded in 1967 by Ricardo Ricci. <span class="text-muted">In Minneapolis, Minnesota</span></h2>

            <p class="lead"></p>

         </div>

         <div class="col-md-5">

            <img class="featurette-image img-fluid mx-auto" src="1967.jpg" alt="Generic placeholder image">

        </div>

        </div>

          

        <hr class="featurette-divider">

          

         <div class="row featurette">

        <div class="col-md-7 order-md-2">

            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>

            <p class="lead">People Love us. Read our reviews and make the decision for yourself!</p>

        </div>

        <div class="col-md-5 order-md-1">

            <img class="featurette-image img-fluid mx-auto" src="PeopleLoveUs.png" alt="Generic placeholder image">

        </div>

        </div>

          

        <hr class="featurette-divider">

          

      <div class="row featurette">

            <div class="col-md-7">

            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Our Menu!</span></h2>

            <p class="lead"></p>

        </div>

        <div class="col-md-5">

          <img class="featurette-image img-fluid mx-auto" src="Menu.PNG" alt="Generic placeholder image">

        </div>

        </div>

          

        <hr class="featurette-divider">

          

                  <!-- /END THE FEATURETTES -->

          

    </div><!-- /.container -->

    <?php include "templates/footer.php"; ?> 