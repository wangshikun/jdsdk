<?php

	namespace JD\api;
	class OpenGetSplitOrdersRequest
	{


		private $apiParas = array();
		private $version;
		private $beginTime;
		private $endTime;
		private $orderState;

		public function getApiMethodName()
		{
			return "jingdong.open.getSplitOrders";
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
			return $this->beginTime;
		}

		public function setBeginTime($beginTime)
		{
			$this->beginTime = $beginTime;
			$this->apiParas["beginTime"] = $beginTime;
		}

		public function getEndTime()
		{
			return $this->endTime;
		}

		public function setEndTime($endTime)
		{
			$this->endTime = $endTime;
			$this->apiParas["endTime"] = $endTime;
		}

		public function getOrderState()
		{
			return $this->orderState;
		}

		public function setOrderState($orderState)
		{
			$this->orderState = $orderState;
			$this->apiParas["orderState"] = $orderState;
		}

	}





        
 

