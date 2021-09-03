<?php
require "bootstrap.php";
require "entities/Author.php";
require "entities/Post.php";
require "entities/PostCategory.php";

// Create and persist a new Author
$author = (new entities\Author())
    ->setFirstName("cepot")
    ->setLastName("kurnia")
    ->setEmail("cepot.kurnia@gmail.com");

$entity_manager->persist($author);

$post_category = (new entities\PostCategory())
    ->setName("pendidikan");
$entity_manager->persist($post_category);

// Create a new post
$post = (new entities\Post())
    ->setTitle("pejuang kemerdekaan")
    ->setText("This is a test post")
    ->setAuthor($author)
    ->setPostCategory($post_category)
    ->setDate(new DateTime());

// Add the post the to list of the Author posts. Since we used cascade={"all"}, we
// don't need to persist the post separately: it will be persisted when persisting
// the Author
$author->addPost($post);
$post_category->addPost($post);

// Finally flush and execute the database transaction
$entity_manager->flush();

// Retrieve the author by its last name
// $author = $entity_manager->getRepository('entities\Author')->findOneBy(['last_name' => 'Smith']);
