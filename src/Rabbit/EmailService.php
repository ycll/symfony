<?php
namespace App\Rabbit;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

class EmailService implements ConsumerInterface
{

    public function execute(AMQPMessage $msg)
    {
       var_dump($msg->body);
    }

    private function sendVerificationEmail($response) {

        // do something
    }
}