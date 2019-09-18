<?php
namespace App\Consumer;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

class UploadPictureService implements ConsumerInterface
{
    public function execute(AMQPMessage $msg)
    {
        var_dump(unserialize($msg->body));
    }
}