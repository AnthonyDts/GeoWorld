<?php  require_once 'header.php'; 
session_start ();
if (($_SESSION['login']=="Anthony") and ($_SESSION['pwd']=="1234")){
?>

<?php
require_once 'inc/manager-db.php';
$continent = $_GET['region'];

$desPays = getCountriesByContinent($continent);
?>
               

  <div class="container">
    <h1>Countries in <?php print $continent ?></h1>
    <div>
     <table class="table">
         <tr>
           <th>Nom</th>
           <th>Population</th>
           <th>Capitale</th>
           <th>Drapeau</th>

        
         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
           ?>
          <tr>
            <?php foreach ($desPays as $pays ): ?> 
    <tr> 
  
            <td> <a href="PaysInfo.php?id=<?php echo $pays->id ?>"><?php echo $pays->Name ?></a></td>
            <td> <?php echo $pays->Population ?> </td>
            <td> <?php echo getcapitale($pays->Capital) ?></td>
            <td> <a><img src="images\drapeau\<?php echo $pays->Code2 ?>.png" width="40" height="25" ></a></td>

            
          
           
            
    </tr>
<?php endforeach ; ?>

          </tr>
     </table>
    </div>
    <p>
        <code>
      <?php
       // var_dump($desPays[0]);
        ?>
        </code>
    </p>
    
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
<?php }
 else{
header ('location: post-login.html');}
?>
