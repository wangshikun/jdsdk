<?php

	namespace JD\domain\UnionOpenCpActivityInfoQuery;
	class CpActivityInfoQueryReq
	{

		private $params = array();
		private $activityId;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpActivityReq";
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

		function getInstance()
		{
			return $this->params;
		}

	}

	?>