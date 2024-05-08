<?php

	namespace JD\domain\KplOpenNosecretpaySavetoken;
	class Req
	{

		private $params = array();
		private $id;
		private $deviceId;
		private $token;
		private $remarks;
		private $clientIp;

		function __construct()
		{
			$this->params["@type"] = "com.jd.alpha.config.wrap.NosecretPayTokenReq";
		}

		public function getId()
		{
			return $this->id;
		}

		public function setId($id)
		{
			$this->params['id'] = $id;
		}

		public function getDeviceId()
		{
			return $this->deviceId;
		}

		public function setDeviceId($deviceId)
		{
			$this->params['deviceId'] = $deviceId;
		}

		public function getToken()
		{
			return $this->token;
		}

		public function setToken($token)
		{
			$this->params['token'] = $token;
		}

		public function getRemarks()
		{
			return $this->remarks;
		}

		public function setRemarks($remarks)
		{
			$this->params['remarks'] = $remarks;
		}

		public function getClientIp()
		{
			return $this->clientIp;
		}

		public function setClientIp($clientIp)
		{
			$this->params['clientIp'] = $clientIp;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>