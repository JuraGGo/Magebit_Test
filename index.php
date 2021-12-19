<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Static Template</title>
  <link rel="stylesheet" href="assets/style.css" id="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  <div class="container">
    <div class="row">
      <div class="side">
        <div class="center">  
            <div class="navbar">
              <a href="#" class="logo-image"><img class="logo" src="/assets/Union.png" alt="..."><img src="/assets/pineapple.png" alt="..." id="pineapple"></a>
              <div class="link-list">
                <a href="#" class="right">About</a>
                <a href="#" class="right">How it works</a>
                <a href="#" class="right">Contact</a>
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <h5 class="title">Subscribe to newsletter</h5>
                <p class="sub-title">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
                  
                  <form action="/classes/db.php" id="subscribtion" method="POST">
                    <input type="email" name="email" class="email-input" placeholder="Type your email address here…" name="search-bar" required="true"> 
                    <div class="error-message">Email is a required field.</div>
                    <!--<div class="arrow">
                      <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M17.7071 0.2929C17.3166 -0.0976334 16.6834 -0.0976334 16.2929 0.2929C15.9023 0.683403 15.9023 1.31658 16.2929 1.70708L20.5858 5.99999H1C0.447693 5.99999 0 6.44772 0 6.99999C0 7.55227 0.447693 7.99999 1 7.99999H20.5858L16.2929 12.2929C15.9023 12.6834 15.9023 13.3166 16.2929 13.7071C16.6834 14.0976 17.3166 14.0976 17.7071 13.7071L23.7071 7.70708C24.0977 7.31658 24.0977 6.6834 23.7071 6.2929L17.7071 0.2929Z" fill="#131821"/>
                      </svg>
                    </div>-->
                    <div class="terms-checkbox">
                      <input type="checkbox" class="checkbox" required="true">
                            <div class="checkbox-text agree-check-title">I agree to&nbsp;<a href="#" class="link">terms of service</a></div> 
                    </div>
                  </form>

                  <div class="icons" >
                    <hr class="solid">
                    <a href="#">
                      <div class="facebook-icon">
                          <i class="fa fa-facebook"></i>
                      </div>
                    </a>
                    <a href="#">
                      <div class="instagram-icon">
                        <i class="fa fa-instagram"></i>
                      </div>
                    </a>
                    <a href="#">
                      <div class="twitter-icon">
                        <i class="fa fa-twitter"></i>
                      </div>
                    </a>
                    <a href="#">
                      <div class="youtube-icon">
                        <i class="fa fa-youtube"></i>
                      </div>
                    </a>
                  </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="main">
        <img class="responsive full-body-img" src="/assets/image_summer.png" alt="...">


      </div>
    </div>


  </div>
</body>

<script>
 
  </script>