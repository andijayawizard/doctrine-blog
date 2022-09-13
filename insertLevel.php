<?php
require "bootstrap.php";
require "entities/Level.php";

$post = (new entities\Level())
    ->setName("guest");
$entity_manager->persist($post);
$entity_manager->flush();
