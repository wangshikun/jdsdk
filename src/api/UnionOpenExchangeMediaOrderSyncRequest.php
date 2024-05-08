<?php

	namespace JD\api;
	class UnionOpenExchangeMediaOrderSyncRequest
	{

		private $apiParas = array();
		private $version;
		private $orderReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.exchange.media.order.sync";
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

		public function getOrderReq()
		{
			return $this->apiParas['orderReq'];
		}

		public function setOrderReq($orderReq)
		{
			$this->apiParas['orderReq'] = $orderReq;
		}
	}

	?>