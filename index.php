<?php
$host="localhost";
$db="tp_1";
$user="root";
$password="";

$dsn="mysql: host=$host; dbname=$db; charset=UTF8";

global $oPDO;
try{
    
    $oPDO= new PDO($dsn,$user, $password);
    if($oPDO){
        echo"Connected to the $db database successfuly";
    }
   
}catch (PDOException $e){echo$e->getMessage();
}
//-a:toutes les etageres dans BD-:-------------------------------------------

 echo"-a:toutes les etageres dans BD<br />";
 echo"<br />";
require_once "class/etagere.php";

$oetagere = new Etagere;
$etageres = $oetagere ->getEtageres();

echo"
     <table border='1'>
         <tr>
         <th>id</th>
             <th>material</th>
             <th>size</th>
             <th>color</th>
             <th>quantite</th>
         </tr>";

         
            foreach($etageres as $etage)
            {
                
             echo '<tr>';
             echo '<td>' . $etage['id'] . '</td>';
             echo '<td>' . $etage['material'] . '</td>';
             echo "<td>" . $etage['size'] . "</td>";
             echo "<td>" . $etage['color'] . "</td>";
             echo "<td>" . $etage['quantite'] . "</td>";
             echo "</tr>";
         }
         echo "</table></body></html>";


//b-L'etagere par  id=? :--------------------------------------------
echo"<br />";
 echo"b-L'etagere par  id=?<br />";
 echo"<br />";
$etagere =$oetagere->getEtagere(5);

echo "<table border='1'>";

foreach ($etagere as $cle => $valeur) {
    echo "<tr>";
    echo "<td>" . $cle . "</td>";
    echo "<td>" . $valeur . "</td>";
    echo "</tr>";
}
echo "</table>";



// //c-tous les etageres qui ont la color marron:-----------------------------
echo"<br />";
 echo"c-tous les etageres qui ont la color marron<br />";
 echo"<br />";
$etageres =$oetagere->getALLEtagere('marron');

echo"
     <table border='1'>
         <tr>
         <th>id</th>
             <th>material</th>
             <th>size</th>
             <th>color</th>
             <th>quantite</th>
         </tr>";

         
            foreach($etageres as $etage)
            {
                
             echo '<tr>';
             echo '<td>' . $etage['id'] . '</td>';
             echo '<td>' . $etage['material'] . '</td>';
             echo "<td>" . $etage['size'] . "</td>";
             echo "<td>" . $etage['color'] . "</td>";
             echo "<td>" . $etage['quantite'] . "</td>";
             echo "</tr>";
         }
         echo "</table></body></html>";




//d-ajouter une etagere------------------------------------------
echo"<br />";
echo'd-ajouter une etagere-<br />';
 echo"<br />";
 $oetagere_to_insert=['material'=>'plastique',
                'size'=>'90x50cm',
              'color'=>'marron',
               'quantite'=>16,];
 $etagere_add = $oetagere->ajouteretagere($oetagere_to_insert);
 echo "<table border='1'>";

foreach ($etagere as $cle => $valeur) {
    echo "<tr>";
    echo "<td>" . $cle . "</td>";
    echo "<td>" . $valeur . "</td>";
    echo "</tr>";
}
echo "</table>";
 
//e:modifier une etagere:------------------------------------------


 echo"<br />";
 echo'modifier une etagere<br />';
 echo"<br />";
  $etagere =$oetagere->getEtagere(11);
 // var_dump( $etagere);

 $etagere['quantite']=23;
 $etagere['color']="grise";
$etagere_upd=  $oetagere->updateEtagere(11,$etagere);
 
//var_dump($etagere);
  echo "<table border='1'>";

 foreach ($etagere as $cle => $valeur) {
   echo "<tr>";
   echo "<td>" . $cle . "</td>";
    echo "<td>" . $valeur . "</td>";
   echo "</tr>";
 }
echo "</table>";


//f-supprimer une etagere:----------------------------------
echo"<br />";
 echo"f-supprimer une etagere <br />"; 
 echo"<br />";
 $etagere =$oetagere->getEtagere(89);

$resultat=$oetagere->deleteEtagere(89);
var_dump($resultat);



?>