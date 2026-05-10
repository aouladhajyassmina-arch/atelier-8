
 <?php 
session_start();
    
$id_ = 'Yasmina';
$password_ = '2007';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $password = $_POST['password'];
    
    if ($id_ === $id && $password_ === $password) {
        $_SESSION['user'] = $id;          
        $_SESSION['logged_in'] = true;     
        
        header("Location: store.php");
        exit();
    }
    else {
        echo 'ID ou MOT DE PASSE incorrecte!! <br>';
        echo '<a href="index.php">Réssayer</a>';
    }
}
?>