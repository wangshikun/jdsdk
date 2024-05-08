<?php

	namespace JD\domain\KplOpenWfpVscVerifiedNotify;
	class VerifyRecord
	{

		private $params = array();
		private $certId;
		private $verifyingTimes;
		private $mobile;
		private $operator;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.VerifyRecord";
		}

		public function getCertId()
		{
			return $this->certId;
		}

		public function setCertId($certId)
		{
			$this->params['certId'] = $certId;
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

		public function getOperator()
		{
			return $this->operator;
		}

		public function setOperator($operator)
		{
			$this->params['operator'] = $operator;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>