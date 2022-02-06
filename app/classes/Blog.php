<?php


namespace App\classes;


class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return [
            0=>[
                'title' => 'A new Blog',
                'description' =>'Blog Description',
                'author'=>'Riaz',
                'image' =>'6.jpg'
            ],
            1=>[
                'title' => 'Another Blog',
                'description' =>'Blog Description',
                'author'=>'Rubel',
                'image' =>'5.jpg'
            ],
            2=>[
                'title' => 'About Blog',
                'description' =>'Blog Description',
                'author'=>'Himel',
                'image' =>'3.jpg'
            ],
            3=>[
                'title' => 'new Blog',
                'description' =>'Blog Description',
                'author'=>'Rana',
                'image' =>'4.jpg'
            ],
        ];
    }

}