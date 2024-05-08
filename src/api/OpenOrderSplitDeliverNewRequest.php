<?php

	namespace JD\api;
	class OpenOrderSplitDeliverNewRequest
	{


		private $apiParas = array();
		private $version;
		private $orderExtInfo;
		private $deliverInfo;
		private $json;

		public function getApiMethodName()
		{
			return "jingdong.open.order.splitDeliverNew";
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

		public function getOrderExtInfo()
		{
			return $this->apiParas['orderExtInfo'];
		}

		public function setOrderExtInfo($orderExtInfo)
		{
			$this->apiParas['orderExtInfo'] = $orderExtInfo;
		}

		public function getDeliverInfo()
		{
			return $this->apiParas['deliverInfo'];
		}

		public function setDeliverInfo($deliverInfo)
		{
			$this->apiParas['deliverInfo'] = $deliverInfo;
		}

		public function getJson()
		{
			return $this->apiParas['json'];
		}

		public function setJson($json)
		{
			$this->apiParas['json'] = $json;
		}
	}

	?>