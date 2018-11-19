<?php 

$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['parcourir']['name']);

/* if (isset($_POST['parcourir']))
{ */
    echo '<img src="'.$_FILES['parcourir']['tmp_name'].'" alt="img">';
//}
/* echo '<pre>';
if (is_uploaded_file($_FILES['parcourir']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);

echo '</pre>'; */

?>
