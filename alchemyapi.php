<?php

class AlchemyAPI {
	
	private $_api_key;
	private $_ENDPOINTS;
    private $_BASE_URL = 'http://access.alchemyapi.com/calls';

	public function AlchemyAPI() {
		//Load the API Key from api_key.txt
