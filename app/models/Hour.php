<?php

class Hours
{
    public int $hours_id;
    public string $day_of_week;
    public string $opening_time;
    public string $closing_time;

    // GETTERS
    public function getId() : int
    {
        return $this->hours_id;
    }
    public function getDayOfWeek() : string
    {
        return $this->day_of_week;
    }
    public function getOpeningTime() : string
    {
        return $this->opening_time;
    }
    public function getClosingTime() : string
    {
        return $this->closing_time;
    }
}
