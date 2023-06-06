<?php
include("parts/header.php");
include("functions.php");
?>

<h2>Create book</h2>

<form action="" method="post">
    <label for="connected_user">"Utilisateur connecté"</label>

    <label for="title">Titre du livre :</label>
    <input type="text" name="title">

    <label for="contentBook">Contenu : </label>
    <input type="text" name="contentBook">

    <input type="submit" value="VALIDER">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    addBook();
}

include("parts/footer.php");
?>