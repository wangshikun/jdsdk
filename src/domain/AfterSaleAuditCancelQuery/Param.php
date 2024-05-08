<?php

	namespace JD\domain\AfterSaleAuditCancelQuery;
	class Param
	{

		private $params = array();
		private $approveNotes;
		private $serviceIdList;

		function __construct()
		{
			$this->params["@type"] = "com.jd.QueryParamVo";
		}

		public function getApproveNotes()
		{
			return $this->approveNotes;
		}

		public function setApproveNotes($approveNotes)
		{
			$this->params['approveNotes'] = $approveNotes;
		}

		public function setServiceIdList($serviceIdList)
		{
			$this->params['serviceIdList'] = $serviceIdList;
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>