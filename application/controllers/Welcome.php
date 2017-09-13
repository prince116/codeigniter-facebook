<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function __construct()
	{
		require_once("./vendor/facebook/graph-sdk/src/Facebook/autoload.php");
	}

	public function index()
	{

		$fb = new \Facebook\Facebook([
			'app_id' => '275397639638870',
			'app_secret' => '738c0c5f842c706d51fa34161ee3cc32',
			'default_graph_version' => 'v2.10',
			//'default_access_token' => '{access-token}', // optional
		  ]);
		  
		  // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
		  //   $helper = $fb->getRedirectLoginHelper();
		  //   $helper = $fb->getJavaScriptHelper();
		  //   $helper = $fb->getCanvasHelper();
		    $helper = $fb->getPageTabHelper();
		  $this->var_dump($helper);
			exit();

		  try {
			// Get the \Facebook\GraphNodes\GraphUser object for the current user.
			// If you provided a 'default_access_token', the '{access-token}' is optional.
			$response = $fb->get('/me', 'EAAD6eQJ7j1YBAAq9NOgPYV72cUqpZCebRaFaEvcSLCHj8L6UPgAKLhBkQKtOKDwGRXzcv8vcleBNcdEdxsZCCmDXvZAgoyYN6AO65kNzdjSOlzugCbsLKv9QEo7ZB5ieWrMMRYtZAp9RrDALHfR6ioMbHgpoRmNoqEZCYz1ePzCeTXgrClgqZCtO5qhOHdMKerZA7YCxAUaKGQZDZD');
		  } catch(\Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		  } catch(\Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		  }
		  
		  $me = $response->getGraphUser();
		  echo 'Logged in as ' . $me->getName();

		//   $accessToken = $fb->getValue();

		  $this->var_dump($fb);

		exit();

		$this->load->view('welcome_message');
	}

	public function var_dump($content)
	{
		echo '<pre>';
		var_dump($content);
		echo '</pre>';
	}
}
