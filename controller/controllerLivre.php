<?php


    include ("../models/Modele.php");
   
        $bd= Database::getInstance();
        $titre=$_POST["titre"];
        $editeur=$_POST["editeur"];
        $prix=$_POST["prix"];
        $qte=$_POST["qte"];
        $dispo= true;

        $bureau = new Livre($bd);
        $bureau->InsererLivre($titre, $editeur,$prix, $dispo, $qte);
      

/*$titre = $_POST["titre"];
$auteur = $_POST["auteur"];
$date = $_POST["date"];

$nomfichier = "Livre.xml";

// Création d'un nouveau fichier XML si inexistant
if (!file_exists($nomfichier)) {
    $xmlContent = '<?xml version="1.0" encoding="iso-8859-1"?>' . "\n" . "<biblio>\n</biblio>";
    file_put_contents($nomfichier, $xmlContent);
}

$xml = simplexml_load_file($nomfichier);

 Si le chargement échoue, on crée un nouveau fichier vide
if ($xml === false) {
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="iso-8859-1"?><biblio></biblio>');
}

Vérifier si le livre existe déjà
$livreExiste = false;
foreach ($xml->livre as $livre) {
    if (
        (string)$livre->titre === $titre &&
        (string)$livre->auteur === $auteur &&
        (string)$livre->date === $date
    ) {
        $livreExiste = true;
        break;
    }
}

 Ajouter un livre s'il n'existe pas encore
if (!$livreExiste) {
    $livre = $xml->addChild('livre');
    $livre->addChild('titre', htmlspecialchars($titre));
    $livre->addChild('auteur', htmlspecialchars($auteur));
    $livre->addChild('date', htmlspecialchars($date));
    echo "Livre ajouté avec succès.<br>";
} else {
    echo "Ce livre existe déjà dans la bibliothèque.<br>";
}

 Enregistrer le XML avec mise en forme manuelle (ajout \n et \t)
$xmlString = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n<biblio>\n";

foreach ($xml->livre as $livre) {
    $xmlString .= "\t<livre>\n";
    $xmlString .= "\t\t<titre>" . htmlspecialchars($livre->titre) . "</titre>\n";
    $xmlString .= "\t\t<auteur>" . htmlspecialchars($livre->auteur) . "</auteur>\n";
    $xmlString .= "\t\t<date>" . htmlspecialchars($livre->date) . "</date>\n";
    $xmlString .= "\t</livre>\n";
}
$xmlString .= "</biblio>";


Sauvegarder le tout
if (file_put_contents($nomfichier, $xmlString)) {
    echo "Opération réussie !";
} else {
    echo "Erreur lors de l'enregistrement du fichier."; 
}*/
?>
