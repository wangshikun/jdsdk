<?php

	namespace JD\api;
	class UnionOpenChannelRelationGetRequest
	{

		private $apiParas = array();
		private $version;
		private $channelRelationGetReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.channel.relation.get";
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

		public function getChannelRelationGetReq()
		{
			return $this->apiParas['channelRelationGetReq'];
		}

		public function setChannelRelationGetReq($channelRelationGetReq)
		{
			$this->apiParas['channelRelationGetReq'] = $channelRelationGetReq;
		}
	}

	?>