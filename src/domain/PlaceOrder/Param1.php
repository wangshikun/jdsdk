<?php

	namespace JD\domain\PlaceOrder;
	class Param1
	{

		private $params = array();
		private $orderParam;
		private $venderId;
		private $appKey;
		private $source;

		function __construct()
		{
			$this->params["@type"] = "com.jd.jdsmart.open.order.condition.JosOrderParam";
		}

		public function setOrderParam($orderParam)
		{
			$this->params['orderParam'] = $orderParam->getInstance();
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getVenderId()
		{
			return $this->venderId;
		}

		public function setVenderId($venderId)
		{
			$this->params['venderId'] = $venderId;
		}

		public function getAppKey()
		{
			return $this->appKey;
		}

		public function setAppKey($appKey)
		{
			$this->params['appKey'] = $appKey;
		}

		public function getSource()
		{
			return $this->source;
		}

		public function setSource($source)
		{
			$this->params['source'] = $source;
		}

	}

	?>