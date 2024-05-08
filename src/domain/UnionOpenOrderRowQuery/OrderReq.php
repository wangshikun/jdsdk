<?php

	namespace JD\domain\UnionOpenOrderRowQuery;
	class OrderReq
	{

		private $params = array();
		private $pageIndex;
		private $pageSize;
		private $type;
		private $startTime;
		private $endTime;
		private $childUnionId;
		private $key;
		private $fields;
		private $orderId;
		private $pin;

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

		public function getFields()
		{
			return $this->fields;
		}

		public function setFields($fields)
		{
			$this->params['fields'] = $fields;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
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