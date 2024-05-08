<?php

	namespace JD\api;
	class OpenOrangeOrderQueryRequest
	{


		private $apiParas = array();
		private $version;
		private $request;

		public function getApiMethodName()
		{
			return "jingdong.open.orange.order.query";
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

		public function getRequest()
		{
			return $this->apiParas['request'];
		}

		public function setRequest($request)
		{
			$this->apiParas['request'] = $request;
		}
	}

	?>