<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Fortune;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
//use AppBundle\Form\FortuneType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // $quotes = $this->getDoctrine()->getRepository("AppBundle:Fortune")->findAll();
        // dump($quotes);

        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'quotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->findLasts()
        ));
    }

    /**
     * @Route("/voteup/{id}", name="voteup")
     */
    public function voteUpAction(Request $request, $id)
    {
        if ($this->get('session')->has("s-".$id)){
            return $this->redirectToRoute("homepage");
        }
        $this->get('session')->set("s-".$id,$id);
        $quote = $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id);
        $quote->voteUp();
        $this->getDoctrine()->getManager()->Flush();
        return $this->redirectToRoute("homepage");
    }
    /**
     * @Route("/votedown/{id}", name="votedown")
     */
    public function voteDownAction(Request $request, $id)
    {
        if ($this->get('session')->has("s-".$id)){
            return $this->redirectToRoute("homepage");
        }
        $this->get('session')->set("s-".$id,$id);
        $quote = $this->getDoctrine()->getRepository("AppBundle:Fortune")->find($id);
        $quote->voteDown();
        $this->getDoctrine()->getManager()->Flush();
        return $this->redirectToRoute("homepage");
    }

    /**
     * @Route("/best", name="rated")
     */

    public function showRatedBest(Request $request)
    {
      return $this->render('default/best.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
          'bestQuotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->bestRated(),

      ));
    }

    /**
     * @Route("/worst", name="rateds")
     */

    public function showRatedWorst(Request $request)
    {
      return $this->render('default/worst.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
          'worstQuotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->worstRated(),
      ));
    }

    /**
     * @Route("/by_author/{author}", name="author")
     */

    public function showByAuthorAction(Request $request, $author)
    {
      return $this->render('default/author.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
          'quotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->findLasts(),
          'authorQuotes' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->findByAuthor($author),
      ));
    }
    /**
     * @Route("/new", name="create")
     */
    public function createAction(Request $request)
    {
        $form = $this->createFormBuilder(new Fortune())
            ->add('title')
            ->add('author')
            ->add('content')
            //->add('categorie')
            ->add('categorie', 'choice', array(
                'choice_list' => new ChoiceList(
                    array('Humour', 'Animaux', 'Argent', 'Enfants', 'Travail', 'Santé', 'Inclassable'),
                    array('Humour', 'Animaux', 'Argent', 'Enfants', 'Travail', 'Santé', 'Inclassable')
                )
            ))
            ->add('submit', 'submit')

            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getdata());
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('default/new.html.twig', array('form'=>$form->createView()));


    }

    /**
     * @Route("/idquote/{id}", name="id")
     * @Route("/newComment{id}", name="newComment")
     */


    public function showQuote(Request $request, $id)
    {

        $form = $this->createFormBuilder(new Comment())
            ->add('author')
            ->add('comment')
            ->add('submit', 'submit')

            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager("AppBundle:Fortune")->find($id);
            $em->persist($form->getdata());
            $em->flush();
            return $this->redirectToRoute('newComment/{id}');
        }



        return $this->render('default/idquote.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'quoteunique' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->getQuoteId($id),
            'form'=>$form->createView(),
            //'quoteunique' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->getQuoteId($id),

        ));
    }

    /**
     * @Route("/categorie/{categorie}", name="categorie")
     */

    public function showCategorie(Request $request, $categorie)
    {
      return $this->render('default/categorie.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
          'laCategorie' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->getCategorie($categorie),
//var_dump($this->getDoctrine()->getRepository("AppBundle:Fortune")->getQuoteId($id))
          //'quoteunique' => $this->getDoctrine()->getRepository("AppBundle:Fortune")->getQuoteId($id),
      ));
    }

}
