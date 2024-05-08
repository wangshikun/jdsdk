<?php

	namespace JD\domain\UnionOpenCpActivityQuery;
	class CpActivityListQueryReq
	{

		private $params = array();
		private $activityId;
		private $pageIndex;
		private $activityStatus;
		private $pageSize;
		private $pin;
		private $title;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpActivityQueryReq";
		}

		public function getActivityId()
		{
			return $this->activityId;
		}

		public function setActivityId($activityId)
		{
			$this->params['activityId'] = $activityId;
		}

		public function getPageIndex()
		{
			return $this->pageIndex;
		}

		public function setPageIndex($pageIndex)
		{
			$this->params['pageIndex'] = $pageIndex;
		}

		public function getActivityStatus()
		{
			return $this->activityStatus;
		}

		public function setActivityStatus($activityStatus)
		{
			$this->params['activityStatus'] = $activityStatus;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function setTitle($title)
		{
			$this->params['title'] = $title;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>