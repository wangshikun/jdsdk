<?php

	namespace JD\api;
	class KplOpenSeckillKeplerqbRequest
	{

		private $apiParas = array();
		private $version;
		private $client;
		private $clientVersion;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.seckill.keplerqb";
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

		public function getClient()
		{
			return $this->apiParas['client'];
		}

		public function setClient($client)
		{
			$this->apiParas['client'] = $client;
		}

		public function getClientVersion()
		{
			return $this->apiParas['clientVersion'];
		}

		public function setClientVersion($clientVersion)
		{
			$this->apiParas['clientVersion'] = $clientVersion;
		}
	}

	?>