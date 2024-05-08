<?php

	namespace JD\domain\UnionOpenExtraDeliverymanValidate;
	class DeliverymanReq
	{

		private $params = array();
		private $unionId;
		private $mobile;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.extra.delivery.DeliverymanReq";
		}

		public function getUnionId()
		{
			return $this->unionId;
		}

		public function setUnionId($unionId)
		{
			$this->params['unionId'] = $unionId;
		}

		public function getMobile()
		{
			return $this->mobile;
		}

		public function setMobile($mobile)
		{
			$this->params['mobile'] = $mobile;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>