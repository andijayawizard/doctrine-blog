<?php
require "bootstrap.php";
require "entities/Author.php";

$post = (new entities\Author())
    ->setFirstName("budi")
    ->setLastName("handoko")
    ->setLevelId(1);
$entity_manager->persist($post);
$entity_manager->flush();
