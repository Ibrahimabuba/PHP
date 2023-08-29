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
			echo 'If you do not have an API Key from AlchemyAPI, please register for one at: http://www.alchemyapi.com/api/register.html', PHP_EOL;
file_put_contents('api_key.txt','');
			exit(1);
		}

		$this->_api_key = $key;

		//Initialize the API Endpoints
		$this->_ENDPOINTS['sentiment']['url'] = '/url/URLGetTextSentiment';
		$this->_ENDPOINTS['sentiment']['text'] = '/text/TextGetTextSentiment';
		$this->_ENDPOINTS['sentiment']['html'] = '/html/HTMLGetTextSentiment';
		$this->_ENDPOINTS['sentiment_targeted']['url'] = '/url/URLGetTargetedSentiment';
		$this->_ENDPOINTS['sentiment_targeted']['text'] = '/text/TextGetTargetedSentiment';
		$this->_ENDPOINTS['sentiment_targeted']['html'] = '/html/HTMLGetTargetedSentiment';
		$this->_ENDPOINTS['author']['url'] = '/url/URLGetAuthor';
		$this->_ENDPOINTS['author']['html'] = '/html/HTMLGetAuthor';
		$this->_ENDPOINTS['keywords']['url'] = '/url/URLGetRankedKeywords';
		$this->_ENDPOINTS['keywords']['text'] = '/text/TextGetRankedKeywords';
		$this->_ENDPOINTS['concepts']['html'] = '/html/HTMLGetRankedConcepts';
		$this->_ENDPOINTS['concepts']['text'] = '/text/TextGetRankedConcepts';
		$this->_ENDPOINTS['concepts']['html'] = '/html/HTMLGetRankedConcepts';
		$this->_ENDPOINTS['concepts']['url'] = '/url/URLGetRankedConcepts';
		$this->_ENDPOINTS['entities']['text'] = '/text/TextGetRankedNamedEntities';
		$this->_ENDPOINTS['entities']['html'] = '/html/HTMLGetRankedNamedEntities';
		$this->_ENDPOINTS['category']['url']  = '/url/URLGetCategory';
		$this->_ENDPOINTS['category']['text'] = '/text/TextGetCategory';
		$this->_ENDPOINTS['category']['html'] = '/html/HTMLGetCategory';
		$this->_ENDPOINTS['relations']['url']  = '/url/URLGetRelations';
		$this->_ENDPOINTS['relations']['text'] = '/text/TextGetRelations';
		$this->_ENDPOINTS['relations']['html'] = '/html/HTMLGetRelations';
		$this->_ENDPOINTS['language']['url']  = '/url/URLGetLanguage';
		$this->_ENDPOINTS['language']['text'] = '/text/TextGetLanguage';
