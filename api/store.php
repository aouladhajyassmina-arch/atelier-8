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
     
      include_once './Panier.php';
      
      
      session_start();
      
      
      $p=$_SESSION['spanier'];
      
      
    
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
      <li class="nav-item ">
        <a class="nav-link" href="acc.php">Accueil</a>
      </li>
	  <li class="nav-item active ">
        <a class="nav-link" href="store.php">Store</a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
       
      
       <li class="nav-item ">
           <a class="nav-link" href="store.php?action3=contenu">Panier:<img src="images/koffa.png" width="25"  height="25"></a>
      </li>
	 <li class="nav-item ">
           <a class="nav-link" href="logout.php">Logout:<img src="images/logout.png" width="25"  height="25"></a>
      </li>
      
    </ul>
      </div>
  </nav>
 
  
  </header>
 </div> 


























  <!--    Section 1 slide    !-->
 
 <div class="container" id="acc"> 
     <section>
  <div class="carousel slide" data-ride="carousel" id="carouselExample">
         
         <ol class="carousel-indicators">
           <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExample" data-slide-to="1"></li>
           <li data-target="#carouselExample" data-slide-to="2"></li>
           <li data-target="#carouselExample" data-slide-to="3"></li>


        
         </ol>
         
         <div class="carousel-inner">
           <div class="carousel-item active">
               <img src="images/banane.jpg"  class="d-block w-50 h-50 mx-auto"/>
             <div class="carousel-caption">
               <h5>Banane</h5>
               <p>2 DH</p>
             </div>
           </div>
          
          <div class="carousel-item">
                           <img src="images/poire.jpg"  class="d-block w-50 h-50 mx-auto"/>
             <div class="carousel-caption">
               <h5>Poire</h5>
               <p>1.5 DH</p>
             </div>
           </div>
         <div class="carousel-item">
                            <img src="images/pomme.jpg"  class="d-block w-50 h-50 mx-auto"/>         <div class="carousel-caption">
               <h5>Pomme</h5>
               <p>1 DH</p>
             </div>
           </div>
      <div class="carousel-item">
                         <img src="images/kiwi.jpg"  class="d-block w-50 h-50 mx-auto"/>   <div class="carousel-caption">
               <h5>Kiwi</h5>
               <p>2.5 DH</p>
             </div>
           </div>
     
     
     
     
         </div>
         
         <a class="carousel-control-prev" data-slide-to="prev" href="#carouselExample">
           <span class="carousel-control-prev-icon"></span>
         </a>
         
         <a class="carousel-control-next" data-slide="next" href="#carouselExample">
           <span class="carousel-control-next-icon"></span>
         </a>
         
       </div>
     
 
 
 
 
 </section>
 
 
 </div>


 


  <!--    Section Login    !-->
  <div class="container" id="acc">
<section class="bg-dark p-2 text-white">
  <div class="mx-auto w-50">
    <h2>Veuillez Remplir Votre Panier</h2>
    <form action="store.php"  method="POST"  enctype="multipart/form-data">
      <div class="form-group">
        <label>Pommes:</label>
        <input name="npomme" type="number" class="form-control">
          </div>
      <div class="form-group">
        <label>Poires:</label>
        <input name="npoire" type="number" class="form-control" >
      </div>
        <div class="form-group">
        <label>Bananes:</label>
        <input name="nbanane" type="number" class="form-control" >
      </div>
	 <div class="form-group">
        <label>Kiwi:</label>
        <input name="nkiwi" type="number" class="form-control" />
      </div>
	 
	 
        <input type="submit" name="action2" class="btn btn-outline-light" value="Ajouter Au Panier"/>
     <button type="reset" class="btn btn-outline-light">Annuler</button>
   
    </form>
  </div>
    
</section>

<?php      
// action2 : ajouter au panier 

if(!empty($_POST['action2']))
{
    $nb=$_POST['nbanane'];
    $npr=$_POST['npoire'];
    $nk=$_POST['nkiwi'];
    $npm=$_POST['npomme'];
    
    
    // ajouter les bananes :
    for ($i = 0; $i <$nb; $i++)
        {
        $banane=new Fruit($_SESSION['sindice'], "Banane", 2, "images/banane.jpg");
        $p->Ajouter_fruit($banane);
        $_SESSION['sindice']++;
        
        }
    
    // ajouter les pommes :
    for ($i = 0; $i <$npm; $i++)
        {
        $pomme=new Fruit($_SESSION['sindice'], "POmme", 1, "images/pomme.jpg");
        $p->Ajouter_fruit($pomme);
        $_SESSION['sindice']++;
        
        }
    // ajouter les poires :
    for ($i = 0; $i <$npr; $i++)
        {
        $poire=new Fruit($_SESSION['sindice'], "Poire", 1.5, "images/poire.jpg");
        $p->Ajouter_fruit($poire);
        $_SESSION['sindice']++;
        
        }
    // ajouter les kiwis :
    for ($i = 0; $i <$nk; $i++)
        {
        $kiwi=new Fruit($_SESSION['sindice'], "Kiwi", 2.5, "images/kiwi.jpg");
        $p->Ajouter_fruit($kiwi);
        $_SESSION['sindice']++;
        
        }
    
    
}


?>


   <?php      
// action3 : afficher contenu panier
if(!empty($_GET['action3']))
{
   ?> 
     <div class="container mt-4">
            <div class="row">
                
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prix</th>
                      <th>Photo</th>
                    
                    </tr>
                  </thead>
                  <tbody>
             <?php    
                           
             
                        $contenu=$p->getTableau_fruit();
             
                        
                        foreach ($contenu as $fr) 
                            {
                           $id= $fr->getId();
                           $nom=$fr->getNom();
                           $prix=$fr->getPrix_unitaire();
                           $photo=$fr->getPhoto();
                           echo "<tr>";
                           echo "<td>$nom</td>";
                           echo "<td>$prix</td>";
                           echo "<td> <img src='$photo'  width='100'  height='100'  /></td>";     
                           echo "<td><a href='store.php?action4=$id'><img src='images/delete.png'  width='50'  height='50'  /></a></td>";
                           
                           echo "</tr>"; 
                            }
             
             
                         ?>         
                      
                      
                      
                      
                  
              
                      
                  </tbody>
                </table>
            </div>
        </div>





<?php    
  

$total=$p->Prix_total();

echo "<h3>Total :$total DH </h3>";


}   




// action 4 (supprimer )


if(isset($_GET['action4']))    // 
{
    
    //echo "********{$_GET['action4']}*******";
   
    
    $id=$_GET['action4'];
    
    $p->supprimer($id);
    
    $_SESSION['sindice']--;
}
      
      
   ?>   
      
      
      
      
</div>



  



   <!--    Footer      !-->



<footer>
 <div class="container m-5 mx-auto text-center" style="background-color: #444">
               <h3 style="font-family:Georgia" class="text-white">E-Fruit   <span style="color:orange;font-size:50">.</span></h3>
                <div>Copyright © Tous droits reservés.</div>
			</div>


</footer>
 </BODY>
</HTML>
