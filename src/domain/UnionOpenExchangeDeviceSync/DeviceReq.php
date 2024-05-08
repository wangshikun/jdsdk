<?php

	namespace JD\domain\UnionOpenExchangeDeviceSync;
	class DeviceReq
	{

		private $params = array();
		private $deviceInfoList;
		private $uuid;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.SyncDeviceReq";
		}

		public function setDeviceInfoList($deviceInfoList)
		{
			$size = count($deviceInfoList);
			for ($i = 0; $i < $size; $i++) {
				$deviceInfoList [$i] = $deviceInfoList [$i]->getInstance();
			}
			$this->params['deviceInfoList'] = $deviceInfoList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getUuid()
		{
			return $this->uuid;
		}

		public function setUuid($uuid)
		{
			$this->params['uuid'] = $uuid;
		}

	}

	?>