<?php

	namespace JD\domain\KplOpenXimalayaGetresource;
	class Wrap
	{

		private $params = array();
		private $requestURI;
		private $requestMethod;
		private $requestQueryString;
		private $requestParameterMap;
		private $timestamp;

		function __construct()
		{
			$this->params["@type"] = "com.jd.smart.zny.broker.open.wrap.XiMaLaYaRequestWrap";
		}

		public function getRequestURI()
		{
			return $this->requestURI;
		}

		public function setRequestURI($requestURI)
		{
			$this->params['requestURI'] = $requestURI;
		}

		public function getRequestMethod()
		{
			return $this->requestMethod;
		}

		public function setRequestMethod($requestMethod)
		{
			$this->params['requestMethod'] = $requestMethod;
		}

		public function getRequestQueryString()
		{
			return $this->requestQueryString;
		}

		public function setRequestQueryString($requestQueryString)
		{
			$this->params['requestQueryString'] = $requestQueryString;
		}

		public function getRequestParameterMap()
		{
			return $this->requestParameterMap;
		}

		public function setRequestParameterMap($requestParameterMap)
		{
			$this->params['requestParameterMap'] = $requestParameterMap;
		}

		public function getTimestamp()
		{
			return $this->timestamp;
		}

		public function setTimestamp($timestamp)
		{
			$this->params['timestamp'] = $timestamp;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>