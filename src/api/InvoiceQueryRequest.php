<?php

	namespace JD\api;
	class InvoiceQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $markId;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.invoice.query";
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

		public function getMarkId()
		{
			return $this->apiParas['markId'];
		}

		public function setMarkId($markId)
		{
			$this->apiParas['markId'] = $markId;
		}
	}

	?>