<?php

	namespace JD\domain\UnionOpenUserRegisterValidate;
	class UserStateReq
	{

		private $params = array();
		private $userId;
		private $userIdType;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.user.UserStateReq";
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

		function getInstance()
		{
			return $this->params;
		}

	}

	?>