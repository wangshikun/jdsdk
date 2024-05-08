<?php

	namespace JD\api;
	class KplOpenYaoOrdersyncListRequest
	{

		private $apiParas = array();
		private $version;
		private $beginTime;
		private $endTime;
		private $state;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.yao.ordersync.list";
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

		public function getBeginTime()
		{
			return $this->apiParas['beginTime'];
		}

		public function setBeginTime($beginTime)
		{
			$this->apiParas['beginTime'] = $beginTime;
		}

		public function getEndTime()
		{
			return $this->apiParas['endTime'];
		}

		public function setEndTime($endTime)
		{
			$this->apiParas['endTime'] = $endTime;
		}

		public function getState()
		{
			return $this->apiParas['state'];
		}

		public function setState($state)
		{
			$this->apiParas['state'] = $state;
		}
	}

	?>