

<h1>Votre Profil</h1>
<?php
echo htmlspecialchars("Vous etes  " .$_POST['name']. " et vous etes ") ;
if ($_POST['case'] == 'femme'){
	$prefixe = 'une ';
}
else
{
	$prefixe ="un";
}
echo  $prefixe." ".$_POST['case'].". Quand vous avez des probleme vous " .$_POST['select']; 

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
 echo "rrrrr";
}
?><br>
<a href="formpass.php">Voici le lien pou le page securise mdpass:kangourou</a>

