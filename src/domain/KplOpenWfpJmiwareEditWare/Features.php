<?php

	namespace JD\domain\KplOpenWfpJmiwareEditWare;
	class Features
	{

		private $params = array();
		private $featureKey;

		function __construct()
		{
			$this->params["@type"] = "java.util.Map";
		}

		public function getFeatureKey()
		{
			return $this->featureKey;
		}

		public function setFeatureKey($featureKey)
		{
			$this->params['featureKey'] = $featureKey;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>