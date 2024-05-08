<?php

	namespace JD\domain\KplOpenWfpVscQueryCertList;
	class QueryCertListRequestWrap
	{

		private $params = array();
		private $appCode;
		private $businessType;
		private $merchantCode;
		private $token;
		private $clientIp;
		private $clientPort;
		private $source;
		private $operatorPerson;
		private $data;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.RequestWrap";
		}

		public function getAppCode()
		{
			return $this->appCode;
		}

		public function setAppCode($appCode)
		{
			$this->params['appCode'] = $appCode;
		}

		public function getBusinessType()
		{
			return $this->businessType;
		}

		public function setBusinessType($businessType)
		{
			$this->params['businessType'] = $businessType;
		}

		public function getMerchantCode()
		{
			return $this->merchantCode;
		}

		public function setMerchantCode($merchantCode)
		{
			$this->params['merchantCode'] = $merchantCode;
		}

		public function getToken()
		{
			return $this->token;
		}

		public function setToken($token)
		{
			$this->params['token'] = $token;
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

		public function getSource()
		{
			return $this->source;
		}

		public function setSource($source)
		{
			$this->params['source'] = $source;
		}

		public function getOperatorPerson()
		{
			return $this->operatorPerson;
		}

		public function setOperatorPerson($operatorPerson)
		{
			$this->params['operatorPerson'] = $operatorPerson;
		}

		public function setData($data)
		{
			$this->params['data'] = $data->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>