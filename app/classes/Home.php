<?php

namespace App\classes;

class Home
{
    public $slider =[];

    public function __construct()
    {
        $this->slider=[
            0=>[
                'id'=>1,
                'image' => 'slider1.jpg',
                'heading'=>'This is heading for slider 1',
                'textp'=>'This is text for slider 1. It is very beautiful',
                'button'=>'Read More'
            ],
            1=>[
                'id'=>2,
                'image' => 'slider2.jpg',
                'heading'=>'This is heading for slider 1',
                'textp'=>'This is text for slider 1. It is very beautiful',
                'button'=>'Read More'
            ],
            2=>[
                'id'=>3,
                'image' => 'slider3.jpg',
                'heading'=>'This is heading for slider 1',
                'textp'=>'This is text for slider 1. It is very beautiful',
                'button'=>'Read More'
            ],
            3=>[
                'id'=>4,
                'image' => 'slider4.jpg',
                'heading'=>'This is heading for slider 1',
                'textp'=>'This is text for slider 1. It is very beautiful',
                'button'=>'Read More'
            ],

        ];
    }
    public function index()
    {
        header("location:action.php?page=home");
    }
    public function getSlider()
    {
        return $this->slider;
    }
}