<?php

Class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', true),
    new Post('My Fourth Post', false)

];

//$unpublishedposts = array_filter($posts, function($post){
//        return $post->published === false;
//});
//
//    var_dump($unpublishedposts);
//
//
//$modified = array_map(function($post){
//    return $post->published = true;
//
//}, $posts);
//
////var_dump($modified);
//var_dump($posts);


$titles = array_column($posts, 'title');

var_dump($titles);



