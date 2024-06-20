<?php

class Animal
{
    private int $animal_id;
    private string $name;
    private string $breed_id;
    private string $img_path;
    private string $diet;
    private string $habitat_id;
    private string $description;

    // GETTERS
    public function getId() : int
    {
        return $this->animal_id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getBreed() : string
    {
        return $this->breed_id;
    }
    public function getImgPath() : string
    {
        return $this->img_path;
    }
    public function getDiet() : string
    {
        return $this->diet;
    }
    public function getHabitat() : string
    {
        return $this->habitat_id;
    }
    public function getDescription() : string
    {
        return $this->description;
    }

}