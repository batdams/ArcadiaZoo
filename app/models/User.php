<?php

class User
{
    private int $user_id;
    private string $email;
    private string $password;
    private string $firstname;
    private string $lastname;
    private int $role_id;

    // GETTERS
    public function getId() : int
    {
        return $this->user_id;
    }
    public function getEmail() : string
    {
        return $this->email;
    }
    public function getPassword() : string
    {
        return $this->password;
    }
    public function getFirstname() : string
    {
        return $this->firstname;
    }
    public function getRole_id() : int
    {
        return $this->role_id;
    }
}
