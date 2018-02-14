<?php

namespace Hotel\ProjectBundle\Controller;

use Hotel\ProjectBundle\Entity\PruebaIridianBD;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pruebairidianbd controller.
 *
 */
class PruebaIridianBDController extends Controller
{
    /**
     * Lists all pruebaIridianBD entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pruebaIridianBDs = $em->getRepository('ProjectBundle:PruebaIridianBD')->findAll();

        return $this->render('pruebairidianbd/index.html.twig', array(
            'pruebaIridianBDs' => $pruebaIridianBDs,
        ));
    }

    /**
     * Creates a new pruebaIridianBD entity.
     *
     */
    public function newAction(Request $request)
    {
        $pruebaIridianBD = new Pruebairidianbd();
        $form = $this->createForm('Hotel\ProjectBundle\Form\PruebaIridianBDType', $pruebaIridianBD);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pruebaIridianBD);
            $em->flush();

            return $this->redirectToRoute('pruebairidianbd_show', array('id' => $pruebaIridianBD->getId()));
        }

        return $this->render('pruebairidianbd/new.html.twig', array(
            'pruebaIridianBD' => $pruebaIridianBD,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pruebaIridianBD entity.
     *
     */
    public function showAction(PruebaIridianBD $pruebaIridianBD)
    {
        $deleteForm = $this->createDeleteForm($pruebaIridianBD);

        return $this->render('pruebairidianbd/show.html.twig', array(
            'pruebaIridianBD' => $pruebaIridianBD,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pruebaIridianBD entity.
     *
     */
    public function editAction(Request $request, PruebaIridianBD $pruebaIridianBD)
    {
        $deleteForm = $this->createDeleteForm($pruebaIridianBD);
        $editForm = $this->createForm('Hotel\ProjectBundle\Form\PruebaIridianBDType', $pruebaIridianBD);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pruebairidianbd_edit', array('id' => $pruebaIridianBD->getId()));
        }

        return $this->render('pruebairidianbd/edit.html.twig', array(
            'pruebaIridianBD' => $pruebaIridianBD,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pruebaIridianBD entity.
     *
     */
    public function deleteAction(Request $request, PruebaIridianBD $pruebaIridianBD)
    {
        $form = $this->createDeleteForm($pruebaIridianBD);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pruebaIridianBD);
            $em->flush();
        }

        return $this->redirectToRoute('pruebairidianbd_index');
    }

    /**
     * Creates a form to delete a pruebaIridianBD entity.
     *
     * @param PruebaIridianBD $pruebaIridianBD The pruebaIridianBD entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PruebaIridianBD $pruebaIridianBD)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pruebairidianbd_delete', array('id' => $pruebaIridianBD->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
