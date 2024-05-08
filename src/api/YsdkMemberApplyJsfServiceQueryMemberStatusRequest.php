<?php

	namespace JD\api;
	class YsdkMemberApplyJsfServiceQueryMemberStatusRequest
	{


		private $apiParas = array();
		private $version;
		private $requestId;
		private $platformCode;

		public function getApiMethodName()
		{
			return "jingdong.ysdk.MemberApplyJsfService.queryMemberStatus";
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

		public function getRequestId()
		{
			return $this->requestId;
		}

		public function setRequestId($requestId)
		{
			$this->requestId = $requestId;
			$this->apiParas["requestId"] = $requestId;
		}

		public function getPlatformCode()
		{
			return $this->platformCode;
		}

		public function setPlatformCode($platformCode)
		{
			$this->platformCode = $platformCode;
			$this->apiParas["platformCode"] = $platformCode;
		}

	}





        
 

