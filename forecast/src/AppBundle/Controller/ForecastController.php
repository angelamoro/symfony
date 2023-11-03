<?php

namespace AppBundle\Controller;

use sensio\bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ForecastController extends Controller
{

    public function indexAction(){
        return new Response ('It\'s freezing cold!');
    }
}
?>