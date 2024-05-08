<?php

	namespace JD\domain\KplOpenWfpVscQueryCertList;
	class Param
	{

		private $params = array();
		private $queryCertListRequestWrap;

		function __construct()
		{
			$this->params["@type"] = "java.util.Map";
		}

		public function setQueryCertListRequestWrap($queryCertListRequestWrap)
		{
			$this->params['queryCertListRequestWrap'] = $queryCertListRequestWrap->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>