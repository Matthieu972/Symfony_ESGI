<?php
/**
 * Created by PhpStorm.
 * User: Matthieu
 * Date: 15/09/2017
 * Time: 17:50
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity
 */
Class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    private $createdAt;
    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */

    private $title;
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */

    private $content;
    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return string;
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this->title;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return string
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * @param string $content
     * @return string
     */

    public function setContent($content)
    {
        $this->content = $content;
        return $this->content;
    }
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */


}