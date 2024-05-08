<?php

	namespace JD\api;
	class KplOpenRegularPlanQueryplanlistnewRequest
	{

		private $apiParas = array();
		private $version;
		private $planParam;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.regular.plan.queryplanlistnew";
		}

		public function getApiParas()
		{
			if (empty($this->apiParas)) {
				return "{}";
			}
			return json_encode($this->apiParas);
		}

		public function check()
		{

		}

		public function putOtherTextParam($key, $value)
		{
			$this->apiParas[$key] = $value;
			$this->$key = $value;
		}

		public function getVersion()
		{
			return $this->version;
		}

		public function setVersion($version)
		{
			$this->version = $version;
		}

		public function getPlanParam()
		{
			return $this->apiParas['planParam'];
		}

		public function setPlanParam($planParam)
		{
			$this->apiParas['planParam'] = $planParam;
		}
	}

	?>