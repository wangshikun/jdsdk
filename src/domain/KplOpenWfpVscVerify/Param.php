<?php

	namespace JD\domain\KplOpenWfpVscVerify;
	class Param
	{

		private $params = array();
		private $requestWrap;

		function __construct()
		{
			$this->params["@type"] = "java.util.Map";
		}

		public function setRequestWrap($requestWrap)
		{
			$this->params['requestWrap'] = $requestWrap->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>