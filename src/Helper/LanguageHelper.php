<?php
namespace App\Helper;

class LanguageHelper {

	/**
	 * Lists languages.
	 *
	 * @params string $date
	 *
	 * @return array
	 */
	public static function countLanguages(array $response)
	{
		$stats = [];
		
		// Loop yje items
		foreach($response as $order => $details) {
			// Get the language
			$language = (string) $details['language'];
			if ($language === '')
				$language = 'undefined';
			// Get the repository name
			$repoName = (string) $details['full_name'];
			
			if (true === isset($stats[$language])) {
				// An already detected language
				$stats[$language]['count']++;
			} else {
				// A new language
				$stats[$language]['count'] = 1;
			}
			// Append the repository name
			$stats[$language]['repos'][] = $repoName;
		}
		
		return $stats;
	}
}