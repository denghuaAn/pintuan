<?php
	class Good extends BaseController{
		
		// 渲染数据
		public function index(){
			
			session_start();
			$code = $_SESSION['code'];
			$admin_code = $this->model('CheckCode')->get_codes(['code'=>$code]);
			if(empty($admin_code)){				
				header("location:index.php?controller=admin&action=login");			
			}
			
			$goods = $this->get_goods();
			$this->transport('goods', $goods);
			$this->display();
		}
		
		// 添加商品
		public function add(){
			$good_info = $this->get_post();
			if($good_info){
				$this->push_good($good_info);
			}
			
			header("location:index.php");
		}
		
		//删除商品
		public function del(){
			$select_indexs = $_POST['select_indexs'];
			$good = $this->get_goods();
			
			if($select_indexs){
				foreach($select_indexs as $index){
					$this->model('good')->delete_good(['id'=>$good[$index]['id']]);
				}
				
			}
			
			header("location:index.php");
		}
		
		// 修改商品
		public function update(){
			$good_info = $this->get_post();
			$good_id = $_POST['good_id'];
			$response = "";
			if(isset($good_id)){
				$goods = $this->get_goods();
				$good_id = intval($good_id);
				if(is_array($goods) && $goods[$good_id]){
					$images = $this->get_images($good_info['good_photos']);
					$good_info['good_photos'] = $images ?
								 json_encode($images) : $goods[$good_id]['good_photos'];
								 
					$this->model('good')->update_good(['id'=>$goods[$good_id]['id']], $good_info);
					
					$good_info['good_photos'] = json_decode($good_info['good_photos']);
					$response = ['status'=>'success', 'data'=>$good_info];
					
				}else{
					$response = ['status'=>'error'];
				}
			}else{
				$response = ['status'=>'error'];
			}
			
			echo json_encode($response);
			
		}
		
		//获取具体商品信息
		public function get_show_goods(){
			$id = $_GET['id'];
			if(!isset($id)){
				header("location:index.php");
			}
			
			$goods = $this->get_goods();
			if($goods[$id]){
				$good = $goods[$id];
				$good['good_photos'] = json_decode($good['good_photos']);
				echo json_encode($good);
			}else{
				header("location:index.php");
			}
			
		}
		
		// 预览商品信息渲染
		public function show_good(){
			$id = $_GET['id'];
			if(!isset($id)){
				header("location:index.php");
			}
			
			$goods = $this->get_goods();
			if($goods[$id]){
				$good = $goods[$id];
				$good['good_photos'] = json_decode($good['good_photos']);
				$this->transport('good', $good);
				$this->display();
			}else{
				header("location:index.php");
			}
		}
		
		// 获取商品
		private function get_goods(){
			return $this->model('good')->get_goods();
		}
		
		//接收商品上传请求
		public function get_post(){
			$good_type = $_POST['good_type'];
			$good_name = $_POST['good_name'];
			$good_desc = $_POST['good_desc'];
			$good_price = $_POST['good_price'];
			$good_photos = $_FILES['good_photos'];
			
			$flag = !isset($good_type) || !isset($good_name) || !isset($good_desc) || !isset($good_price) 
				|| empty($good_type) || empty($good_name) 
				|| empty($good_desc) || empty($good_price) ?
				 false : true;
				 

			 if($flag){
			 	return [
			 		'good_type'=>$good_type,
			 		'good_name'=>$good_name,
			 		'good_desc'=>$good_desc,
			 		'good_price'=>$good_price,
			 		'good_photos'=>$good_photos
			 	];
			 	
			 }else{
			 	return null;
			 }
		}
		
		//添加商品具体操作
		private function push_good($good_info){
			$images = $this->get_images($good_info['good_photos']);
			
			$new_good = [
			'good_type'=>$good_info['good_type'],
			'good_name'=>$good_info['good_name'],
			'good_desc'=>$good_info['good_desc'],
			'good_price'=>$good_info['good_price'],
			'good_photos'=>json_encode($images)
			];
			
			$this->model('good')->insert_good($new_good);
		}
		
		//获取上传的商品图片
		private function get_images($good_photos){
			
			if($good_photos){
				foreach($good_photos['tmp_name'] as $key=>$good_photo){
					$file_type = $good_photos['type'][$key];
					list($type, $end) = explode("/", $file_type);
					$image_file = 'data/'.date('YmdHis', time()).'code'.rand(100, 9999).".$end";
					move_uploaded_file($good_photo, $image_file);
					$images[] = $image_file;
				}
			}
			return $images;
		}
		
	}
?>