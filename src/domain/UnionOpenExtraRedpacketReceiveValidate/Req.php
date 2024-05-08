<?php

	namespace JD\domain\UnionOpenExtraRedpacketReceiveValidate;
	class Req
	{

		private $params = array();
		private $userId;
		private $userIdType;
		private $actId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.extra.redpacket.ReceiveRedpacketReq";
		}

		public function getUserId()
		{
			return $this->userId;
		}

		public function setUserId($userId)
		{
			$this->params['userId'] = $userId;
		}

		public function getUserIdType()
		{
			return $this->userIdType;
		}

		public function setUserIdType($userIdType)
		{
			$this->params['userIdType'] = $userIdType;
		}

		public function getActId()
		{
			return $this->actId;
		}

		public function setActId($actId)
		{
			$this->params['actId'] = $actId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>