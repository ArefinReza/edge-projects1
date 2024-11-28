<?php

namespace App\classes;

class Gallery
{
    public $galleryImg =[];

    public function __construct()
    {
        $this->galleryImg=[
            0=>[
                'id'=>1,
                'image' => 'slider1.jpg',
                'heading'=>'This is heading for slider 1',
                
            ],
            1=>[
                'id'=>2,
                'image' => 'slider2.jpg',
                'heading'=>'This is heading for slider 1',
                
            ],
            2=>[
                'id'=>3,
                'image' => 'item6.jpg',
                'heading'=>'This is heading for slider 1',
                
            ],
            3=>[
                'id'=>4,
                'image' => 'slider4.jpg',
                'heading'=>'This is heading for slider 1',
                
            ],
            4=>[
                'id'=>5,
                'image' => 'item2.jpg',
                'heading'=>'This is heading for slider 1',
                
            ],
            5=>[
                'id'=>6,
                'image' => 'item3.jpg',
                'heading'=>'This is heading for slider 1',
                
            ],
            6=>[
                'id'=>7,
                'image' => 'item4.jpg',
                'heading'=>'This is heading for slider 1',
                
            ],

        ];
    }
    public function index()
    {
        header("location:action.php?page=gallery");
    }
    public function getGallery()
    {
        return $this->galleryImg;
    }
}