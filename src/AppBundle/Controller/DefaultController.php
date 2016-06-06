<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\Type\TourType;
use AppBundle\Entity\Tour;

class DefaultController extends Controller
{
    /**
     * @Route("/",
     *     name="tour home")
     */
    public function indexAction()
    {
        //Выборка сущностей из базы данных
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Tour');

        $tours = $repository->findAll();

        $data = [];
        foreach ($tours as $key => $tour) {
            $data[$key]['id'] = $tour->getId();
            $data[$key]['name'] = $tour->getName();
            $data[$key]['email'] = $tour->getEmail();
            $data[$key]['type'] = $tour->getType();
            $data[$key]['count'] = $tour->getCount();
            $data[$key]['time'] = $tour->getCreatedAt()->format('d.m.Y h:m');
        }

        //Вывод данных в шаблон
        return $this->render('tour/archive.html.twig',
            ['tours' => $data]
        );
    }

    /**
     * @Route("/add", name="add tour")
     */
    public function addAction(Request $request)
    {
        $tour = new Tour();
        $form = $this->createForm(TourType::class, $tour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tour);
            $em->flush();
            $this->addFlash(
                'notice',
                'Thank you! Your order will be processed soon.'
            );
            return $this->redirectToRoute('add tour');
        }

        return $this->render('tour/add.html.twig', [
                'form' => $form->createView(),
            ]
        );
    }
}
