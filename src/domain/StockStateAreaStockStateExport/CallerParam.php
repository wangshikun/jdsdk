<?php

	namespace JD\domain\StockStateAreaStockStateExport;
	class CallerParam
	{

		private $params = array();
		private $buId;
		private $useDefaultTenant;
		private $systemName;
		private $timezone;
		private $nationId;
		private $skuTenant;
		private $sysIp;
		private $language;
		private $tenantId;
		private $CallerParamextMap;

		function __construct()
		{
			$this->params["@type"] = "com.jd.stock.base.CallerParam";
		}

		public function getBuId()
		{
			return $this->buId;
		}

		public function setBuId($buId)
		{
			$this->params['buId'] = $buId;
		}

		public function getUseDefaultTenant()
		{
			return $this->useDefaultTenant;
		}

		public function setUseDefaultTenant($useDefaultTenant)
		{
			$this->params['useDefaultTenant'] = $useDefaultTenant;
		}

		public function getSystemName()
		{
			return $this->systemName;
		}

		public function setSystemName($systemName)
		{
			$this->params['systemName'] = $systemName;
		}

		public function getTimezone()
		{
			return $this->timezone;
		}

		public function setTimezone($timezone)
		{
			$this->params['timezone'] = $timezone;
		}

		public function getNationId()
		{
			return $this->nationId;
		}

		public function setNationId($nationId)
		{
			$this->params['nationId'] = $nationId;
		}

		public function getSkuTenant()
		{
			return $this->skuTenant;
		}

		public function setSkuTenant($skuTenant)
		{
			$this->params['skuTenant'] = $skuTenant;
		}

		public function getSysIp()
		{
			return $this->sysIp;
		}

		public function setSysIp($sysIp)
		{
			$this->params['sysIp'] = $sysIp;
		}

		public function getLanguage()
		{
			return $this->language;
		}

		public function setLanguage($language)
		{
			$this->params['language'] = $language;
		}

		public function getTenantId()
		{
			return $this->tenantId;
		}

		public function setTenantId($tenantId)
		{
			$this->params['tenantId'] = $tenantId;
		}

		public function setCallerParamextMap($CallerParamextMap)
		{
			$this->params['CallerParamextMap'] = $CallerParamextMap->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>