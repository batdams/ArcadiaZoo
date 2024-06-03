<?php

class Service
{
    public int $service_id;
    public string $title;
    public string $img_path;
    public string $description;

    // GETTERS
    public function getId() : int
    {
        return $this->service_id;
    }
    public function getTitle() : string
    {
        return $this->title;
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
