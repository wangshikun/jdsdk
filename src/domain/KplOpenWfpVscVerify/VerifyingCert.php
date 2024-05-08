<?php

	namespace JD\domain\KplOpenWfpVscVerify;
	class VerifyingCert
	{

		private $params = array();
		private $cardNum;
		private $pwd;
		private $verifyingTimes;
		private $mobile;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.Cert";
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

		public function getVerifyingTimes()
		{
			return $this->verifyingTimes;
		}

		public function setVerifyingTimes($verifyingTimes)
		{
			$this->params['verifyingTimes'] = $verifyingTimes;
		}

		public function getMobile()
		{
			return $this->mobile;
		}

		public function setMobile($mobile)
		{
			$this->params['mobile'] = $mobile;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>