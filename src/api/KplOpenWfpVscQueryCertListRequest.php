<?php

	namespace JD\api;
	class KplOpenWfpVscQueryCertListRequest
	{


		private $apiParas = array();
		private $version;
		private $interfaceName;
		private $methodName;
		private $param;

		public function getApiMethodName()
		{
			return "jingdong.kpl.open.wfp.vsc.queryCertList";
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

		public function getInterfaceName()
		{
			return $this->apiParas['interfaceName'];
		}

		public function setInterfaceName($interfaceName)
		{
			$this->apiParas['interfaceName'] = $interfaceName;
		}

		public function getMethodName()
		{
			return $this->apiParas['methodName'];
		}

		public function setMethodName($methodName)
		{
			$this->apiParas['methodName'] = $methodName;
		}

		public function getParam()
		{
			return $this->apiParas['param'];
		}

		public function setParam($param)
		{
			$this->apiParas['param'] = $param;
		}
	}

	?>