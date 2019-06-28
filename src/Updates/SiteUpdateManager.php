<?php
namespace App\Updates;

use App\Service\MessageGenerator;

class SiteUpdateManager
{
    private $messageGenerator;
    private $mailer;

    public function __construct(MessageGenerator $messageGenerator, \Swift_Mailer $mailer)
    {
        $this->messageGenerator = $messageGenerator;
        $this->mailer           = $mailer;
    }

    public function notifyOfSiteUpdate()
    {
        $happyMessage = $this->messageGenerator->getHappyMessage();

        $message = (new \Swift_Message('Site update just happened!'))
            ->setFrom('yincuilong@126.com')
            ->setTo('yincuilong@xiaozhu.com')
            ->addPart(
                'Someone just updated the site. We told them: ' . $happyMessage
            );

        return $this->mailer->send($message) > 0;
    }
}
