<?php

namespace Joberli\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Node
 *
 * @ORM\Table(name="node")
 * @ORM\Entity
 */
class Node
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
     * @var integer
     *
     * @ORM\Column(name="cat", type="integer", nullable=false)
     */
    private $cat;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="main", type="text", nullable=false)
     */
    private $main;

    /**
     * @var integer
     *
     * @ORM\Column(name="view", type="integer", nullable=false)
     */
    private $view = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_update", type="integer", nullable=false)
     */
    private $dateUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_update", type="integer", nullable=false)
     */
    private $userUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="public", type="integer", nullable=false)
     */
    private $public = '0';


}
