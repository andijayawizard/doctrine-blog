<?php
namespace entities;

/**
 * @Entity
 * @Table(name="post")
 */
class Post
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
    private $title;

    /**
     * @Column(type="text")
     */
    private $text;

    /**
     * @Column(type="datetime")
     */
    private $date;

    /**
     * @ManyToOne(targetEntity="PostCategory", inversedBy="posts")
     * @JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     * @var \entities\PostCategory
     */
    private $category_id;

    /**
     * Many posts belong to one author
     * @ManyToOne(targetEntity="Author", inversedBy="posts")
     * @JoinColumn(name="author_id", referencedColumnName="id", nullable=false)
     * @var \entities\Author
     */
    private $author_id;

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
     * Set title.
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set author.
     *
     * @param \entities\Author $author
     *
     * @return Post
     */
    public function setAuthor(\entities\Author $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return \entities\Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set category.
     *
     * @param \entities\PostCategory $category
     *
     * @return Post
     */
    public function setCategory(\entities\PostCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \entities\PostCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set categoryId.
     *
     * @param \entities\PostCategory $categoryId
     *
     * @return Post
     */
    public function setCategoryId(\entities\PostCategory $categoryId)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get categoryId.
     *
     * @return \entities\PostCategory
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set authorId.
     *
     * @param \entities\Author $authorId
     *
     * @return Post
     */
    public function setAuthorId(\entities\Author $authorId)
    {
        $this->author_id = $authorId;

        return $this;
    }

    /**
     * Get authorId.
     *
     * @return \entities\Author
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }
}
