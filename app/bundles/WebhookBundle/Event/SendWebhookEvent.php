<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\WebhookBundle\Event;

use Joomla\Http\Response;
use Mautic\LeadBundle\Entity\Lead;
use Symfony\Component\EventDispatcher\Event;

class SendWebhookEvent extends Event
{
    /**
     * @var Response
     */
    protected $response;

    /**
     * @var Lead
     */
    private $contact;

    /**
     * @param Response $response
     */
    public function __construct(Response $response, Lead $contact)
    {
        $this->response  = $response;
        $this->contact   = $contact;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return Lead
     */
    public function getContact()
    {
        return $this->contact;
    }
}