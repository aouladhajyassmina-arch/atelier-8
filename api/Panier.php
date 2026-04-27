<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panier
 *
 * @author pc
 */
include 'Fruit.php';
class Panier {
    
   static function checkuser($login,$pass)
{
    $r=0;
    if($login=='DEV101'   &&  $pass='123')
    {
        $r=1;
    }
    return $r;
}
    
    
    
    function setTableau_fruit($tableau_fruit) {
        $this->tableau_fruit = $tableau_fruit;
    }

        private $tableau_fruit;   //koffa
    function __construct() {
        $this->tableau_fruit=array();
    }
    
    
    // contenu panier
    function getTableau_fruit() {
        return $this->tableau_fruit;
    }
    
    
    // méthode ajouter :
    
    function Ajouter_fruit(Fruit $f)
    {
        
        $this->tableau_fruit[]=$f;
    }
     
    
     function Prix_total()
    {
        $total=0;
        
        foreach ($this->tableau_fruit as $fruit) {
            $pu=$fruit->getPrix_unitaire();
         $total+= $pu;  
        }
        return $total;
    }
// methode supprimer 
    function supprimer($id)
    {
     $contenu=$this->getTableau_fruit();
            
            unset($contenu[$id]);
            
            $contenu=array_values($contenu);
            $indice=0;
            foreach ($contenu as $frtuit) {
             $frtuit->setId($indice);
             $indice++;
                
            }
            
            
            
           $this->setTableau_fruit($contenu) ;
               
        
        
    }

    
    
    
    
}
