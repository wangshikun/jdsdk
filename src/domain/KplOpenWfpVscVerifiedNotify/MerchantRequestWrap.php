<?php

	namespace JD\domain\KplOpenWfpVscVerifiedNotify;
	class MerchantRequestWrap
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

		public function setData($data)
		{
			$this->params['data'] = $data->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>