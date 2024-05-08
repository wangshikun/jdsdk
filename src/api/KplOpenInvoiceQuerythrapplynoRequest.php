<?php

	namespace JD\api;
	class KplOpenInvoiceQuerythrapplynoRequest
	{

		private $apiParas = array();
		private $version;
		private $jdOrderId;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.invoice.querythrapplyno";
		}

		public function getApiParas()
		{
			if (empty($this->apiParas)) {
				return "{}";
			}
			return json_encode($this->apiParas);
		}

		public function check()
		{

		}

		public function putOtherTextParam($key, $value)
		{
			$this->apiParas[$key] = $value;
			$this->$key = $value;
		}

		public function getVersion()
		{
			return $this->version;
		}

		public function setVersion($version)
		{
			$this->version = $version;
		}

		public function getJdOrderId()
		{
			return $this->apiParas['jdOrderId'];
		}

		public function setJdOrderId($jdOrderId)
		{
			$this->apiParas['jdOrderId'] = $jdOrderId;
		}
	}

	?>