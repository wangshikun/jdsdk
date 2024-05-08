<?php

	namespace JD\domain\UnionOpenActivityQuery;
	class ActivityReq
	{

		private $params = array();
		private $pageIndex;
		private $pageSize;
		private $poolId;
		private $activeDate;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.activity.base.ActivityReq";
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

		public function getPoolId()
		{
			return $this->poolId;
		}

		public function setPoolId($poolId)
		{
			$this->params['poolId'] = $poolId;
		}

		public function getActiveDate()
		{
			return $this->activeDate;
		}

		public function setActiveDate($activeDate)
		{
			$this->params['activeDate'] = $activeDate;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>