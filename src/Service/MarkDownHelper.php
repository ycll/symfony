<?php
namespace App\Service;

use App\Helper\LoggerTrait;
use Michelf\MarkdownInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;

class MarkDownHelper
{

    use LoggerTrait;

    /**
     * @var MarkdownInterface
     */
    private $markdown;
    /**
     * @var AdapterInterface
     */
    private $cache;

    public function __construct(AdapterInterface $cache, MarkdownInterface $markdown)
    {
        $this->markdown = $markdown;
        $this->cache    = $cache;
    }

    public function parse(string $source): string
    {
//        var_export($this->getLogger());exit;exit
        $this->logInfo('12344321');
        $item = $this->cache->getItem('markdown_' . md5($source));
        if (!$item->isHit()) {
            $item->set($this->markdown->transform($source));
            $this->cache->save($item);
        }
        return $item->get();
    }
}