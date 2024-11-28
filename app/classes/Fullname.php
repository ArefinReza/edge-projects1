<?php

namespace App\classes;

class Fullname
{
    private $firstname;
    private $middlename;
    private $lastname;

    // Constructor to set properties
    public function __construct($firstname, $middlename, $lastname)
    {
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
    }

    // Method to get the full name
    public function getFullname()
    {
        return trim($this->firstname . ' ' . $this->middlename . ' ' . $this->lastname);
    }
}
