<?php

	namespace JD\domain\KplOpenWfpJmiwareAddWare;
	class AttrValue
	{

		private $params = array();
		private $valueObj;
		private $aliasName;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.AttrValueParam";
		}

		public function getValueObj()
		{
			return $this->valueObj;
		}

		public function setValueObj($valueObj)
		{
			$this->params['valueObj'] = $valueObj;
		}

		public function getAliasName()
		{
			return $this->aliasName;
		}

		public function setAliasName($aliasName)
		{
			$this->params['aliasName'] = $aliasName;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>