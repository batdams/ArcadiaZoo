<?php

class Habitat
{
    public int $habitat_id;
    public string $name;
    public string $img_path;
    public string $description;

    // GETTERS
    public function getId() : int
    {
        return $this->habitat_id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getImgPath() : string
    {
        return $this->img_path;
    }
    public function getDescription() : string
    {
        return $this->description;
    }
}
