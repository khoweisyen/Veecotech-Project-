<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <link rel="stylesheet" href="../InvoiceSystemNew/bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="../InvoiceSystemNew/login.css">
</head>

<style>

body {background-image: url('BG.jpg')}
h1   {color: blue;}
p    {color: red;}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}


</style>


    

    <ul>
     <li><a class="active" href="home.php">Home</a></li>
  <li><a href="#news">About Us</a></li>
  <li><a href="#contact">Portfolio</a></li>
      <li><a href="#about">Contact Us</a></li>
</ul>
   	  
    
    

        <div class="header">
  	<h2>Login</h2>

        </div>
        <form method="post" action="login.php" class="card">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username: </label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password: </label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
   


</html>