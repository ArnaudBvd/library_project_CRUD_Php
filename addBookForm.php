<?php
include("parts/header.php");
include("functions.php");
?>

<h2 class="text-center mb-5">Create book</h2>

<form action="" method="post">
    <label for="connected_user" class="mx-3">"Utilisateur connecté"</label>

    <label for="title" class="mx-3">Titre du livre :</label>
    <input type="text" name="title">

    <label for="contentBook" class="mx-3">Contenu : </label>
    <input type="text" name="contentBook">

    <input type="submit" value="VALIDER" class="mx-3" id="btn-validate">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    addBook();
}

include("parts/footer.php");
?>