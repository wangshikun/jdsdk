<?php

	namespace JD\domain\UnionOpenSellingOrderRowQuery;
	class Req
	{

		private $params = array();
		private $pageIndex;
		private $pageSize;
		private $childUnionId;
		private $key;
		private $type;
		private $startTime;
		private $endTime;
		private $fields;
		private $pin;
		private $orderId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.order.row.OrderRowReq";
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

		public function getType()
		{
			return $this->type;
		}

		public function setType($type)
		{
			$this->params['type'] = $type;
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

		public function getFields()
		{
			return $this->fields;
		}

		public function setFields($fields)
		{
			$this->params['fields'] = $fields;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>