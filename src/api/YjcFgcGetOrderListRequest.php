<?php

	namespace JD\api;
	class YjcFgcGetOrderListRequest
	{


		private $apiParas = array();
		private $version;
		private $startTime;
		private $endTime;

		public function getApiMethodName()
		{
			return "jingdong.yjc.fgc.getOrderList";
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

		public function getStartTime()
		{
			return $this->startTime;
		}

		public function setStartTime($startTime)
		{
			$this->startTime = $startTime;
			$this->apiParas["startTime"] = $startTime;
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

	}





        
 

