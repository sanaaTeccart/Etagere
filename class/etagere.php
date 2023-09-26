<?php
Class Etagere{

public $material;
public $size;
public $color;
public $quantite;


    

public function getEtageres(){
                 //recuperation de l'objet PDO de connexion
                global $oPDO;
                $oPDOStatement = $oPDO->query("SELECT * FROM etagere ORDER BY id ");
                //reccperer du resulta dans un tableau
                $etageres= $oPDOStatement ->fetchAll(PDO::FETCH_ASSOC);
                return  $etageres;
            }

     public function getEtagere($id){

                global $oPDO;
                //preparation de la requete
                $oPDOStatement = $oPDO->prepare("SELECT * FROM etagere WHERE id = :id"); 
                $oPDOStatement ->bindParam(':id', $id, PDO::PARAM_INT);
                //EXECUTION DE LA REQUET PREPARER
                $oPDOStatement->execute(); 
    
            $etagere= $oPDOStatement->fetch(PDO::FETCH_ASSOC);
            return $etagere;
    
     }


     public function getALLEtagere($color){

                global $oPDO;
                //preparation de la requete
                $oPDOStatement = $oPDO->prepare("SELECT * FROM etagere WHERE color = :color"); 
                $oPDOStatement ->bindParam(':color',$color, PDO::PARAM_STR);
                //EXECUTION DE LA REQUET PREPARE
                $oPDOStatement->execute(); 
            $etageres= $oPDOStatement->fetchAll(PDO::FETCH_ASSOC);
            return $etageres;

}





public function ajouterEtagere($etagere){

                global $oPDO;
            $oPDOStatement = $oPDO->prepare("INSERT INTO etagere  SET material=:material, size=:size, color=:color, quantite=:quantite");
            $oPDOStatement ->bindParam(':material', $etagere['material'], PDO::PARAM_STR);
            $oPDOStatement ->bindParam(':size',$etagere['size'], PDO::PARAM_STR);
            $oPDOStatement->bindParam(':color' ,$etagere['color'], PDO::PARAM_STR);
            $oPDOStatement->bindParam(':quantite' ,$etagere['quantite'], PDO::PARAM_INT);
            $oPDOStatement->execute (); 

            if($oPDOStatement->rowCount() <= 0){return false;
            }
            return $oPDO->lastInsertId();
            }



 public function updateEtagere($id,$data){
    $etagere =$this->getEtagere($id);
    if($etagere){
                global $oPDO;
            $oPDOStatement = $oPDO->prepare("UPDATE etagere  SET material=:material, size=:size, color=:color, quantite=:quantite WHERE id=:id");
            $oPDOStatement ->bindParam(':material', $data['material'], PDO::PARAM_STR);
            $oPDOStatement ->bindParam(':size', $data['size'], PDO::PARAM_STR);
            $oPDOStatement->bindParam(':color' , $data['color'], PDO::PARAM_STR);
           $oPDOStatement->bindParam(':quantite' , $data['quantite'], PDO::PARAM_INT);
            $oPDOStatement->bindParam(':id' , $id, PDO::PARAM_INT);

            $oPDOStatement->execute(); 

            $etagere= $oPDOStatement -> fetch(PDO::FETCH_ASSOC);
             $etagere;
    }
    
 }


 

 public function deleteEtagere($id){
            $etagere =$this->getEtagere($id);
        if($etagere){

            global $oPDO;
            $oPDOStatement = $oPDO->prepare("DELETE FROM etagere WHERE id = :id ");
            $oPDOStatement->bindParam(':id', $id, PDO::PARAM_INT);
            $oPDOStatement->execute(); 

            return"etagere avec id : " . $etagere['id'] . " a ete suprimer";

            }
           else{
               return"etagere  est introuvable";}
        }




}

?>