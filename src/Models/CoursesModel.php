<?php

declare(strict_types=1);


namespace App\Models;


use PDO;

class CoursesModel
{
    protected PDO $db;

    public function __construct()
    {

    }

    /**
     * A mock model method, rather than actually using this models PDO connection
     * this method just returns a hard coded array.
     * In reality the model would be using the database connection to do this,
     * we've just hardcoded the data so you don't have to set up a database.
     */
    public function getCourses(): array
    {
        return [
            [
                'name' => 'Full Stack Track',
                'description' => 'Were dedicated to giving you the skills and experience you need for a brilliant new career, with classes available in Bath, Sheffield, or online.'
            ],
            [
                'name' => 'Data Science & Machine Learning',
                'description' => 'This fully remote, online course is designed to help developers and others working in tech progress their skills into data science and machine learning.'
            ]
        ];
    }


}