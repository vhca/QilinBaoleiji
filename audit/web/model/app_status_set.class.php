<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class app_status_set extends base_set {
	protected $table_name = 'app_status';
	protected $id_name = 'seq';

}