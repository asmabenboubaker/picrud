<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Repository\StudentRepository;
use App\Entity\Student;
use App\Form\StType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
    /** 
     * @Route("/fetchstudent", name="student_list")
     */
    public function fetchStudents()
    {
       
        $result=$this->getDoctrine()->getRepository(Student::class)->findAll();
        
        //dd($result);
        return $this->render('student/index.html.twig',[ 'st'=>  $result
    ]);
        
    }
    /** 
     * @Route("/supp/{id}", name="supp")
     */
    public function detail($id)
    {
       
        $result=$this->getDoctrine()->getRepository(Student::class)->find($id);
        
        //dd($result);
        return $this->render('detail.html.twig',[ 'st'=>  $result
    ]);
        
    }
     /** 
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(Request $request,$id)
    {
        $result1=$this->getDoctrine()->getRepository(Student::class)->findAll();
        $result=$this->getDoctrine()->getRepository(Student::class)->find($id);
        
        $entityManager=$this->getDoctrine()->getManager();
        $entityManager->remove($result);
        $entityManager->flush();
        $response = new Response();
        $response->send();
        return $this->redirectToRoute('student_list');
    
        
    }
    /** 
     * @Route("/add", name="add")
     * Method({"GET","POST"})
     */
    public function new(Request $request){
    $Student = new Student();
    $form = $this->createFormBuilder($Student)
    ->add('nom',TextType::class)
    ->add('prenom',TextType::class)
    ->add('dateNai',TextType::class)
    ->add('save', SubmitType::class, array('label'=>'Créer')
    )->getForm();

     $form->handleRequest($request);
    
    if($form->isSubmitted() && $form->isValid()){
        $Student = $form->getData();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($Student);
        $entityManager->flush();

        return $this->redirectToRoute('student_list');

    }
    return $this->render('student/new.html.twig', ['form' => $form->createView()]);

    }
    /** 
     * @Route("/add2", name="add2")
     * Method({"GET","POST"})
     */
    public function addStudent(Request $request){
        
    $st=new student();
$form=$this->createForm(stType::class,$st);
$form->handleRequest($request);
if($form->isSubmitted()){
$em=$this->getDoctrine()->getManager();
$em->persist($st);
$em->flush();
return $this->redirectToRoute('student_list');
        }
return $this->render('student/add.html.twig', ['f' => $form->createView()]);
    }
     /** 
     * @Route("/update2/{id}", name="update2")
     * Method({"GET","POST"})
     */
    public function update(Request $request,StudentRepository $repo,$id){
        
        $st=$repo->find($id);
        
    $form=$this->createForm(stType::class,$st);
    $form->handleRequest($request);
    if($form->isSubmitted()){
    $em=$this->getDoctrine()->getManager();
    //$em->persist($st);
    $em->flush();
    return $this->redirectToRoute('student_list');
            }
    return $this->render('student/add.html.twig', ['f' => $form->createView()]);
        }

/** 
 * @Route("/edit/{id}", name="edit")
 * Method({"GET","POST"})
 */

 public function edit(Request $request,$id){
     $student=new Student();
     $student=$this->getDoctrine()->getRepository(Student::class)->find($id);
    $form =$this->createFormBuilder($student)
    ->add('nom', TextType::class)
    ->add('prenom',TextType::class)
    ->add('dateNai',TextType::class)
    ->add('save', SubmitType::class, array('label'=>'Modifier'
    ))->getForm();

    $form->handleRequest($request);
    
    if($form->isSubmitted() && $form->isValid())
       {

       $Student = $form->getData();

        $entityManager = $this->getDoctrine()->getManager();
        //$entityManager->persist($Student);
        $entityManager->flush();

        return $this->redirectToRoute('student_list');
       }
       return $this->render('student/edit.html.twig', ['form' => $form->createView()]);
 


    }

}
