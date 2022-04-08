<?php
session_start ();
if (($_SESSION['login']=="Anthony") and ($_SESSION['pwd']=="1234")){
?>
<?php  
require_once 'header.php';
require_once 'inc/manager-db.php';
$idpays = $_GET['id'];
?>
<h2>Information</h2>
<?php
 $InfoDesPays = getInfoCountry($idpays)?>
<ul class="list-group">
	<?php foreach ($InfoDesPays as $pays ): ?>
  	<li class="list-group-item">Nom : <?php echo $pays->Name ?></li>
	<li class="list-group-item">Acronyme : <?php echo $pays->Code ?></li>
	<li class="list-group-item">Contient : <?php echo $pays->Continent ?></li>
	<li class="list-group-item">Region : <?php echo $pays->Region ?></li>
	<li class="list-group-item">Superficie : <?php echo $pays->SurfaceArea ?></li>
	<li class="list-group-item">Date D'indépendance : <?php echo $pays->IndepYear ?></li>
	<li class="list-group-item">Population : <?php echo $pays->Population ?></li>
	<li class="list-group-item">
Espérance de vie :<?php echo $pays->LifeExpectancy ?>
	<li class="list-group-item">Revenu National Brut : <?php echo $pays->GNP ?>
	<li class="list-group-item">Government : <?php echo $pays->GovernmentForm ?>
	<li class="list-group-item">Nom local : <?php echo $pays->LocalName ?>
	<li class="list-group-item">Dirigeant : <?php echo $pays->HeadOfState ?>
	<li class="list-group-item">Capitale : <?php echo getcapitale($pays->Capital) ?>
	<li class="list-group-item">Matricule : <?php echo $pays->Code2 ?>

	</li>

</ul>
<?php endforeach ; ?>
<?php }
 else{
header ('location: post-login.html');}
?>