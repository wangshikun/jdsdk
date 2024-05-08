<?php

	namespace JD\domain\UnionOpenStatisticsRedpacketPidQuery;
	class RedPacketPidEffectDataReq
	{

		private $params = array();
		private $actId;
		private $pid;
		private $startDate;
		private $endDate;
		private $pageIndex;
		private $pageSize;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.statistics.RedPacketPidEffectDataReq";
		}

		public function getActId()
		{
			return $this->actId;
		}

		public function setActId($actId)
		{
			$this->params['actId'] = $actId;
		}

		public function getPid()
		{
			return $this->pid;
		}

		public function setPid($pid)
		{
			$this->params['pid'] = $pid;
		}

		public function getStartDate()
		{
			return $this->startDate;
		}

		public function setStartDate($startDate)
		{
			$this->params['startDate'] = $startDate;
		}

		public function getEndDate()
		{
			return $this->endDate;
		}

		public function setEndDate($endDate)
		{
			$this->params['endDate'] = $endDate;
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