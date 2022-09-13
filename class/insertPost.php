<?php
require "./bootstrap.php";
require "./entities/Author.php";
require "./entities/Post.php";
require "./entities/PostCategory.php";
require "./entities/Level.php";

$postCategory = (new entities\PostCategory())
    ->setName("budaya");
$entity_manager->persist($postCategory);

// Create and persist a new Author
$author = (new entities\Author())
    ->setFirstName("John")
    ->setLastName("Smith");
    // ->setEmail("john.smith@gmail.com");
$entity_manager->persist($author);

// Create a new post
$post = (new entities\Post())
    ->setTitle("Hello Wold")
    ->setText("This is a test post")
    ->setAuthor($author)
    ->setCategory($postCategory)
    ->setDate(new DateTime());

// Add the post the to list of the Author posts. Since we used cascade={"all"}, we
// don't need to persist the post separately: it will be persisted when persisting
// the Author
$author->addPost($post);

// Finally flush and execute the database transaction
$entity_manager->flush();

// Retrieve the author by its last name
// $author = $entity_manager->getRepository('entities\Author')->findOneBy(['last_name' => 'Smith']);
