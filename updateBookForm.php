<?php
include("parts/header.php");
?>


<h2 class="text-center mb-5">UPDATE BOOK TITLE</h2>

<form action="" method="post">
    <label for="connected_user" class="mx-3">"Utilisateur connecté"</label>

    <label for="title" class="mx-3">Titre du livre :</label>
    <input type="text" name="title">

    <input type="submit" value="MODIFIER" class="mx-3" id="btn-update">
</form>


<?php
include("parts/footer.php");
?>