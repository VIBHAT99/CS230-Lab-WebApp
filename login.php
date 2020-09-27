<?php
require 'includes/header.php'
?>
<main>
  <link rel="stylesheet" href="css/login.css">
  <div class="bg-cover">
    <div class="container" style="padding-top: 80px;">
      <div id="slides" class="carousel slide col-md-8 offset-md-2" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block mx-auto" src="Images/rob-1.gif" alt="First slide" width="300px" height="300px">
          </div>
          <div class="carousel-item">
            <img class="d-block mx-auto" src="Images/rob-2.gif" alt="Second slide" width="300px" height="300px">
          </div>
          <div class="carousel-item">
            <img class="d-block mx-auto" src="Images/rob-3.gif" alt="Third slide" width="300px" height="300px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    <div class="h-35 center-me">
      <div class="my-auto">
        <form class="form-signin" action="includes/login-helper.php" method="post" style="background:rgb(51, 42, 51)">
          <h1 class="h3 mb-3 font-weight-normal" style="color: tan">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Username or Email address</label>
          <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/ Email" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3" style="margin: 10px;" style="text-align: left" style="color: tan">
            <label style="color:tan">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn btn-outline-danger" name="login-submit"type="submit" style="color: tan;">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
      </div>
      </form>

    </div>
  </div>
</main>