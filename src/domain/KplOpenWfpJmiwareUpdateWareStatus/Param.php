<?php

	namespace JD\domain\KplOpenWfpJmiwareUpdateWareStatus;
	class Param
	{

		private $params = array();
		private $venderId;
		private $wareId;
		private $opType;
		private $opeReason;
		private $opName;
		private $opIp;
		private $sourceId;
		private $uuid;
		private $port;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.JmiWareStatusWrapper";
		}

		public function getVenderId()
		{
			return $this->venderId;
		}

		public function setVenderId($venderId)
		{
			$this->params['venderId'] = $venderId;
		}

		public function getWareId()
		{
			return $this->wareId;
		}

		public function setWareId($wareId)
		{
			$this->params['wareId'] = $wareId;
		}

		public function getOpType()
		{
			return $this->opType;
		}

		public function setOpType($opType)
		{
			$this->params['opType'] = $opType;
		}

		public function getOpeReason()
		{
			return $this->opeReason;
		}

		public function setOpeReason($opeReason)
		{
			$this->params['opeReason'] = $opeReason;
		}

		public function getOpName()
		{
			return $this->opName;
		}

		public function setOpName($opName)
		{
			$this->params['opName'] = $opName;
		}

		public function getOpIp()
		{
			return $this->opIp;
		}

		public function setOpIp($opIp)
		{
			$this->params['opIp'] = $opIp;
		}

		public function getSourceId()
		{
			return $this->sourceId;
		}

		public function setSourceId($sourceId)
		{
			$this->params['sourceId'] = $sourceId;
		}

		public function getUuid()
		{
			return $this->uuid;
		}

		public function setUuid($uuid)
		{
			$this->params['uuid'] = $uuid;
		}

		public function getPort()
		{
			return $this->port;
		}

		public function setPort($port)
		{
			$this->params['port'] = $port;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>