<?php
     include ("../models/Modele.php");
    $bd= Database::getInstance();

    $immeuble = new Immeuble($bd);

    $stmt = $immeuble->lireImmeuble();
    $immeubles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Etage.css">
    <title>Enregistrement d'un Etage</title>
</head>
<body>
    <div class="form" >
        <form action="../controller/controllerEtage.php" method="post">
            <h1>Etage</h1>
            <div class="field">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" placeholder="entrer le nom de l'immeuble" required>
            </div>
            <div class="field">
                <label for="nbrebureau">Nbre bureau: </label>
                <input type="number" name="nbrebureau" id="nbrebureau" placeholder="entrer le nombre de bureau" required>
            </div>
            <label for="immeuble">L'immeuble Concerne</label>
            <select name="immeuble" id="immeuble" class="form-select">
                <option selected disabled>Sélectionnez L'immeuble concerne</option>
                    <?php foreach($immeubles as $p): ?>
                        <option value="<?php echo $p['NoImm']; ?>">
                            <?php echo htmlspecialchars($p['nom']); ?>
                        </option>
                    <?php endforeach; ?>
            </select>
            <input type="submit" value="Enregistrer">
            <input type="reset" value="annuler">
        </form>
    </div>
</body>
</html>