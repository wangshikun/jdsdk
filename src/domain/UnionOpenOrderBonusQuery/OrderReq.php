<?php

	namespace JD\domain\UnionOpenOrderBonusQuery;
	class OrderReq
	{

		private $params = array();
		private $optType;
		private $startTime;
		private $endTime;
		private $pageNo;
		private $pageSize;
		private $sortValue;
		private $activityId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.order.bonus.BonusOrderReq";
		}

		public function getOptType()
		{
			return $this->optType;
		}

		public function setOptType($optType)
		{
			$this->params['optType'] = $optType;
		}

		public function getStartTime()
		{
			return $this->startTime;
		}

		public function setStartTime($startTime)
		{
			$this->params['startTime'] = $startTime;
		}

		public function getEndTime()
		{
			return $this->endTime;
		}

		public function setEndTime($endTime)
		{
			$this->params['endTime'] = $endTime;
		}

		public function getPageNo()
		{
			return $this->pageNo;
		}

		public function setPageNo($pageNo)
		{
			$this->params['pageNo'] = $pageNo;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function getSortValue()
		{
			return $this->sortValue;
		}

		public function setSortValue($sortValue)
		{
			$this->params['sortValue'] = $sortValue;
		}

		public function getActivityId()
		{
			return $this->activityId;
		}

		public function setActivityId($activityId)
		{
			$this->params['activityId'] = $activityId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>