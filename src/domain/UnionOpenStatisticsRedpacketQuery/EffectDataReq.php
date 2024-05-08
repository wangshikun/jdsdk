<?php

	namespace JD\domain\UnionOpenStatisticsRedpacketQuery;
	class EffectDataReq
	{

		private $params = array();
		private $actId;
		private $positionId;
		private $startDate;
		private $endDate;
		private $pageIndex;
		private $pageSize;
		private $key;
		private $type;
		private $channelIds;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.statistics.RedPacketEffectDataReq";
		}

		public function getActId()
		{
			return $this->actId;
		}

		public function setActId($actId)
		{
			$this->params['actId'] = $actId;
		}

		public function getPositionId()
		{
			return $this->positionId;
		}

		public function setPositionId($positionId)
		{
			$this->params['positionId'] = $positionId;
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

		public function getKey()
		{
			return $this->key;
		}

		public function setKey($key)
		{
			$this->params['key'] = $key;
		}

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		public function getChannelIds()
		{
			return $this->channelIds;
		}

		public function setChannelIds($channelIds)
		{
			$this->params['channelIds'] = $channelIds;
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