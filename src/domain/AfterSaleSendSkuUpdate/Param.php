<?php

	namespace JD\domain\AfterSaleSendSkuUpdate;
	class Param
	{

		private $params = array();
		private $afsServiceId;
		private $deliverDate;
		private $expressCode;
		private $expressCompany;
		private $freightMoney;

		function __construct()
		{
			$this->params["@type"] = "com.jd.SendSkuUpdateParamReqVo";
		}

		public function getAfsServiceId()
		{
			return $this->afsServiceId;
		}

		public function setAfsServiceId($afsServiceId)
		{
			$this->params['afsServiceId'] = $afsServiceId;
		}

		public function getDeliverDate()
		{
			return $this->deliverDate;
		}

		public function setDeliverDate($deliverDate)
		{
			$this->params['deliverDate'] = $deliverDate;
		}

		public function getExpressCode()
		{
			return $this->expressCode;
		}

		public function setExpressCode($expressCode)
		{
			$this->params['expressCode'] = $expressCode;
		}

		public function getExpressCompany()
		{
			return $this->expressCompany;
		}

		public function setExpressCompany($expressCompany)
		{
			$this->params['expressCompany'] = $expressCompany;
		}

		public function getFreightMoney()
		{
			return $this->freightMoney;
		}

		public function setFreightMoney($freightMoney)
		{
			$this->params['freightMoney'] = $freightMoney;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>