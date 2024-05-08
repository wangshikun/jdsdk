<?php

	namespace JD\domain\UnionOpenCpActivityGoodsValidate;
	class CpActivityGoodsVerifyReq
	{

		private $params = array();
		private $goodsVerifyInfo;
		private $activityId;
		private $pin;
		private $examineStatus;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpActivityGoodsVerifyReq";
		}

		public function getGoodsVerifyInfo()
		{
			return $this->goodsVerifyInfo;
		}

		public function setGoodsVerifyInfo($goodsVerifyInfo)
		{
			$this->params['goodsVerifyInfo'] = $goodsVerifyInfo;
		}

		public function getActivityId()
		{
			return $this->activityId;
		}

		public function setActivityId($activityId)
		{
			$this->params['activityId'] = $activityId;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getExamineStatus()
		{
			return $this->examineStatus;
		}

		public function setExamineStatus($examineStatus)
		{
			$this->params['examineStatus'] = $examineStatus;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>