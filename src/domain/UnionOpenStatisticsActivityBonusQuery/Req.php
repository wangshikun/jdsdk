<?php

	namespace JD\domain\UnionOpenStatisticsActivityBonusQuery;
	class Req
	{

		private $params = array();
		private $activityId;
		private $channelId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.statistics.activity.BonusEffectDataReq";
		}

		public function getActivityId()
		{
			return $this->activityId;
		}

		public function setActivityId($activityId)
		{
			$this->params['activityId'] = $activityId;
		}

		public function getChannelId()
		{
			return $this->channelId;
		}

		public function setChannelId($channelId)
		{
			$this->params['channelId'] = $channelId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>