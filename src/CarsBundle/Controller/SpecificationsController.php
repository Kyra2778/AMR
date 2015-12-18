<?php

namespace CarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CarsBundle\Form\SpecificationsBrandForm;
use CarsBundle\Entity\CarsBrand;
use CarsBundle\Entity\CarsCategory;

class SpecificationsController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarsBundle:Specifications:index.html.twig');
    }

    public function categoryListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CarsBundle:CarsCategory')->findAll();

        return $this->render('CarsBundle:Specifications:category_list.html.twig', array('categories' => $categories));
    }

    public function addCategoryAction()
    {
        $request = $this->get('request');
        $category = new CarsCategory();
        $form = $this->createFormBuilder($category)
            ->add('libelle', 'text')
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($category);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'La catégorie a bien été ajoutée.');

                return $this->redirect($this->generateUrl('category_list', array()));
            }
        }

        return $this->render('CarsBundle:Specifications:category_add.html.twig', array('form' => $form->createView()));
    }

    public function updateCategoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('CarsBundle:CarsCategory')->find($id);

        if ($category) {
            $form = $this->createFormBuilder($category)
                ->add('libelle', 'text')
                ->getForm();

            $request = $this->get('request');

            if ($request->getMethod() == 'POST') {
                $form->bind($request);

                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($category);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('info', 'La catégorie a bien été modifiée.');

                    return $this->redirect($this->generateUrl('category_list', array()));
                }
            }

            return $this->render('CarsBundle:Specifications:category_update.html.twig', array(
                'form' => $form->createView(),
                'id' => $id,
            ));
        }

        return $this->redirect($this->generateUrl('category_list', array()));
    }

    public function deleteCategoryAction($id)
    {
        $carsCategoryManager = $this->get('cars.carsCategory');
        $category = $carsCategoryManager->deleteCarsCategoryById($id);

        if ($category) {
            $this->get('session')->getFlashBag()->add('info', 'La catégorie a bien été supprimée.');
        }
        else {
            $this->get('session')->getFlashBag()->add('info', 'Erreur dans la suppression de la catégorie');
        }

        return $this->redirect($this->generateUrl('category_list', array()));
    }

    public function brandListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $brands = $em->getRepository('CarsBundle:CarsBrand')->findAll();

        return $this->render('CarsBundle:Specifications:brand_list.html.twig', array('brands' => $brands));
    }

    public function addBrandAction()
    {
        $request = $this->get('request');
        $brand = new CarsBrand();
        $form = $this->createFormBuilder($brand)
                    ->add('libelle', 'text')
                    ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($brand);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'La marque a bien été ajoutée.');

                return $this->redirect($this->generateUrl('brand_list', array()));
            }
        }

        return $this->render('CarsBundle:Specifications:brand_add.html.twig', array('form' => $form->createView()));
    }

    public function updateBrandAction($id)
    {
        $em = $this->getDoctrine()->getManager();var_dump($id);
        $brand = $em->getRepository('CarsBundle:CarsBrand')->find($id);

        if ($brand) {
            $form = $this->createFormBuilder($brand)
                ->add('libelle', 'text')
                ->getForm();

            $request = $this->get('request');

            if ($request->getMethod() == 'POST') {
                $form->bind($request);

                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($brand);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('info', 'La marque a bien été ajoutée.');

                    return $this->redirect($this->generateUrl('brand_list', array()));
                }
            }

            return $this->render('CarsBundle:Specifications:brand_update.html.twig', array(
                'form' => $form->createView(),
                'id' => $id,
            ));
        }

        return $this->redirect($this->generateUrl('brand_list', array()));
    }

    public function deleteBrandAction($id)
    {
        $carsBrandManager = $this->get('cars.carsBrand');
        $brand = $carsBrandManager->deleteCarsBrandById($id);

        if ($brand) {
            $this->get('session')->getFlashBag()->add('info', 'La marque a bien été supprimée.');
        }
        else {
            $this->get('session')->getFlashBag()->add('info', 'Erreur dans la suppression de la marque');
        }

        return $this->redirect($this->generateUrl('brand_list', array()));
    }

    public function modelListAction()
    {
        return $this->render('CarsBundle:Specifications:model_list.html.twig', array('models' => array()));
    }
}
