<?php

	namespace JD\domain\UnionOpenCpChannelQuery;
	class CpChannelQueryReq
	{

		private $params = array();
		private $pageIndex;
		private $endDate;
		private $pageSize;
		private $idList;
		private $startDate;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpChannelReq";
		}

		public function getPageIndex()
		{
			return $this->pageIndex;
		}

		public function setPageIndex($pageIndex)
		{
			$this->params['pageIndex'] = $pageIndex;
		}

		public function getEndDate()
		{
			return $this->endDate;
		}

		public function setEndDate($endDate)
		{
			$this->params['endDate'] = $endDate;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function getIdList()
		{
			return $this->idList;
		}

		public function setIdList($idList)
		{
			$this->params['idList'] = $idList;
		}

		public function getStartDate()
		{
			return $this->startDate;
		}

		public function setStartDate($startDate)
		{
			$this->params['startDate'] = $startDate;
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