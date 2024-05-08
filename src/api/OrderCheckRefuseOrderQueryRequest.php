<?php

	namespace JD\api;
	class OrderCheckRefuseOrderQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $date;
		private $page;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.order.checkRefuseOrder.query";
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

		public function getDate()
		{
			return $this->apiParas['date'];
		}

		public function setDate($date)
		{
			$this->apiParas['date'] = $date;
		}

		public function getPage()
		{
			return $this->apiParas['page'];
		}

		public function setPage($page)
		{
			$this->apiParas['page'] = $page;
		}
	}

	?>