<?php

	namespace JD\domain\UnionOpenExchangeDeviceFileQuery;
	class DeviceFileQueryReq
	{

		private $params = array();
		private $activeDate;
		private $uuid;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.DeviceFileQueryReq";
		}

		public function getActiveDate()
		{
			return $this->activeDate;
		}

		public function setActiveDate($activeDate)
		{
			$this->params['activeDate'] = $activeDate;
		}

		public function getUuid()
		{
			return $this->uuid;
		}

		public function setUuid($uuid)
		{
			$this->params['uuid'] = $uuid;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>