<?php

	namespace JD\domain\UnionOpenChannelRelationGet;
	class ChannelRelationGetReq
	{

		private $params = array();
		private $pin;
		private $inviteCode;
		private $note;
		private $channelNote;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.channel.relation.ChannelRelationGetReq";
		}

		public function getPin()
		{
			return $this->pin;
		}

		public function setPin($pin)
		{
			$this->params['pin'] = $pin;
		}

		public function getInviteCode()
		{
			return $this->inviteCode;
		}

		public function setInviteCode($inviteCode)
		{
			$this->params['inviteCode'] = $inviteCode;
		}

		public function getNote()
		{
			return $this->note;
		}

		public function setNote($note)
		{
			$this->params['note'] = $note;
		}

		public function getChannelNote()
		{
			return $this->channelNote;
		}

		public function setChannelNote($channelNote)
		{
			$this->params['channelNote'] = $channelNote;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>