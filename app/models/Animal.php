<?php

class Animal
{
    private int $id;
    private string $name;
    private string $breed_id;
    private string $img_path;
    private string $habitat;

    public function getName() : string
    {
        return $this->name;
    }

    // Méthode pour récupérer la liste des animaux depuis la BDD
    public static function getAllAnimals ($pdo) : array
    {
        $sql = 'SELECT * FROM animal';
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute()) {
            $animals = $stmt->fetchAll(PDO::FETCH_CLASS, 'Animal');
            return $animals;
        }
    }

}