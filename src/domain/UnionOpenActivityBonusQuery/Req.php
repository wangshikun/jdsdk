<?php

	namespace JD\domain\UnionOpenActivityBonusQuery;
	class Req
	{

		private $params = array();
		private $activityId;
		private $beginTime;
		private $endTime;
		private $pageIndex;
		private $pageSize;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.activity.bonus.BonusActivityReq";
		}

		public function getActivityId()
		{
			return $this->activityId;
		}

		public function setActivityId($activityId)
		{
			$this->params['activityId'] = $activityId;
		}

		public function getBeginTime()
		{
			return $this->beginTime;
		}

		public function setBeginTime($beginTime)
		{
			$this->params['beginTime'] = $beginTime;
		}

		public function getEndTime()
		{
			return $this->endTime;
		}

		public function setEndTime($endTime)
		{
			$this->params['endTime'] = $endTime;
		}

		public function getPageIndex()
		{
			return $this->pageIndex;
		}

		public function setPageIndex($pageIndex)
		{
			$this->params['pageIndex'] = $pageIndex;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>