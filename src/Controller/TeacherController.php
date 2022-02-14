<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    
    
    /**
     * @Route("/club", name="club")
     */
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    /**
     * @Route("/list", name="list")
     */
    public function liste(): Response
    {
         $formation =array( 
            array ('ref'=> 'forma147','titre'=>'frmation symm'),
            array('ref'=> 'forma55','titre'=>'frmation java'),
            array('ref'=> 'forma66','titre'=>'frmation soa'));
        return $this->render('list.html.twig',[
            'tab'=>$formation
        ]);
        
    }
    /**
    * @Route("/club/{name}", name="nom")
    */
    public function getName(String $name)
    {
        
        return new Response(
            
            '<html><body>nom: '.$name.'</body></html>'
        );
        
        
       
    }



}
  
