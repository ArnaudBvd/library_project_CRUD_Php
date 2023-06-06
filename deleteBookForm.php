<?php
include("parts/header.php");
include("functions.php");
?>

<h2 class="text-center mb-5 text-uppercase">Delete Book</h2>

<form action="" method="post">
    <label for="connected_user" class="mx-3">"Utilisateur connecté"</label>

    <label for="title" class="mx-3">Titre du livre :</label>
    <input type="text" name="title">

    <input type="submit" value="SUPPRIMER" class="mx-3" id="btn-delete">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    deleteBook();
}
// var_dump($_POST);
include("parts/footer.php");
?>