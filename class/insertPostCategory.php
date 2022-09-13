<?php
require "./bootstrap.php";
require "./entities/PostCategory.php";

$postCategory = (new entities\PostCategory())
    ->setName("sosial");
$entity_manager->persist($postCategory);
$entity_manager->flush();
