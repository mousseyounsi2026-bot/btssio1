<?php
$pdo = new PDO(
    'mysql:host=db;dbname=tp_crud;charset=utf8mb4',
    'tp_user',
    'tp_password'
);
$resultat = $pdo->query('SELECT id, nom, description, prix, stock FROM produit');
$lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($lignes);
echo '</pre>';

