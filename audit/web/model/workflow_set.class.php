<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class workflow_set extends base_set {
	protected $table_name = 'workflow';
	protected $id_name = 'sid';

}
?>
