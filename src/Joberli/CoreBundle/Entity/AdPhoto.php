<?php

namespace Joberli\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdPhoto
 *
 * @ORM\Table(name="ad_photo")
 * @ORM\Entity
 */
class AdPhoto
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
     * @ORM\Column(name="url", type="string", length=225, nullable=false)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="ad", type="integer", nullable=false)
     */
    private $ad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;


}
