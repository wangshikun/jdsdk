<?php

	namespace JD\api;
	class UnionOpenExtraDeliverymanValidateRequest
	{

		private $apiParas = array();
		private $version;
		private $deliverymanReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.extra.deliveryman.validate";
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

		public function getDeliverymanReq()
		{
			return $this->apiParas['deliverymanReq'];
		}

		public function setDeliverymanReq($deliverymanReq)
		{
			$this->apiParas['deliverymanReq'] = $deliverymanReq;
		}
	}

	?>