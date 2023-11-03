<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use symfony\component\HttpFoundation\Request;
use synfony\component\hTTPkernel\Exception;

class CalculatorController extends Controller
{
    public function indexAction($age){
        $currentYear = date("Y");
        $year = $currentYear - $age;
        return $this->render('calculator/index.html.twig', array('year' => $year)); 
    }
    

}
