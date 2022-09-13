<?php
require "./bootstrap.php";
require "./entities/Author.php";
require "./entities/Level.php";

$level=(new entities\Level())->getName(1);
$entity_manager->persist($level);

$post = (new entities\Author())
    ->setFirstName("budi")
    ->setLastName("handoko");
    // ->getLevelId(1);
$entity_manager->persist($post);
$entity_manager->flush();

// $post->addPost