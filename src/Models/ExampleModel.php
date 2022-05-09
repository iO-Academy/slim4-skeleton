<?php

declare(strict_types=1);


namespace App\Models;


use PDO;

class ExampleModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}