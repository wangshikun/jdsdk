<?php

	namespace JD\domain\UnionOpenCpChannelGet;
	class CpChannelGetReq
	{

		private $params = array();
		private $name;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpChannelReq";
		}

		public function getName()
		{
			return $this->name;
		}

		public function setName($name)
		{
			$this->params['name'] = $name;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>