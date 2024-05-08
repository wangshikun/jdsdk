<?php

	namespace JD\api;
	class UserGetUserInfoByOpenIdRequest
	{


		private $apiParas = array();
		private $version;
		private $openId;

		public function getApiMethodName()
		{
			return "jingdong.user.getUserInfoByOpenId";
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

		public function getOpenId()
		{
			return $this->openId;
		}

		public function setOpenId($openId)
		{
			$this->openId = $openId;
			$this->apiParas["openId"] = $openId;
		}

	}





        
 

