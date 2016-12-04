<?php
$mName ="";
$mID = 0;
if(!empty($_GET['name'])){
  $mName = $_GET['name'];
  $con = mysqli_connect("localhost","root","root" , "movierating", "8889");
  $sql="SELECT M_ID FROM Movies WHERE title='$mName'";
  $result = mysqli_query($con,$sql);
  $mData = mysqli_fetch_array($result);
  $mmid = $mData['M_ID'];
  if($mmid == NULL){
    header('Location: index.php');
  }
}else{
  $mmid = $_GET['id'];
  if($mmid == NULL){
    header('Location: index.php');
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Movie Rating</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/movinfo.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Rate Movies</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="col-sm-3 col-md-3">
                    <form action="movieinfo.php" method="GET" class="navbar-form" role="search">
                        <div class="input-group">
                            <input name = "name" type="text" class="form-control" placeholder="Search movies" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="#">Login</a></li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Login via
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        or -->
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Username</label>
                                                <input type="email" class="form-control" id="exampleInputUsername2" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                <!-- <div class="help-block text-right"><a href="">Forget the password ?</a></div> -->
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Confirm Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password" required>
                                                <!-- <div class="help-block text-right"><a href="">Forget the password ?</a></div> -->
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Register Now !</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="bottom text-center">
                                        New here ? <a href="#"><b>Join Us</b></a>
                                    </div> -->
                                </div>
                            </li>
                        </ul>
                    </li>





                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="register-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Login via
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        or -->
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="register-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" required>
                                                <!-- <div class="help-block text-right"><a href="">Forget the password ?</a></div> -->
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> keep me logged-in</label>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="bottom text-center">
                                        New here ? <a href="#"><b>Join Us</b></a>
                                    </div> -->
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

          <div class="col-md-3">
              <p class="lead">Movie Category</p>
              <div class="list-group">
                <a href="sort.php?category=Action" class="list-group-item">Action</a>
                <a href="sort.php?category=Adventure" class="list-group-item">Adventure</a>
                <a href="sort.php?category=Animation" class="list-group-item">Animation</a>
                <a href="sort.php?category=Comedy" class="list-group-item">Comedy</a>
                <a href="sort.php?category=Drama" class="list-group-item">Drama</a>
                <a href="sort.php?category=Thriller" class="list-group-item">Thriller</a>
                <a href="sort.php?category=Crime" class="list-group-item">Crime</a>
                <a href="sort.php?category=Music" class="list-group-item">Music</a>
                <a href="sort.php?category=Romance" class="list-group-item">Romance</a>
                <a href="sort.php?category=Sci-Fi" class="list-group-item">Sci-Fi</a>
              </div>
          </div>

            <div class="col-md-9">
                <div class="thumbnail">
                    <div id="showCover">
                      <?php
                      $con = mysqli_connect("localhost","root","root" , "movierating", "8889");
                      $sql="SELECT * FROM Movies WHERE M_ID=$mmid";
                      $result = mysqli_query($con,$sql);
                      $mData = mysqli_fetch_array($result);
                      echo "<img class='col-sm-4 poster' src=" . $mData['cover'] . ">";
                      echo $mData['trailer'];
                       ?>

                    </div>
                    <div class="caption-full">

                        <?php
                        $con = mysqli_connect("localhost","root","root" , "movierating", "8889");
                        $sql="SELECT * FROM Movies WHERE M_ID=$mmid";
                        $result = mysqli_query($con,$sql);
                        $mData = mysqli_fetch_array($result);
                        echo "<h4>" . $mData['title'] . "</h4>";
                        echo "<p>Director: " . $mData['director'] . "<p>";
                        echo "<p>Writers: " . $mData['writers'] . "<p>";
                        echo "<p>Stars: " . $mData['stars'] . "<p>";
                        echo "<p>Story Plot: " . $mData['storyline'] . "<p>";
                         ?>

                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
