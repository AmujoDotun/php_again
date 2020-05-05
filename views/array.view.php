<?php

Class Post
{
    protected $title;
    protected $published;


    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->publiched = $published;
    }

}

$posts = [
    new Post('This is the first Post', true),
    new Post('This is the second Post', true),
    new Post('This is the third Post', true),
    new Post('This is the Fourth Post', false)

];

var_dump($posts);
// $post = array_filter($posts, function()
// {

// });