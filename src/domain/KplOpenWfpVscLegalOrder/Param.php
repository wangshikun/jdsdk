<?php

	namespace JD\domain\KplOpenWfpVscLegalOrder;
	class Param
	{

		private $params = array();
		private $merchantCode;
		private $data;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.MerchantRequestWrap";
		}

		public function getMerchantCode()
		{
			return $this->merchantCode;
		}

		public function setMerchantCode($merchantCode)
		{
			$this->params['merchantCode'] = $merchantCode;
		}

		public function getData()
		{
			return $this->data;
		}

		public function setData($data)
		{
			$this->params['data'] = $data;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>