<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
        $this->load->helper("form");

		$this->load->view('templates/header');
		$this->load->view('demo/form');
		$this->load->view('templates/footer');
    }
    
    public function create()
    {
        // $this->load->helper('url');

        // $title = $this->input->post('title');

		// var_dump($title);

		$response = array();
		
		require_once("./vendor/facebook/graph-sdk/src/Facebook/autoload.php");

		$fb_app = $this->config->item('facebook');

		$fb = new Facebook\Facebook([
			'app_id' => $fb_app['app_id'],
			'app_secret' => $fb_app['app_secret'],
			'default_graph_version' => 'v2.10',
		]);

		$response['data'] = $fb->get('/me');
		echo json_encode($response);
		exit();
		  
		

		// Send the request to Graph
		try {
			$response['data'] = $fb->get('/me');
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error
			$response['err_msg'] = 'Graph returned an error: ' . $e->getMessage();
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
			$response['err_msg'] = 'Facebook SDK returned an error: ' . $e->getMessage();
		}

		/* $helper = $fb->getCanvasHelper();
		
		try {
		  $accessToken = $helper->getAccessToken();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  $response['err_msg'] = 'Graph returned an error: ' . $e->getMessage();
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  $response['err_msg'] = 'Facebook SDK returned an error: ' . $e->getMessage();
		}
		
		if (! isset($accessToken)) {
			$response['err_msg'] = 'No OAuth data could be obtained from the signed request. User has not authorized your app yet.';
		}
		
		// Logged in
		// echo '<h3>Signed Request</h3>';
		$response['signed_request'] = $helper->getSignedRequest();
		
		// echo '<h3>Access Token</h3>';
		$response['access_token'] = $accessToken;
		// $response['access_token'] = $accessToken->getValue(); */

		
		  try {
			// Returns a `Facebook\FacebookResponse` object
			$response = $fb->get('/me?fields=id,name', $accessToken);
		  } catch(Facebook\Exceptions\FacebookResponseException $e) {
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		  } catch(Facebook\Exceptions\FacebookSDKException $e) {
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		  }
		  
		  $user = $response->getGraphUser();
		  
		  echo 'Name: ' . $user['name'];
    }
}
