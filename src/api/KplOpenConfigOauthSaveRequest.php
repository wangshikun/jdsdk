<?php

	namespace JD\api;
	class KplOpenConfigOauthSaveRequest
	{

		private $apiParas = array();
		private $version;
		private $code;
		private $tgt;
		private $appId;
		private $callSource;
		private $callTarget;
		private $client;
		private $clientIp;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.config.oauth.save";
		}

		public function getApiParas()
		{
			if (empty($this->apiParas)) {
				return "{}";
			}
			return json_encode($this->apiParas);
		}

		public function check()
		{

		}

		public function putOtherTextParam($key, $value)
		{
			$this->apiParas[$key] = $value;
			$this->$key = $value;
		}

		public function getVersion()
		{
			return $this->version;
		}

		public function setVersion($version)
		{
			$this->version = $version;
		}

		public function getCode()
		{
			return $this->apiParas['code'];
		}

		public function setCode($code)
		{
			$this->apiParas['code'] = $code;
		}

		public function getTgt()
		{
			return $this->apiParas['tgt'];
		}

		public function setTgt($tgt)
		{
			$this->apiParas['tgt'] = $tgt;
		}

		public function getAppId()
		{
			return $this->apiParas['appId'];
		}

		public function setAppId($appId)
		{
			$this->apiParas['appId'] = $appId;
		}

		public function getCallSource()
		{
			return $this->apiParas['callSource'];
		}

		public function setCallSource($callSource)
		{
			$this->apiParas['callSource'] = $callSource;
		}

		public function getCallTarget()
		{
			return $this->apiParas['callTarget'];
		}

		public function setCallTarget($callTarget)
		{
			$this->apiParas['callTarget'] = $callTarget;
		}

		public function getClient()
		{
			return $this->apiParas['client'];
		}

		public function setClient($client)
		{
			$this->apiParas['client'] = $client;
		}

		public function getClientIp()
		{
			return $this->apiParas['clientIp'];
		}

		public function setClientIp($clientIp)
		{
			$this->apiParas['clientIp'] = $clientIp;
		}
	}

	?>