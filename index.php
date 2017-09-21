<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
  </head>
  <body style="background: url(./images/img1.jpg) ; width:100% ; height: 100%; background-size: 100%;">

    <div class="container-fluid headercont" style="background:  url(./images/ao.gif) repeat">
    <div class='row'>
    <div class='col-lg-3' style="max-height: 150px;">
      <img src="images/bhu_1.png" class=" img-responsive" style="margin: 5px;"  />
      </div>
      <div class='col-lg-9'>
      <p class="heading" style="color: white; font-family: system-ui;">VISUAL ARTS FACULTY - Banaras Hindu University</p>
    </div>
    </div>
    </div>
    <nav class='navbar navbar-inverse' roll='navigation' style="background: url(./images/b50.png) repeat ;">
      <div class='container-fluid'>
      <div class='navbar-header'>
        <a class='navbar-brand' href="4.html"><span class='glyphicon glyphicon-user'></span> LOGIN/SIGNUP </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#cNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class='collapse navbar-collapse' id="cNav">
      
        <ul class='nav navbar-nav navbar-right '>
          <li><a href="2.html">
          <span class='glyphicon glyphicon-home'></span> Home </a></li>
          <li><a href="post.html"><span class='glyphicon glyphicon-pencil'></span> Post </a></li>
          <li><a href="artwork.html"><span class='glyphicon glyphicon-picture'></span> Artwork </a></li>
          <li><a href="#"><span class='glyphicon glyphicon-calendar'></span> Schedule</a></li>
          <li><a href="#"><span class='glyphicon glyphicon-font'></span> About</a></li>
        </ul>
      
      </div>
      </div>
    </nav>
    <div class='container-fluid' style="min-height: 300px;">
    <div class='row' >
    <div class="col-lg-3"></div>
    <div class='col-lg-3' style="border: 2px solid #234; background-color: white; margin: 3px;">
        <div class="row">
        <div class='col-lg-12 '>

      <form class="form-signin">
        <h2 class="form-signin-heading" style="color: black;">Student's  Login</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

      </div>
      
    </div>
    </br>
    <div class="col-lg-6 col-lg-offset-3">
    <a href="Register.html" class='but'>New User <span class="glyphicon glyphicon-question-sign"></span> Register</a>
    </div>
    </br>
    </br>
<!--    <div class='row' style="color:black;">
    
    <div class='col-lg-12 regist'><a href="Register.html">New User <span class="glyphicon glyphicon-question-sign"></span> Register</a></div>
    
    </div>
    -->
    </div>
    <div class='col-lg-3' style="border: 2px solid #234; background-color: white; margin: 5px;">
        <div class="row">
        <div class='col-lg-12 '>

        <h2 class="form-signin-heading" style="color: black;">Employee's  Login</h2>
        <a href="facultylogin.html" class='but'> Faculty Login</a>
        </br>
        <a href="stafflogin.html" class='but'> Staff Login</a>
        </br>

      </div>
      
    </div>
    
   
    </div>

    </div>

 <div class="container-fluid" style="background:  url(./images/ao.gif) repeat; color: white; margin-top: 30px;border-top:2px solid black;">
    <div class='row'>
      <div class='col-lg-4'>
        <h3>Address</h3>
        <br>
        Visual Arts faculty dept,
        <br>
        Banaras Hindu University,
        <br>
        Varanasi-221005
      </div>
      <div class='col-lg-4'>
        <h3>Information</h3>
        <br>
        <a href="#"><span class='glyphicon glyphicon-info-sign'></span> About Us</a>
        <br>
        <a href="#"><span class='glyphicon glyphicon-info-sign'></span> FAQ</a>
        <br>
        <a href="#"><span class="glyphicon glyphicon-education"></span> BHU</a>
      </div>
      <div class='col-lg-4'>
        <h3>Login</h3>
        <br>
        <a href="#"><span class='glyphicon glyphicon-user' ></span> Student</a>
        <br>
        <a href="#"><span class='glyphicon glyphicon-user'></span> Faculty</a>
        <br>
        <a href="#"><span class='glyphicon glyphicon-briefcase'></span> Staff</a>
      </div>
    </div>
    
      <div class='row'>
      <p style="text-align: center; margin: 5px;">Copyright &copy; <a href="#">Banaras Hindu University</a> - All Rights Reserved </p>
      </div>
    </div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>
  </body>
</html>







