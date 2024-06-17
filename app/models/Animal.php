<?php

class Animal
{
    private int $animal_id;
    private string $name;
    private string $breed_id;
    private string $img_path;
    private string $habitat;

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
    public function getHabitat() : string
    {
        return $this->habitat;
    }

}