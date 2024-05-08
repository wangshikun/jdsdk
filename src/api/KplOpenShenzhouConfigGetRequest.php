<?php

	namespace JD\api;
	class KplOpenShenzhouConfigGetRequest
	{

		private $apiParas = array();
		private $version;
		private $tgt;
		private $appId;
		private $client;
		private $clientIp;
		private $sequence;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.shenzhou.config.get";
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

		public function getSequence()
		{
			return $this->apiParas['sequence'];
		}

		public function setSequence($sequence)
		{
			$this->apiParas['sequence'] = $sequence;
		}
	}

	?>