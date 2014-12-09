<?php

namespace Joberli\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CiSessions
 *
 * @ORM\Table(name="ci_sessions")
 * @ORM\Entity
 */
class CiSessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=false)
     */
    private $ipAddress = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=120, nullable=false)
     */
    private $userAgent;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_activity", type="integer", nullable=false)
     */
    private $lastActivity = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="user_data", type="text", nullable=false)
     */
    private $userData;


}
