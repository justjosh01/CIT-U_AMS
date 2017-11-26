<?php
		$query 			= "SELECT id FROM tbl_alumni";
 		$data['list']	= $this->db->getQuery($query);
		$data['count']	= $this->db->getCount($query);