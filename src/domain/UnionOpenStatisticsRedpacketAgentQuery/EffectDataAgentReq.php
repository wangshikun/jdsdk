<?php

	namespace JD\domain\UnionOpenStatisticsRedpacketAgentQuery;
	class EffectDataAgentReq
	{

		private $params = array();
		private $actId;
		private $startDate;
		private $endDate;
		private $pageIndex;
		private $pageSize;
		private $type;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.statistics.agent.RedPacketEffectDataAgentReq";
		}

		public function getActId()
		{
			return $this->actId;
		}

		public function setActId($actId)
		{
			$this->params['actId'] = $actId;
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

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>