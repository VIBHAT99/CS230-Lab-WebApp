<?php
require "includes/header.php"


?>

<main>
<link rel="stylesheet" href="css/signup.css">
    <div class="bg-cover">
        <div class="h-100 container center-me" class="zoomIn">
            <div class="my-auto">
                <div class="signup-form">
                    <form action="includes/signup-helper.php" method="post">
                        <h2>Register</h2>
                        <p style="color:midnightblue;">It's time to Make it ourselves</p>
                        <p class="hint-text"> Create Your Account </p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="UserName" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="con-pwd" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success btn-md btn-circle" name="signup-submit">Register</button>
                        </div>
                        <div class="text-center">Already a member? <a href="login.php">Sign in</a></div>
                        <div class="text-center">Sign in with
              <hr class="my-2">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-google" type="submit"></a>
<a href="https://www.facebook.com/login/" class="fa fa-facebook" type="submit"></a>
<a href="https://twitter.com/login" class="fa fa-twitter" type="submit"></a>
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</main>