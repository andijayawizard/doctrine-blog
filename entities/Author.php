<?php
namespace entities;

/**
 * @Entity
 * @Table(name="author")
 */
class Author
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="smallint")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $first_name;

    /**
     * @Column(type="string")
     */
    private $last_name;
    /** @Column(type="string") **/
    private $email;
    /**
     * One author can write many post
     * @OneToMany(targetEntity="Post", mappedBy="author", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    private $posts;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return Author
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return Author
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add post.
     *
     * @param \entities\Post $post
     *
     * @return Author
     */
    public function addPost(\entities\Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post.
     *
     * @param \entities\Post $post
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePost(\entities\Post $post)
    {
        return $this->posts->removeElement($post);
    }

    /**
     * Get posts.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Author
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
