<?php
// لا تترك أي سطر فارغ هنا فوق!
session_start();

$id_valide = 'Yasmina';
$pass_valide = '2007';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? trim($_POST['id']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    if ($id === $id_valide && $password === $pass_valide) {
        $_SESSION['user'] = $id;          
        $_SESSION['logged_in'] = true;     
        
        // التحويل يجب أن يكون قبل أي echo أو HTML
        header("Location: store.php");
        exit();
    } else {
        $_SESSION['error'] = "Identifiant ou Mot de passe incorrect!";
        header("Location: index.php");
        
    }
}
?>