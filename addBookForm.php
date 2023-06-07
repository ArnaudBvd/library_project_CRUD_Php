<?php
include("parts/header.php");
include("functions.php");
?>

<h2 class="text-center mb-5 text-uppercase">Create book</h2>

<div class="d-flex justify-content-center">
    <form action="" method="post">
        <label for="connected_user" class="mx-3">"Utilisateur connecté"</label>

        <label for="title" class="mx-3">Titre du livre :</label>
        <input type="text" name="title">

        <label for="contentBook" class="mx-3">Contenu : </label>
        <input type="text" name="contentBook">

        <input type="submit" value="AJOUTER" class="mx-3" id="btn-validate">
    </form>
</div>

<div class="my-5 d-flex justify-content-center flex-column align-items-center">
    <p class="text-success text-uppercase">Home</p>
    <a href="index.php"><img src="uploads/return.png" width="40px" alt=""></a>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    addBook();
}

include("parts/footer.php");
?>