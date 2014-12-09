<?php

namespace Joberli\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ad
 *
 * @ORM\Table(name="ad")
 * @ORM\Entity
 */
class Ad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=225, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="instrtuction", type="text", nullable=false)
     */
    private $instrtuction;

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="runtime", type="integer", nullable=false)
     */
    private $runtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat", type="integer", nullable=false)
     */
    private $cat;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=225, nullable=false)
     */
    private $tag;


}
