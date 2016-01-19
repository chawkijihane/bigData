<?php
namespace BDApp\SLBundle\Controller;
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
use BDApp\SLBundle\Document\Tweet;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	private $CONSUMER_KEY = 'kw7uTjsFrnmkJDQL5ha7oxZLR';
	private $CONSUMER_SECRET = 'lfBQSMXd6si5nb4TegCBMe1VLZCbpoOq1O90fANtP0IilMnv9T';
	private $ACCESS_TOKEN = '1665500222-tGoJnmY7Ue2JSQnM3CM6fllaZAtP92lYxOx3SkH';
	private $ACCESS_TOKEN_SECRET = 'MltZcOoX9IqKQKOVxxNLsxzgEAfETttvLvSz6kY7MdiET';

	public function indexAction()
    {
    	$query = array(
		  "q" => "peugeot",
		);
		  
		$results = $this->search($query);
		$dm = $this->get('doctrine_mongodb')->getManager();

		foreach ($results->statuses as $result)
		{
			$tt = new Tweet();
		    $tt->created_at = $result->created_at;
		    $tt->setIdStr($result->id_str);
		    $tt->setText($result->text);
		    $tt->setRetweetCount($result->retweet_count);
		    $tt->setFavoriteCount($result->favorite_count);
		    $tt->setGeo($result->geo);
		    $tt->setCoordonates($result->coordinates);
		    $tt->setUserSreenName($result->user->screen_name);
		    $tt->setUserName($result->user->name);
		    $tt->setUserLocation($result->user->location);
		    $hashtags = array();
		    foreach ($result->entities->hashtags as $tag)
		    {
		     	$hashtags[] = $tag->text;
		    }
		    $tt->setHashtags($hashtags);
		    $dm->persist($tt);
		}
		$dm->flush();
        return $this->render('BDAppSLBundle:Default:index.html.twig', array('name' => 'Enregistrement termine'));
    }

    public function showAction()
    {
    	$tweets = $this->get('doctrine_mongodb')
            ->getRepository('BDAppSLBundle:Tweet')
            ->findAll();

        if (!$tweets) 
        {
            throw $this->createNotFoundException('No tweet found');
        }

        return $this->container->get('templating')->renderResponse('BDAppSLBundle:Default:show.html.twig',array(
         'tweets' => $tweets));
    }

    function search(array $query)
	{
	  $toa = new TwitterOAuth($this->CONSUMER_KEY, $this->CONSUMER_SECRET, $this->ACCESS_TOKEN, $this->ACCESS_TOKEN_SECRET);
	  return $toa->get('search/tweets', $query);
	}
}
