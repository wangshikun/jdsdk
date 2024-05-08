<?php

	namespace JD\domain\KplOpenWfpJmiwareEditWare;
	class AttrParam
	{

		private $params = array();
		private $letter;
		private $attrValue;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.AttrParam";
		}

		public function getLetter()
		{
			return $this->letter;
		}

		public function setLetter($letter)
		{
			$this->params['letter'] = $letter;
		}

		public function setAttrValue($attrValue)
		{
			$this->params['attrValue'] = $attrValue->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>