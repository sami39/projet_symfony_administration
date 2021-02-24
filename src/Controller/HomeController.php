<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Stagaire;
use App\Form\StagaireType;
use App\Form\CandidatureType;
use App\Entity\Candidature;
use App\Entity\Entreprise;
use App\Form\EntrepriseType;
use App\Repository\StagaireRepository;
use App\Repository\EntrepriseRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CandidatureRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(StagaireRepository $StagaireRepository): Response
    { $projets=$StagaireRepository->findAll();
        return $this->render('home/index.html.twig',[
      
          'projets'=>$projets
        ]);
    }


  /**
     * @Route("home/administration/{id}", name="admin")
     */
public function new(Request $request,StagaireRepository $StagaireRepository,User $user){
    $projects= new Stagaire();
    $form =$this->createForm(StagaireType::class,$projects);
    $form->handleRequest($request);
    $projets=$StagaireRepository->findAll();
    if($form->isSubmitted() && $form->isValid()){
   $entityManager =$this->getDoctrine()->getManager();
   
   $projects->setCompte($user);
   
   $entityManager->persist($projects);
   $entityManager->flush();
   return $this->redirect($request->getUri());
    }
    return $this->render('home/home.html.twig',[
      'form'=>$form->createView(),
      'projets'=>$projets
    ]);
  
  }


     /**
     * @Route("home/administration/fiche_apprenent/{id}", name="aprenant")
     */
    public function Fstagire(StagaireRepository $StagaireRepository): Response

    { $user = $this->getUser();
      $id = $user->getId();
      $projets=$StagaireRepository->findByExampleField($id);
      
        return $this->render('home/info_stagaire.html.twig',[
      
          'projets'=>$projets
        ]);
    }
    /**
     * @Route("profile/home/administration/edit/{id}", name="projet_edit")
     */
     
    public function edit(Request $request, Stagaire $projects):Response{
       
      $entityManager = $this->getDoctrine()->getManager();
       
       
      $form =$this->createForm(StagaireType::class,$projects);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
      
     $entityManager->persist($projects);
     $entityManager->flush();
     return $this->redirectToRoute('home');
     

      }
      return $this->render('home/edit.html.twig',[
        'editForm'=>$form->createView()]);
      }
       /**
 * @Route("profile/home/administration/delete/{id}", name="delete_projet")
 */
public function delete(Request $request, stagaire $projects):Response{
   
  $entityManager = $this->getDoctrine()->getManager();
     $entityManager->remove($projects);
    $entityManager->flush();
     return $this->redirectToRoute('admin');
}
 /**
     * @Route("home/administration/candidature/{id}", name="candidature")
     */
    public function Candidat(Request $request, CandidatureRepository $CandidatureRepository,User $user){
     
      $projets=$CandidatureRepository->findByExampleField($user);
      $projects= new Candidature ();
      $formm =$this->createForm(CandidatureType::class,$projects);
      $formm->handleRequest($request);
     
      if($formm->isSubmitted() && $formm->isValid()){
        $projects->setCategory($user);
     $entityManager =$this->getDoctrine()->getManager();
     
     
     
     $entityManager->persist($projects);
     $entityManager->flush();
     return $this->redirect($request->getUri());
      }
      return $this->render('home/candidature.html.twig',[
        'formcandidat'=>$formm->createView(),
    
      ]);
    
    }
    /**
     * @Route("home/administration/candidature/entreprise/{id}", name="ajouentreprise")
     */
    public function AjoutE(Request $request, EntrepriseRepository  $EntrepriseRepository){
     
     
      $projects= new Entreprise ();
      $formm =$this->createForm(EntrepriseType::class,$projects);
      $formm->handleRequest($request);
     
      if($formm->isSubmitted() && $formm->isValid()){
         
     $entityManager =$this->getDoctrine()->getManager();
     
     
     
     $entityManager->persist($projects);
     $entityManager->flush();
     return $this->redirect($request->getUri());
      }
      return $this->render('home/Entreprise.html.twig',[
        'formEntreprise'=>$formm->createView(),
    
      ]);
    
    }
       /**
     * @Route("home/administration/fiche_candidature/{id}", name="fiche_candidature")
     */
    public function Candidature(CandidatureRepository $candidatureRepository): Response

    { $user = $this->getUser();
      $id = $user->getId();
      $projets= $candidatureRepository->findByExampleField($id);
       
        return $this->render('home/FicheCandidature.html.twig',[
      
          'fichecandidature'=>$projets
        ]);
    }
     /**
     * @Route("profile/home/administration/fiche_candidature/edit/{id}", name="editcandidature")
     */
     
    public function editCandidature(Request $request, Candidature $projects):Response{
       
      $entityManager = $this->getDoctrine()->getManager();
       
       
      $form =$this->createForm(CandidatureType::class,$projects);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
      
     $entityManager->persist($projects);
     $entityManager->flush();
     return $this->redirect($request->getUri());
     

      }
      return $this->render('home/CandidatureEdit.html.twig',[
        'formEditcandidature'=>$form->createView(),
    
      ]);
      }
            /**
 * @Route("profile/home/administration/fiche_candidature/delete/{id}", name="delete_candidature")
 */
public function deletecandidature(Request $request, Candidature $projects):Response{
   
  $entityManager = $this->getDoctrine()->getManager();
     $entityManager->remove($projects);
    $entityManager->flush();
    return $this->redirectToRoute('fiche_candidature');


}
}