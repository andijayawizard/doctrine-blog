<?php
namespace entities;

/**
* @Entity
* @Table(name="post_category")
*/
class PostCategory {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="smallint")
     */
    private $id;

    /** @Column(type="string") **/
    private $name;

    /**
     * One post_category can write many post
     * @OneToMany(targetEntity="Post", mappedBy="post_category", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    // private $posts;

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
     * Set name.
     *
     * @param string $name
     *
     * @return PostCategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * @return PostCategory
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
}
