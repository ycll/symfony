<?php
namespace App\Helper;

use Psr\Log\LoggerInterface;

trait LoggerTrait
{

    /**
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * @required
     * @param LoggerInterface $markdownLogger
     */
    public function setLogger(LoggerInterface $markdownLogger)
    {
        $this->logger = $markdownLogger;
    }

    /**
     * @return mixed
     */
    public function getLogger()
    {
        return $this->logger;
    }

    private function logInfo(string $message, array $context = [])
    {
        if ($this->getLogger()) {
            $this->getLogger()->info($message, $context);
        }
    }
}
