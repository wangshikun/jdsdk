<?php

	namespace JD\domain\KplOpenWfpVscVerifiedNotify;
	class Param
	{

		private $params = array();
		private $merchantRequestWrap;

		function __construct()
		{
			$this->params["@type"] = "java.util.Map";
		}

		public function setMerchantRequestWrap($merchantRequestWrap)
		{
			$this->params['merchantRequestWrap'] = $merchantRequestWrap->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>