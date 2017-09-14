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
		
		require_once("../vendor/composer/autoload_real.php");

		$fb = new Facebook\Facebook([
			'app_id' => $this->config['facebook']['app_id'],
			'app_secret' => $this->config['facebook']['app_secret'],
			'default_graph_version' => 'v2.10',
			]);
		  
		  try {
			// Returns a `Facebook\FacebookResponse` object
			$response = $fb->get('/me?fields=id,name', '{access-token}');
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
