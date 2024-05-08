<?php

	namespace JD\domain\KeplerSettledAddressGetareabymehodname;
	class Request
	{

		private $params = array();
		private $param;
		private $methodName;

		function __construct()
		{
			$this->params["@type"] = "com.jd.trade.jos.sopclient.address.request.GetAreaByMehodNameRequest";
		}

		public function getParam()
		{
			return $this->param;
		}

		public function setParam($param)
		{
			$this->params['param'] = $param;
		}

		public function getMethodName()
		{
			return $this->methodName;
		}

		public function setMethodName($methodName)
		{
			$this->params['methodName'] = $methodName;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>