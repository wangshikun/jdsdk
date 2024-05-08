<?php

	namespace JD\api;
	class YsdkMemberApplyJsfServiceSaveMemberAndProtocolInfoRequest
	{


		private $apiParas = array();
		private $version;
		private $memberAndProtocolInfoJson;

		public function getApiMethodName()
		{
			return "jingdong.ysdk.MemberApplyJsfService.saveMemberAndProtocolInfo";
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

		public function getMemberAndProtocolInfoJson()
		{
			return $this->memberAndProtocolInfoJson;
		}

		public function setMemberAndProtocolInfoJson($memberAndProtocolInfoJson)
		{
			$this->memberAndProtocolInfoJson = $memberAndProtocolInfoJson;
			$this->apiParas["memberAndProtocolInfoJson"] = $memberAndProtocolInfoJson;
		}

	}





        
 

