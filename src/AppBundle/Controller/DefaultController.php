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
            $data[$key]['type'] = $tour->getType()->getName();
            $data[$key]['count'] = $tour->getCount();
            $data[$key]['time'] = $tour->getCreatedAt()->format('d.m.Y h:m');
            $data[$key]['status'] = $tour->getStatus();
        }

        //Вывод данных в шаблон
        return $this->render('tour/orders.html.twig',
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

    /**
     * @Route("/tours/{tour}",
     *     name="available tours",
     *     defaults={"tour"=""},
     *     requirements={"tour": "\w+"}
     * )
     */
    public function toursListAction($tour)
    {
        $data = [];
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Type');

        if ('' != $tour) {
            $tour = $repository->findOneByName($tour);

            $data['id'] = $tour->getId();
            $data['name'] = $tour->getName();
            $data['price'] = $tour->getPrice();
            $data['description'] = $tour->getDescription();
            $data['date'] = $tour->getDate()->format('d.m.Y h:m');
            $data['duration'] = $tour->getDuration();

            return $this->render('tour/single_tour.html.twig',
                ['tour' => $data]
            );

        } else {
            $tours = $repository->findAll();

            foreach ($tours as $key => $tour) {
                $data[$key]['id'] = $tour->getId();
                $data[$key]['name'] = $tour->getName();
                $data[$key]['price'] = $tour->getPrice();
                $data[$key]['description'] = $tour->getDescription();
                $data[$key]['date'] = $tour->getDate()->format('d.m.Y h:m');
                $data[$key]['duration'] = $tour->getDuration();
            }

            return $this->render('tour/archive.html.twig',
                ['tours' => $data]
            );
        }

    }

    /**
     * @Route("/approve/{id}",
     *     name="approve order",
     *     defaults={"id"=""},
     * )
     */
    public function approveAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Tour');
        $em = $this->getDoctrine()->getManager();
        $order = $repository->findOneById($id);
        $status = $order->getStatus();

        if (false == $status) {
            $order->setStatus(1);
        } else {
            $order->setStatus(0);
        }
        $em->persist($order);
        $em->flush();
        return $this->redirectToRoute('tour home', [], 301);
    }

}
