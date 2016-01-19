<?php
namespace BDApp\SLBundle\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;
use BDApp\SLBundle\Document\Request_builder;
use BDApp\SLBundle\Document\Tweet;
use BDApp\SLBundle\Form\Request_builderForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Request_builderController extends Controller
{
	public function reqAction()
    {
    	$req = new Request_builder();
	  	$form = $this->container->get('form.factory')->create(new Request_builderForm(), $req);

	  	return $this->container->get('templating')->renderResponse(
		'BDAppSLBundle:Request_builder:req.html.twig',
	  	array(
	    	'form' => $form->createView(),
	    	'message' => 'Composer la premire requete'
	  	));
    }
}