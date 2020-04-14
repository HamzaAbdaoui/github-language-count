<?php
namespace App\Manager;

use App\Service\HttpRequest;
use App\Helper\LanguageHelper;

/**
 * Language manager.
 */
class LanguageManager {

	/**
	 * The Github API route url
	 * @var string
	 */
	private $githubUrl = 'https://api.github.com/search/repositories?q=created:{date}&sort=stars&order=desc&page=1&per_page=100';
	
	/**
	 * Lists languages.
	 * This function gets the response from the Github API and counts the language usage
	 *
	 * @params string $date
	 *
	 * @return array
	 */
	public function getLanguages(string $date = '')
	{
		$arguments = [];
		if($date !== '')
			$arguments['date'] = $date;
		
		// Get Github API Response
		$githubResponse = HttpRequest::getRequest($this->githubUrl, $arguments);
		
		// Count Language Usage
		$languagesUse = LanguageHelper::countLanguages($githubResponse['items']);
		
		return $languagesUse;
	}
}