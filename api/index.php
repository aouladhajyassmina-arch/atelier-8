<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <meta charset="utf-8"> 
<link rel="stylesheet" href="./css/bootstrap.min.css" />
<link rel="stylesheet" href="./css/styles.css" />
<script src="./js/jquery-3.3.1.slim.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

    <script src="./js/jquery-1.11.1.min.js"></script>

   <link rel="stylesheet" href="css/glyphicones.css">
    <link rel="stylesheet" href="css/styles.css">
      <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Khalfia mo wahada (Dark Navy) */
body {
    background: #0f172a; 
    font-family: 'Poppins', sans-serif;
    color: #f8fafc;
    line-height: 1.6;
}

/* Navbar (Glassmorphism Effect) */
.navbar {
    background: rgba(15, 23, 42, 0.9) !important;
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(251, 191, 36, 0.2);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
}

.navbar h1 {
    font-weight: 700;
    color: #fbbf24 !important; /* Gold color */
    letter-spacing: 1px;
}

/* Links */
.nav-link {
    color: #cbd5e1 !important;
    font-weight: 500;
    transition: 0.4s ease;
}

.nav-link:hover {
    color: #fbbf24 !important;
    transform: translateY(-2px);
}

/* Carousel (More Premium) */
.carousel {
    margin-top: 30px;
    background: #020617;
    border: 2px solid rgba(251, 191, 36, 0.1);
    border-radius: 20px;
    padding: 10px;
    overflow: hidden;
}

.carousel img {
    border-radius: 15px;
    filter: brightness(0.9);
    transition: 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.carousel img:hover {
    filter: brightness(1.1);
    transform: scale(1.02);
}

.carousel-caption {
    background: rgba(15, 23, 42, 0.7);
    backdrop-filter: blur(5px);
    border-left: 4px solid #fbbf24;
    border-radius: 0 10px 10px 0;
}

/* Form Section (Clean & Dark) */
section.bg-dark {
    background-color: #1e293b !important;
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 20px;
    margin-top: 40px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}

form input {
    background-color: #0f172a !important;
    border: 1px solid #334155 !important;
    color: white !important;
    border-radius: 12px !important;
    padding: 12px 15px !important;
}

form input:focus {
    border-color: #fbbf24 !important;
    box-shadow: 0 0 0 3px rgba(251, 191, 36, 0.2) !important;
}

/* Buttons (Gold Style) */
.btn {
    background-color: #fbbf24;
    color: #0f172a;
    font-weight: 600;
    border: none;
    border-radius: 50px;
    padding: 10px 25px;
    transition: 0.3s all;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.btn:hover {
    background-color: #fff;
    color: #0f172a;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(251, 191, 36, 0.3);
}

/* Table (Modern & Elegant) */
.table {
    background: #1e293b;
    color: #f8fafc;
    border-radius: 15px;
    overflow: hidden;
    border: none;
    margin-top: 30px;
}

.table thead th {
    background-color: #fbbf24 !important;
    color: #0f172a !important;
    border: none;
    text-transform: uppercase;
    font-size: 0.9rem;
}

.table td {
    border-color: rgba(255,255,255,0.05);
    vertical-align: middle;
}

.table img {
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

/* Total */
h3 {
    margin-top: 30px;
    text-align: center;
    color: #fbbf24;
    font-weight: 700;
    text-shadow: 0 0 15px rgba(251, 191, 36, 0.2);
}

/* Footer */
footer .container {
    background: #020617;
    border-top: 2px solid #fbbf24;
    border-radius: 20px 20px 0 0;
    padding: 30px;
    box-shadow: 0 -10px 30px rgba(0,0,0,0.2);
}

/* Scroll smooth */
html {
    scroll-behavior: smooth;
}

/* Custom Scrollbar bach hta l-jisr (scroll) ykoun stylish */
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #0f172a;
}
::-webkit-scrollbar-thumb {
    background: #fbbf24;
    border-radius: 10px;
}
</style>
 </HEAD>

 <BODY>
     
     <?php      
     
            $username = '';             $password = '';

     
     ?>
  <!--    Entete      !-->
    <div class="container sticky-top">
  <header>

    <nav  class="navbar navbar-dark navbar-expand-sm bg-dark pl-5">
     <a class="text-white" style="text-decoration:none" href="#">
	 <h1 style="font-family:Georgia">E-Fruit <span style="color:orange">.</span></h1></a>
    
    <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
	
    </button>
    
    <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ml-5">
      <li class="nav-item active">
        <a class="nav-link" href="acc.php">Accueil</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="store.php">Store</a>
      </li>
	 
    </ul>
      </div>
  </nav>
 
  
  </header>
 </div> 













  <!--    Section 1 Image(background)    !-->
 <section>
 <div class="container" id="acc"> 
 
 <!-- AFFICHAGE DU JUMBOTRON -->
<div class="jumbotron jumbotron-fluid text-white" style="background-image: url('./images/panier.jpg') ;background-repeat: no-repeat;  background-position: center">
 
    <div class="display-4 pl-2"   style="color:green">Bienvenue <br/> à E-Fruit.</div>
   
</div>
 
 
 
 
 
 
 </div>


 </section>















  <!--    Section Login    !-->
  <div class="container" id="acc">
<section class="bg-dark p-2 text-white">
  <div class="mx-auto w-50">
    <h2>Veuillez vous authentifier</h2>
    <form action="acc.php"   method="POST">
      <div class="form-group">
        <label>Login:</label>
        <input name="login" type="text" class="form-control" value="<?=$username?>"  placeholder="Login ">
          </div>
      <div class="form-group">
        <label>Password:</label>
        <input name="pass" type="password" class="form-control"  value="<?=$password?>" >
      </div>
	 
	 
        <input type="checkbox" name="remember"  value="remember"/>Remember me
      
        <input type="submit" name="action1" class="btn btn-outline-light" value="Connexion"/>
     <button type="reset" class="btn btn-outline-light">Annuler</button>
   
    </form>
  </div>
    
</section>

<?php    

     include_once './Panier.php';
// action1 Authentification :

if(!empty($_POST['action1']))
{
    
 $login=$_POST['login'];
 $pass=$_POST['pass'];
   

$r= Panier::checkuser($login, $pass) ;
    



if($r==0)
{
    echo "Login ou pass incorrect !!!";
}
else{
    
    session_start();
    
    $p=new Panier();
    
   $_SESSION['spanier']= $p;
   
   $_SESSION['sindice']=0;
    
    
    
    header("Location:store.php");
    
}




 }
 




?>


</div>



  



   <!--    Footer      !-->




 <div class="container m-5 mx-auto text-center" style="background-color: #444">
  <footer>
     <h3 style="font-family:Georgia" class="text-white">E-Fruit <span style="color:orange;font-size:50">.</span></h3>
                <div>Copyright © Tous droits reservés.</div>
			


</footer>
     </div>
 </BODY>
</HTML>
