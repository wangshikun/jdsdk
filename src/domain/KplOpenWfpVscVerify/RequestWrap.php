<?php

	namespace JD\domain\KplOpenWfpVscVerify;
	class RequestWrap
	{

		private $params = array();
		private $merchantCode;
		private $appCode;
		private $token;
		private $source;
		private $businessType;
		private $data;
		private $operatorPerson;
		private $clientIp;
		private $clientPort;
		private $trackerId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.RequestWrap";
		}

		public function getMerchantCode()
		{
			return $this->merchantCode;
		}

		public function setMerchantCode($merchantCode)
		{
			$this->params['merchantCode'] = $merchantCode;
		}

		public function getAppCode()
		{
			return $this->appCode;
		}

		public function setAppCode($appCode)
		{
			$this->params['appCode'] = $appCode;
		}

		public function getToken()
		{
			return $this->token;
		}

		public function setToken($token)
		{
			$this->params['token'] = $token;
		}

		public function getSource()
		{
			return $this->source;
		}

		public function setSource($source)
		{
			$this->params['source'] = $source;
		}

		public function getBusinessType()
		{
			return $this->businessType;
		}

		public function setBusinessType($businessType)
		{
			$this->params['businessType'] = $businessType;
		}

		public function setData($data)
		{
			$this->params['data'] = $data->getInstance();
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getOperatorPerson()
		{
			return $this->operatorPerson;
		}

		public function setOperatorPerson($operatorPerson)
		{
			$this->params['operatorPerson'] = $operatorPerson;
		}

		public function getClientIp()
		{
			return $this->clientIp;
		}

		public function setClientIp($clientIp)
		{
			$this->params['clientIp'] = $clientIp;
		}

		public function getClientPort()
		{
			return $this->clientPort;
		}

		public function setClientPort($clientPort)
		{
			$this->params['clientPort'] = $clientPort;
		}

		public function getTrackerId()
		{
			return $this->trackerId;
		}

		public function setTrackerId($trackerId)
		{
			$this->params['trackerId'] = $trackerId;
		}

	}

	?>