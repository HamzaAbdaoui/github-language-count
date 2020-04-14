<?php
namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

/**
 * HttpRequest class.
 */
class HttpRequest {

	/**
	 * Process a GET API call
	 *
	 * @params string $url
	 * @params array|null $arguments
	 *
	 * @return array|mixed
	 */
	public static function getRequest(string $url, array $arguments = [])
	{
		// Instanciate Symfony HttpClient
		$client = HttpClient::create();
		
		// If there is provided arguments, replace them in the url
		if (true === isset($arguments) && count($arguments) > 0)
			$url = self::setArguments($url, $arguments);
				
		// Get the response from the remote API
		$response = $client->request('GET', $url);

		// Get request status code
		$statusCode = $response->getStatusCode();
		
		if ($statusCode === 200) {
			// Success
			// Get content
			$content = $response->getContent();
			
			// Convert content into PHP Array
			return $response->toArray();
			
		} else {
			throw new \Exception('The request status code is different than 200!', 400);
		}
	}
	
	/**
	 * Set the url arguments
	 *
	 * @params string $url
	 * @params array $arguments
	 *
	 * @return string
	 */
	public static function setArguments(string $url, array $arguments)
	{
		foreach($arguments as $name => $value) {
			$urlParamName = '{'.$name.'}';
			$url = str_replace($urlParamName, $value, $url);
		}
		
		return $url;
	}
}