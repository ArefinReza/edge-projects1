<?php

namespace App\classes;

class Category
{
    private $db;
    public $categories;
    public function __construct(){
        $this->categories = [
          0 =>[
              'id' => 1,
              'name'=>'National',
          ],
            1 =>[
                'id' => 2,
                'name'=>'International',
            ],
            2 =>[
                'id' => 3,
                'name'=>'Education',
            ],
            3 =>[
                'id' => 4,
                'name'=>'Sports',
            ],
            4 =>[
                'id' => 5,
                'name'=>'Entertainment',
            ],
        ];

//        $this->db = (new Database())->conn;
    }

    public function getCategories(){

        return $this->categories;
//        $sql = "SELECT * FROM categories";
//        $result = $this->db->prepare($sql);
//        $result->execute();
//        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}