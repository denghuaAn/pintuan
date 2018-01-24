<?php
	class GoodModel extends BaseModel{
		private $db_name = 'pintuan';
		private $table_name = 'goods';
		
		function __construct(){
			parent::__construct($this->db_name);
		}
		
		public function get_goods($limit_data = [], $search_fields = '*'){
			return $this->query_data($this->table_name, $limit_data, $search_fields);
		}
		
		public function update_good($old_data = [], $new_data = []){
			$this->update_data($this->table_name, $old_data, $new_data);
		}
		
		public function delete_good($limit_data = []){
			$this->delete_data($this->table_name, $limit_data);
		}
		
		public function insert_good($add_data = []){
			$this->insert_data($this->table_name, $add_data);
		}
		
	}
?>