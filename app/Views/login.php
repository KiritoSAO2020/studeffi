<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <meta charset="utf-8" />
</head>
<?= view('header') ?>

<body>
    <div class="container">
        <h1>Page login</h1>
        <h2 class="mt-5">Formulaire de Connexion</h2>

        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
        <?php endif; ?>

        <form method="post" action="<?php echo base_url('Login/auth'); ?>" class="mt-3">
            <div class="form-group">
                <label for="login">Login :</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>

</body>

</html>