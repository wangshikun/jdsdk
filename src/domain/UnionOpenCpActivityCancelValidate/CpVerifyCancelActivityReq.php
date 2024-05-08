<?php

	namespace JD\domain\UnionOpenCpActivityCancelValidate;
	class CpVerifyCancelActivityReq
	{

		private $params = array();
		private $idList;
		private $pin;
		private $examineStatus;
		private $examineRejectReason;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.cp.CpVerifyCancelActivityReq";
		}

		public function getIdList()
		{
			return $this->idList;
		}

		public function setIdList($idList)
		{
			$this->params['idList'] = $idList;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getExamineStatus()
		{
			return $this->examineStatus;
		}

		public function setExamineStatus($examineStatus)
		{
			$this->params['examineStatus'] = $examineStatus;
		}

		public function getExamineRejectReason()
		{
			return $this->examineRejectReason;
		}

		public function setExamineRejectReason($examineRejectReason)
		{
			$this->params['examineRejectReason'] = $examineRejectReason;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>