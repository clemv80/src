<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\SignalementArt;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Signalementart controller.
 *
 */
class SignalementArtController extends Controller
{
    /**
     * Lists all signalementArt entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $signalementArts = $em->getRepository('BlogBundle:SignalementArt')->findAll();

        return $this->render('signalementart/index.html.twig', array(
            'signalementArts' => $signalementArts,
        ));
    }

    /**
     * Creates a new signalementArt entity.
     *
     */
    public function newAction(Request $request)
    {
        $signalementArt = new Signalementart();
        $form = $this->createForm('BlogBundle\Form\SignalementArtType', $signalementArt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($signalementArt);
            $em->flush();

            return $this->redirectToRoute('signalementart_show', array('id' => $signalementArt->getId()));
        }

        return $this->render('signalementart/new.html.twig', array(
            'signalementArt' => $signalementArt,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a signalementArt entity.
     *
     */
    public function showAction(SignalementArt $signalementArt)
    {
        $deleteForm = $this->createDeleteForm($signalementArt);

        return $this->render('signalementart/show.html.twig', array(
            'signalementArt' => $signalementArt,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing signalementArt entity.
     *
     */
    public function editAction(Request $request, SignalementArt $signalementArt)
    {
        $deleteForm = $this->createDeleteForm($signalementArt);
        $editForm = $this->createForm('BlogBundle\Form\SignalementArtType', $signalementArt);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('signalementart_edit', array('id' => $signalementArt->getId()));
        }

        return $this->render('signalementart/edit.html.twig', array(
            'signalementArt' => $signalementArt,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a signalementArt entity.
     *
     */
    public function deleteAction(Request $request, SignalementArt $signalementArt)
    {
        $form = $this->createDeleteForm($signalementArt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($signalementArt);
            $em->flush();
        }

        return $this->redirectToRoute('signalementart_index');
    }

    /**
     * Creates a form to delete a signalementArt entity.
     *
     * @param SignalementArt $signalementArt The signalementArt entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SignalementArt $signalementArt)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('signalementart_delete', array('id' => $signalementArt->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
