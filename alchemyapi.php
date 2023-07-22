<?php

class AlchemyAPI {
	
	private $_api_key;
	private $_ENDPOINTS;
    private $_BASE_URL = 'http://access.alchemyapi.com/calls';

	public function AlchemyAPI() {
		//Load the API Key from api_key.txt
		$key = trim(file_get_contents("api_key.txt"));
	
		if (!$key) {
			//Keys should not be blank
			echo 'The api_key.txt file appears to be blank, please copy/paste your API key in the file: api_key.txt', PHP_EOL;
