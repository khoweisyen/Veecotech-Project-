
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

<body>
    
   
    <ul>
     <li><a class="active" href="home.php">Home</a></li>
  <li><a href="#news">About Us</a></li>
  <li><a href="#contact">Portfolio</a></li>
  <li><a href="#about">Contact Us</a></li>
</ul>

    
    
    
    
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
      
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>