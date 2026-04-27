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
    <STYLE>
        
        *{
            color:green;
        }
        
        
    </STYLE>
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
