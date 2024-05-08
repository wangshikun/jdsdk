<?php

	namespace JD\domain\OpenOrangeOrderQuery;
	class Request
	{

		private $params = array();
		private $pageIndex;
		private $pageSize;
		private $type;
		private $startTime;
		private $endTime;
		private $pin;
		private $open_id_seller;
		private $xid_seller;

		function __construct()
		{
			$this->params["@type"] = "com.jd.orange.request.OrderQueryRequest";
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

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getOpen_id_seller()
		{
			return $this->open_id_seller;
		}

		public function setOpen_id_seller($open_id_seller)
		{
			$this->params['open_id_seller'] = $open_id_seller;
		}

		public function getXid_seller()
		{
			return $this->xid_seller;
		}

		public function setXid_seller($xid_seller)
		{
			$this->params['xid_seller'] = $xid_seller;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>