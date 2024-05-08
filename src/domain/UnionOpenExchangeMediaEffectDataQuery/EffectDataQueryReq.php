<?php

	namespace JD\domain\UnionOpenExchangeMediaEffectDataQuery;
	class EffectDataQueryReq
	{

		private $params = array();
		private $maxId;
		private $pageSize;
		private $uuid;
		private $actDate;
		private $taskIdList;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.EffectDataQueryReq";
		}

		public function getMaxId()
		{
			return $this->maxId;
		}

		public function setMaxId($maxId)
		{
			$this->params['maxId'] = $maxId;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function getUuid()
		{
			return $this->uuid;
		}

		public function setUuid($uuid)
		{
			$this->params['uuid'] = $uuid;
		}

		public function getActDate()
		{
			return $this->actDate;
		}

		public function setActDate($actDate)
		{
			$this->params['actDate'] = $actDate;
		}

		public function getTaskIdList()
		{
			return $this->taskIdList;
		}

		public function setTaskIdList($taskIdList)
		{
			$this->params['taskIdList'] = $taskIdList;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>