<?php

	namespace JD\domain\UnionOpenExchangeMediaEffectDataSync;
	class MediaEffectData
	{

		private $params = array();
		private $commentNum;
		private $orderId;
		private $activeUvNum;
		private $authorFansNum;
		private $contentId;
		private $followUvNum;
		private $playUvNum;
		private $viewDate;
		private $cycle;
		private $shareNum;
		private $taskId;
		private $likeNum;
		private $playNum;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.exchange.MediaEffectData";
		}

		public function getCommentNum()
		{
			return $this->commentNum;
		}

		public function setCommentNum($commentNum)
		{
			$this->params['commentNum'] = $commentNum;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
		}

		public function getActiveUvNum()
		{
			return $this->activeUvNum;
		}

		public function setActiveUvNum($activeUvNum)
		{
			$this->params['activeUvNum'] = $activeUvNum;
		}

		public function getAuthorFansNum()
		{
			return $this->authorFansNum;
		}

		public function setAuthorFansNum($authorFansNum)
		{
			$this->params['authorFansNum'] = $authorFansNum;
		}

		public function getContentId()
		{
			return $this->contentId;
		}

		public function setContentId($contentId)
		{
			$this->params['contentId'] = $contentId;
		}

		public function getFollowUvNum()
		{
			return $this->followUvNum;
		}

		public function setFollowUvNum($followUvNum)
		{
			$this->params['followUvNum'] = $followUvNum;
		}

		public function getPlayUvNum()
		{
			return $this->playUvNum;
		}

		public function setPlayUvNum($playUvNum)
		{
			$this->params['playUvNum'] = $playUvNum;
		}

		public function getViewDate()
		{
			return $this->viewDate;
		}

		public function setViewDate($viewDate)
		{
			$this->params['viewDate'] = $viewDate;
		}

		public function getCycle()
		{
			return $this->cycle;
		}

		public function setCycle($cycle)
		{
			$this->params['cycle'] = $cycle;
		}

		public function getShareNum()
		{
			return $this->shareNum;
		}

		public function setShareNum($shareNum)
		{
			$this->params['shareNum'] = $shareNum;
		}

		public function getTaskId()
		{
			return $this->taskId;
		}

		public function setTaskId($taskId)
		{
			$this->params['taskId'] = $taskId;
		}

		public function getLikeNum()
		{
			return $this->likeNum;
		}

		public function setLikeNum($likeNum)
		{
			$this->params['likeNum'] = $likeNum;
		}

		public function getPlayNum()
		{
			return $this->playNum;
		}

		public function setPlayNum($playNum)
		{
			$this->params['playNum'] = $playNum;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>