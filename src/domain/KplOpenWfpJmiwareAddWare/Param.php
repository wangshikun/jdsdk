<?php

	namespace JD\domain\KplOpenWfpJmiwareAddWare;
	class Param
	{

		private $params = array();
		private $jmiWareParam;

		function __construct()
		{
			$this->params["@type"] = "java.util.Map";
		}

		public function setJmiWareParam($jmiWareParam)
		{
			$this->params['jmiWareParam'] = $jmiWareParam->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>