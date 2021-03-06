<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Kitchen Kingdom - Login</title>

   <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">

   <!-- Custom CSS -->
   <link href="../adlister/adlister.register.css" rel="stylesheet">

   <!-- Custom Fonts -->
   <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

</head>

<body>
<!-- Navigation -->
    <nav class="top-navbar">
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
                    <a class="navbar-brand" href="http://codeup.dev/adlister/adlister_welcome.php">Kitchen Kingdom</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="http://codeup.dev/adlister/login.php">Login</a>
                      </li>
                      <li>
                            <a href="http://codeup.dev/adlister/adlister.register.php">Sign Up</a>
                        </li>
                        <li>
                            <a>Browse Items</a>
                        </li>
                        <li>
                            <a href="http://codeup.dev/adlister/ads.create.php">Create a Listing</a>
                        </li>
                        <li>
                            <a href="http://codeup.dev/adlister/ads_contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </nav>

<!--_________FORM___________ -->
    <div class="ad_form">
      <h1>Glad To See You Again!</h1>
      <form method="POST" action="/adlister/login.php">
        <p>
          <label for="username"></label>
          <input id="name" name="username" type="text" placeholder="Username">
        </p>
        <p>
          <label for="password"></label>
          <input id="name" name="username" type="password" placeholder="Password">
        </p>
        <p>
          <input type="checkbox" id="remember" value="yes" name="remember" checked>
          <label for="remember">Remember Me!</label>
          <!-- you can swith the input and the lable, if reversed then the checked box will 
          be on the right of the text -->
        </p>
        <p>
          <button type="submit" name="username">Submit</button>
        </p>
        <a href="http://codeup.dev/adlister/adlister.register.php"><h4>Not a member?<br>No worries sign up here!</h4></a>
      </form>
    </div>


    <!-- Footer -->
    <footer class="site-footer">        
        <p>&emsp;Copyright &copy; Kitchen Kingdom 2016</p>
    </footer>
</body>
</html>