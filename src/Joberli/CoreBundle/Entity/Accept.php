<?php

namespace Joberli\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accept
 *
 * @ORM\Table(name="accept")
 * @ORM\Entity
 */
class Accept
{
    /**
     * @var integer
     *
     * @ORM\Column(name="0", type="integer", nullable=false)
     */
    private $0 = '0';

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
     * @ORM\Column(name="modul", type="string", length=225, nullable=false)
     */
    private $modul;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=225, nullable=false)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=225, nullable=false)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="1", type="integer", nullable=false)
     */
    private $1 = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="3", type="integer", nullable=false)
     */
    private $3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="2", type="integer", nullable=false)
     */
    private $2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="4", type="integer", nullable=false)
     */
    private $4;


}
