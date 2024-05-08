<?php

	namespace JD\domain\UnionOpenCpChannelDefaultGet;
	class CpDefaultChannelGetReq
	{

		private $params = array();
		private $pin;
		private $id;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpDefaultChannelReq";
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getId()
		{
			return $this->id;
		}

		public function setId($id)
		{
			$this->params['id'] = $id;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>