<?php

	namespace JD\domain\UnionOpenPositionQuery;
	class PositionReq
	{

		private $params = array();
		private $unionId;
		private $key;
		private $unionType;
		private $pageIndex;
		private $pageSize;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.position.base.PositionReq";
		}

		public function getUnionId()
		{
			return $this->unionId;
		}

		public function setUnionId($unionId)
		{
			$this->params['unionId'] = $unionId;
		}

		public function getKey()
		{
			return $this->key;
		}

		public function setKey($key)
		{
			$this->params['key'] = $key;
		}

		public function getUnionType()
		{
			return $this->unionType;
		}

		public function setUnionType($unionType)
		{
			$this->params['unionType'] = $unionType;
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