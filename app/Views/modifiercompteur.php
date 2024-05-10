<!DOCTYPE html>
<html>

<head>
    <title>Modifier compteur page</title>
    <meta charset="utf-8" />
</head>
<?= view('header') ?>

<body>
    <div class="container">
        <h1>Modifier Ajout Compteur</h1>

        <form method="post" action="<?php echo base_url('modifiercompteur/modifier'); ?>" class="mt-3">
            <div class="form-group">
                <label for="id">ID :</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="Entrez l'ID" value="<?php echo $compteur['ID'];?>">
            </div>
            <div class="form-group">
                <label for="nomProp">Nom du propriétaire :</label>
                <input type="text" class="form-control" id="nomProp" name="nomProp" value="<?php echo $compteur['Nom_prop'];?>"
                    placeholder="Entrez le nom du propriétaire">
            </div>
            <div class="form-group">
                <label for="numVoie">Numéro de voie :</label>
                <input type="text" class="form-control" id="numVoie" name="numVoie" value="<?php echo $compteur['Num_voie'];?>"
                    placeholder="Entrez le numéro de voie">
            </div>
            <div class="form-group">
                <label for="nomVoie">Nom de la voie :</label>
                <input type="text" class="form-control" id="nomVoie" name="nomVoie" value="<?php echo $compteur['Nom_voie'];?>"
                    placeholder="Entrez le nom de la voie">
            </div>
            <div class="form-group">
                <label for="cp">Code postal :</label>
                <input type="text" class="form-control" id="cp" name="cp" placeholder="Entrez le code postal" value="<?php echo $compteur['CP'];?>">
            </div>
            <div class="form-group">
                <label for="ville">Ville :</label>
                <input type="text" class="form-control" id="ville" name="ville" placeholder="Entrez la ville" value="<?php echo $compteur['Ville'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>

    </div>

</body>

</html>