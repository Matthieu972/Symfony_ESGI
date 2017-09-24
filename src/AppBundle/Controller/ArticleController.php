<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/articles")
 */
class ArticleController extends Controller
{
    /**
     * @Route("/", name="articles_index")
     * @Method({"GET"})
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Articles/index.html.twig');
    }

    public function createAction(Request $request){
        $article = new Article();
        $form = $this->createForm( type:ArticleType::class, data:$article);

        $form->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist();
            $em-> flush();

            $this->addFlash( type: 'success', message:"L'article {$article->getTitle()} a été créé");
            return $this->redirectToRoute(route: 'articles_index');
        }

        return $this->render(view:'admin/Article/create.html.twig', [
            'article' => $article,
            'form' => $form.$this->createForm();
        ])
    }
}