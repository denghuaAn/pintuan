<?php
	class AdminModel extends BaseModel{
		private $db_name = 'pintuan';
		private $table_name = 'admin';
		
		function __construct(){
			parent::__construct($this->db_name);
		}
		
		public function get_user($limit_data = [], $search_fields = '*'){
			return $this->query_data($this->table_name, $limit_data, $search_fields);
		}
		
		public function insert_user($add_data = []){
			$this->insert_data($this->table_name, $add_data);
		}
		
	}
?>