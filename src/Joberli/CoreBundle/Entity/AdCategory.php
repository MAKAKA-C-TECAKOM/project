<?php

namespace Joberli\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdCategory
 *
 * @ORM\Table(name="ad_category")
 * @ORM\Entity
 */
class AdCategory
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
     * @ORM\Column(name="path", type="string", length=225, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=225, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="background", type="string", length=225, nullable=false)
     */
    private $background;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort;

    /**
     * @var integer
     *
     * @ORM\Column(name="public", type="integer", nullable=false)
     */
    private $public;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="integer", nullable=false)
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="index", type="integer", nullable=false)
     */
    private $index = '0';


}
