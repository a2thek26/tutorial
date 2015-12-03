<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ACME</title>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/site.css">
    <script src="assets/js/site.js" type="text/javascript"></script>

    <?php
      $slogan = "Stop Accelerate Incredibilus in his tracks.";
      $tagline = "Crush pesky roadrunners with ease.";
    ?>

  </head>

  <body>
    <div class="container debug">
      <div class ="row top">
        <div class="col-md-7 col-md-push-5 header">
          <?php
            echo '<h1 id="headline">'.$slogan.'</h1>
                  <p>'.$tagline.'</p>';
          ?>
          <div class="row">
            <div class="col-xs-12 col-md-6 promo">


              <a href="#promo" data-toggle="modal" alt="promo">
                <img class="promo-img" src="https://i.ytimg.com/vi/NpEaa2P7qZI/maxresdefault.jpg">
              </a>

              <div class="modal fade" id="promo" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/NpEaa2P7qZI"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-6 logo">
              <img src="http://placehold.it/125x145" alt="logo">
              <p>[LOGO]</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-md-pull-7 coupon">
          <h1>$6.00 OFF</h1>
          <h5>on ACME Anvil</h5>
          <button class="btn btn-danger save">$$ Get a Coupon</button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class ="row bottom">
        <div class="col-md-6 col-sm-12 retail">
            <h3>Available at these Fine Retailers</h3><br>

            <div class= "row retailers">
              <a href="#" class="btn retailtop"><img src="http://placehold.it/50x50" alt="Venture Link"><br>Venture</a>

              <a href="#" class="btn retailtop"><img src="http://placehold.it/50x50" alt="Marshall Link"><br>Marshall Field's</a>

              <a href="#" class="btn retailtop"><img src="http://placehold.it/50x50" alt="Bamberger's Link"><br>Bamberger's</a>

            </div>
            <div class= "row retailers">
              <a href="#" class="btn retailbottom"><img src="http://placehold.it/50x50" alt="Zayre Link"><br>Zayre</a>

              <a href="#" class="btn retailbottom"><img src="http://placehold.it/50x50" alt="Woolworth Link"><br>Woolworth</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 lineup">
            <h3>ACME Product Line-up</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</p>

        </div>
      </div>
    </div>
  </body>

  <footer>
    <div class="container">
      <a href="#" alt="HOME">Home</a> |
      <a href="#" alt= "Privacy Policy">Privacy Policy</a> |
      <a href="#" alt="Contact">Contact Us</a>
    </div>
  </footer>
</html>
