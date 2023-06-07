<?php


// CONNEXION A LA BDD
function connectDB()
{
    try {
        $host = 'localhost';
        $dbName = 'library';
        $user = 'root';
        $password = '';

        return new PDO(
            'mysql:host=' . $host . ';dbname=' . $dbName . ';charset=utf8',
            $user,
            $password
        );
    } catch (Exception $e) {

        echo ('Erreur connexion à la base de données : ' . $e->getMessage());

        exit;
    }
}


// AFFICHER TOUS LES LIVRES DANS L'INDEX
function getAllBooks()
{
    $pdo = connectDB();
    $request = $pdo->prepare('SELECT * FROM books');
    $request->execute();
    return $request->fetchAll();
}


// AFFICHER LE DETAIL D'UN LIVRE
function getDetailBook()
{
    $collect = (int) $_GET['id'];
    $pdo = connectDB();
    $request = $pdo->prepare("SELECT * FROM books WHERE book_id = :book_id");
    $request->execute([
        "book_id" => $collect,
    ]);
    return $request->fetchAll();
}

// AJOUTER UN LIVRE
function addBook()
{
    $pdo = connectDB();
    $request = $pdo->prepare('INSERT INTO books (id_user, title, content) VALUES (:id_user, :title, :content)');
    $request->execute([
        "id_user" => 1,
        "title" => $_POST['title'],
        "content" => $_POST['contentBook'],
    ]);
    header('Location: index.php');
    return $request->fetchAll();
}

// SUPPRIMER UN LIVRE
function deleteBook()
{
    $collect = $_POST['title'];
    $pdo = connectDB();
    $request = $pdo->prepare("DELETE FROM books WHERE title = :title");
    $request->execute([
        "title" => $collect,
    ]);
    header('Location: index.php');
    return $request->fetchAll();
}

// MODIFIER UN LIVRE
// function updateBook()
// {
//     $pdo = connectDB();
//     $request = 
// }
