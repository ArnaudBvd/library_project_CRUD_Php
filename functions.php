<?php


// CONNEXION A LA BDD
function connectDB(){
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
    }
    catch (Exception $e) {
            
        echo('Erreur connexion à la base de données : '.$e->getMessage());
        
        exit;
       }
}


   // AFFICHER TOUS LES LIVRES DANS L'INDEX
   function getAllBooks()
   {
    $pdo=connectDB();
    $request = $pdo->prepare('SELECT * FROM books');
    $request->execute();
    return $request->fetchAll();
   }


   // AFFICHER LE DETAIL D'UN LIVRE
   function getDetailBook()
   {
    $collect = (int) $_GET['id'];
    $pdo = connectDB();
    $request = $pdo->prepare("SELECT * FROM books WHERE book_id = $collect");
    $request->execute();
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
    return $request->fetchAll();
   }