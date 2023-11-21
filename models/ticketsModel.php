<?php

class TicketsModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllTickets()
		{
			$query="SELECT * FROM tb_ticket";
			$request=$this->select_all($query);
			return $request;
		}



    }
?>