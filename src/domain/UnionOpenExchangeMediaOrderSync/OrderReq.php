<?php

	namespace JD\domain\UnionOpenExchangeMediaOrderSync;
	class OrderReq
	{

		private $params = array();
		private $mediaOrder;
		private $uuid;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.SyncOrderReq";
		}

		public function setMediaOrder($mediaOrder)
		{
			$this->params['mediaOrder'] = $mediaOrder->getInstance();
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