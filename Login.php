<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
         <a href="#" class="logo" > LIB </a>
         <nav>
             <ul>
                 <li> <a href="home.html"> Home </a> </li>
                 <li> <a href="#"> Menu </a> 
                     <ul>
                         <li> <a href="Team.html"> Our Team </a> </li>
                         <li> <a href="About.html"> About Us </a> </li>
                         <li> <a href="#"> Services+ </a> 
                             <ul>
                                 <li> <a href="Services.html"> Services </a> </li>
                                 <li> <a href="onlineB.html"> Online Banking </a> </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li> <a href="Contact.html"> Contact US </a> </li>
             </ul>
         </nav>
     </header>
     <section class="hero">
      <div class="welcome-section">
        <h1>Welcome to LIB Bank</h1>
        <p class="welcome-p">We are here to help you manage<br />your finances and reach your financial goals</p>
        <a href="Services.html"><button class="welcome-btn">Our Services</button></a>
      </div>
      <form  action= "dbsecurity.php" method="get" class="form" required >
        <h2 style="font-family:Georgia, 'Times New Roman', Times, serif ;">Log In</h2>
      
        <input type="username" name="username" placeholder="Enter username Here" required="" autocomplete="off">
        <input type="password" name= "password" placeholder="Enter password Here" required="">
      
        <a href="#" class="eye" id="togglePassword"><i class="fa fa-eye-slash"></i></a>
      
        <button class="btn" type="submit" name="login-btn" >Login</button>
        <p class="link">Don't have an account<br /><a href="signup.html" class="sign-up"><span class="signhover">Sign up </span></a> here</p>
      </form>
      </section>
</body>
</html>