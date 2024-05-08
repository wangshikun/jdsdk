<?php

	namespace JD\domain\KplOpenWfpVscMakeCertCallback;
	class Cert
	{

		private $params = array();
		private $certId;
		private $cardNum;
		private $pwd;
		private $effectiveTime;
		private $expiryTime;
		private $leftTimes;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.Cert";
		}

		public function getCertId()
		{
			return $this->certId;
		}

		public function setCertId($certId)
		{
			$this->params['certId'] = $certId;
		}

		public function getCardNum()
		{
			return $this->cardNum;
		}

		public function setCardNum($cardNum)
		{
			$this->params['cardNum'] = $cardNum;
		}

		public function getPwd()
		{
			return $this->pwd;
		}

		public function setPwd($pwd)
		{
			$this->params['pwd'] = $pwd;
		}

		public function getEffectiveTime()
		{
			return $this->effectiveTime;
		}

		public function setEffectiveTime($effectiveTime)
		{
			$this->params['effectiveTime'] = $effectiveTime;
		}

		public function getExpiryTime()
		{
			return $this->expiryTime;
		}

		public function setExpiryTime($expiryTime)
		{
			$this->params['expiryTime'] = $expiryTime;
		}

		public function getLeftTimes()
		{
			return $this->leftTimes;
		}

		public function setLeftTimes($leftTimes)
		{
			$this->params['leftTimes'] = $leftTimes;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>