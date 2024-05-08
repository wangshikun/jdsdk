<?php

	namespace JD\domain\UnionOpenChannelInvitecodeGet;
	class ChannelInviteReq
	{

		private $params = array();
		private $inviteType;
		private $channelType;
		private $pin;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.channel.invite.ChannelInviteReq";
		}

		public function getInviteType()
		{
			return $this->inviteType;
		}

		public function setInviteType($inviteType)
		{
			$this->params['inviteType'] = $inviteType;
		}

		public function getChannelType()
		{
			return $this->channelType;
		}

		public function setChannelType($channelType)
		{
			$this->params['channelType'] = $channelType;
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>