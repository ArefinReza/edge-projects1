<?php

namespace App\classes;

class Blog
{
    public $blogs = [];
    public $result = []; // Initialize as an empty array

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'categoryId' => 1,
                'title' => 'What is 1st category',
                'description' => 'What is 1st category Description',
                'image' => 'slider1.jpg',
            ],
            1 => [
                'id' => 2,
                'categoryId' => 2,
                'title' => 'What is 2nd category',
                'description' => 'What is 2nd category Description',
                'image' => 'slider2.jpg',
            ],
            2 => [
                'id' => 3,
                'categoryId' => 3,
                'title' => 'What is 3rd category',
                'description' => 'What is 3rd category Description',
                'image' => 'slider3.jpg',
            ],
            3 => [
                'id' => 4,
                'categoryId' => 4,
                'title' => 'What is 4rd category',
                'description' => 'What is 4rd category Description',
                'image' => 'slider4.jpg',
            ],
            4 => [
                'id' => 5,
                'categoryId' => 5,
                'title' => 'What is 5rd category',
                'description' => 'What is 5rd category Description',
                'image' => 'slider1.jpg',
            ],
        ];
    }

    public function getAllBlogs()
    {
        return $this->blogs;
    }

    public function getLastThreeBlog()
    {
        $this->result = []; // Reset result array to avoid contamination from previous calls
        rsort($this->blogs);
        foreach ($this->blogs as $key => $blog) {
            if ($key <= 2) {
                array_push($this->result, $blog);
            } else {
                break;
            }
        }
        return $this->result;
    }

    public function getBlogById($blogId)
    {
        foreach ($this->blogs as $blog) {
            if ($blog['id'] == $blogId) {
                return $blog;
            }
        }
    }

    public function getBlogByCategoryId($categoryId)
    {
        $this->result = []; // Reset result array
        foreach ($this->blogs as $blog) {
            if ($blog['categoryId'] == $categoryId) {
                array_push($this->result, $blog);
            }
        }
        return $this->result;
    }
}
