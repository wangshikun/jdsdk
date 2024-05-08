<?php

	namespace JD\domain\UnionOpenExchangeDeviceSupply;
	class SupplyDeviceReq
	{

		private $params = array();
		private $uuid;
		private $deviceInfoList;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.SupplyDeviceReq";
		}

		public function getUuid()
		{
			return $this->uuid;
		}

		public function setUuid($uuid)
		{
			$this->params['uuid'] = $uuid;
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

	}

	?>