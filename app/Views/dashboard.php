<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <meta charset="utf-8">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h1>Page DASHBOARD - Bienvenue <?= $nom ?></h1>
            </div>
        </div>
        <div class="container">
            <h2 class="text-center">Tableau des Informations</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Propriétaire</th>
                        <th>N° Voie</th>
                        <th>Nom Voie</th>
                        <th>Code Postal</th>
                        <th>Ville</th>
                        <th>Code Insee</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($compteurs as $compteur): ?>
                        <tr>
                            <td><?php echo $compteur['ID']; ?></td>
                            <td><?php echo $compteur['Nom_prop']; ?></td>
                            <td><?php echo $compteur['Num_voie']; ?></td>
                            <td><?php echo $compteur['Nom_voie']; ?></td>
                            <td><?php echo $compteur['CP']; ?></td>
                            <td><?php echo $compteur['Ville']; ?></td>
                            <td><?php echo $compteur['Code_Insee']; ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <!-- Bouton pour supprimer un compteur par ID -->
                                    <form action="<?php echo base_url('/dashboard/deleteCompteur'); ?>" method="post"
                                        style="margin-right: 5px;">
                                        <input type="hidden" name="id" value="<?php echo $compteur['ID']; ?>">
                                        <button class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip"
                                            data-placement="top" title="Delete">Supprimer</button>
                                    </form>
                                    <!-- Bouton pour mettre à jour un compteur par ID -->
                                    <form action="<?php echo base_url('/dashboard/modifierCompteur'); ?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $compteur['ID']; ?>">
                                        <button class="btn btn-warning btn-sm rounded-0" type="submit" data-toggle="tooltip"
                                            data-placement="top" title="Update">Update</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>