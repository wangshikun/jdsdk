<?php

	namespace JD\domain\UnionOpenPromotionAppletGet;
	class PromotionCodeReq
	{

		private $params = array();
		private $type;
		private $subUnionId;
		private $positionId;
		private $pid;
		private $activityType;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.promotion.applet.PromotionCodeAppletReq";
		}

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		public function getSubUnionId()
		{
			return $this->subUnionId;
		}

		public function setSubUnionId($subUnionId)
		{
			$this->params['subUnionId'] = $subUnionId;
		}

		public function getPositionId()
		{
			return $this->positionId;
		}

		public function setPositionId($positionId)
		{
			$this->params['positionId'] = $positionId;
		}

		public function getPid()
		{
			return $this->pid;
		}

		public function setPid($pid)
		{
			$this->params['pid'] = $pid;
		}

		public function getActivityType()
		{
			return $this->activityType;
		}

		public function setActivityType($activityType)
		{
			$this->params['activityType'] = $activityType;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>