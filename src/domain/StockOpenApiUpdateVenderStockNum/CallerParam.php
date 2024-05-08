<?php

	namespace JD\domain\StockOpenApiUpdateVenderStockNum;
	class CallerParam
	{

		private $params = array();
		private $systemName;
		private $language;
		private $nationId;
		private $timezone;
		private $sysIp;

		function __construct()
		{
			$this->params["@type"] = "com.jd.stock.base.CallerParam";
		}

		public function getSystemName()
		{
			return $this->systemName;
		}

		public function setSystemName($systemName)
		{
			$this->params['systemName'] = $systemName;
		}

		public function getLanguage()
		{
			return $this->language;
		}

		public function setLanguage($language)
		{
			$this->params['language'] = $language;
		}

		public function getNationId()
		{
			return $this->nationId;
		}

		public function setNationId($nationId)
		{
			$this->params['nationId'] = $nationId;
		}

		public function getTimezone()
		{
			return $this->timezone;
		}

		public function setTimezone($timezone)
		{
			$this->params['timezone'] = $timezone;
		}

		public function getSysIp()
		{
			return $this->sysIp;
		}

		public function setSysIp($sysIp)
		{
			$this->params['sysIp'] = $sysIp;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>