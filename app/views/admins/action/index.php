<?php
		$query 			= "SELECT id FROM tbl_announcements";
 		$data['list']	= $this->db->getQuery($query);
		$data['count']	= $this->db->getCount($query);