<?php

	namespace JD\domain\UnionOpenOrderQuery;
	class OrderReq
	{

		private $params = array();
		private $pageNo;
		private $pageSize;
		private $type;
		private $time;
		private $childUnionId;
		private $key;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.order.base.OrderReq";
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

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
		}

		public function getTime()
		{
			return $this->time;
		}

		public function setTime($time)
		{
			$this->params['time'] = $time;
		}

		public function getChildUnionId()
		{
			return $this->childUnionId;
		}

		public function setChildUnionId($childUnionId)
		{
			$this->params['childUnionId'] = $childUnionId;
		}

		public function getKey()
		{
			return $this->key;
		}

		public function setKey($key)
		{
			$this->params['key'] = $key;
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