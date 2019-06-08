<?phpnamespace App\Controller;use App\Entity\Article;use App\Service\MessageGenerator;use Doctrine\ORM\EntityManagerInterface;use Monolog\Logger;use Psr\Log\LoggerInterface;use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;use Symfony\Bundle\FrameworkBundle\Controller\Controller;use Symfony\Component\Cache\Adapter\AdapterInterface;use Symfony\Component\HttpFoundation\JsonResponse;use Symfony\Component\HttpFoundation\Response;use Symfony\Component\HttpKernel\DependencyInjection\ControllerArgumentValueResolverPass;use Symfony\Component\Routing\Annotation\Route;use Symfony\Component\HttpFoundation\Request;class ArticleController extends AbstractController{    /**     * @return Response     * @Route("/t/{token<[\d\.]+>}")     */    public function test(MessageGenerator $messageGenerator)    {        $message = $messageGenerator->getHappyMessage();        return new Response($message);    }    /**     * @Route("/")     * @param LoggerInterface $logger     * @return Response     */    public function homepage(LoggerInterface $logger)    {        $logger->info('hi, symfony4');        return new Response('hello symfony');    }    /**     * @param $slug     * @param LoggerInterface $logger     * @param EntityManagerInterface $em     * @return Response     * @Route("/news/{slug}");     */    public function show($slug, LoggerInterface $logger, EntityManagerInterface $em)    {        $logger->info('Article is being hearted!');//        dump($slug, $this);        $repository = $em->getRepository(Article::class);        $article = $repository->findOneBy(['slug' => $slug]);        if (is_null($article)) {            throw $this->createNotFoundException(sprintf('No article for slug "%s"', $slug));        }        return $this->render('article/show.html.twig', [            'article' => $article,//            'comments' => $comments,        ]);    }    /**     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"post"})     */    public function toggleArticleHeart()    {        return new JsonResponse(['heart' => rand(5, 100)]);    }    /**     * @Route("tt")     */    public function log(AdapterInterface $cache)    {        var_export($cache);        echo 111;    }    public function tttt()    {    }}