<?php
require "bootstrap.php";
require "entities/PostCategory.php";

$postCategory = (new entities\PostCategory())
    ->setName("humanity");
$entity_manager->persist($postCategory);
$entity_manager->flush();
