<?php

	namespace JD\domain\KplOpenWfpVscPreview;
	class Data
	{

		private $params = array();
		private $cardNum;
		private $pwd;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.Preview";
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

		function getInstance()
		{
			return $this->params;
		}

	}

	?>