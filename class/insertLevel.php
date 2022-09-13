<?php
require "./bootstrap.php";
require "./entities/Level.php";

$post = (new entities\Level())
    ->setName("superuser");
$entity_manager->persist($post);
$entity_manager->flush();
