<?php

namespace Joberli\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=225, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=225, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="rang", type="integer", nullable=false)
     */
    private $rang;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_reg", type="integer", nullable=false)
     */
    private $dateReg;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_visit", type="integer", nullable=false)
     */
    private $lastVisit;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=224, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=30, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", nullable=false)
     */
    private $settings;

    /**
     * @var string
     *
     * @ORM\Column(name="sess", type="string", length=225, nullable=false)
     */
    private $sess;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=225, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=225, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=225, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=225, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=15, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", nullable=false)
     */
    private $about;


}
