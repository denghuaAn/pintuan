<?php
	
	class BaseController{
		
		protected static $controller_name;
		protected static $controller_method;
		protected $smarty;
		
		function __construct(){
			$this->smarty = new Smarty();
			$this->smarty->template_dir = "views";
		}
		
		public static function run(){
			
			self::$controller_name = isset($_REQUEST['controller']) ? 
										$_REQUEST['controller'] : 'good';
			self::$controller_method = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
			$controller = self::$controller_name;
			$action = self::$controller_method;
			
			if(!file_exists("controllers/$controller.php")){
				header('Content-Type: text/html;charset=utf-8');
				echo "控制器 $controller 不存在!<br />";
				return;
			}
			
			include "controllers/$controller.php";
			$controller = new $controller();
			
			if(!method_exists($controller, $action)){
				header('Content-Type: text/html;charset=utf-8');
				echo "action $action 不存在!<br />";
				return;
			}
			
			$controller->$action();
			
		}
		
		// 给view层传数据
		protected function transport($key, $value){
			$this->smarty->assign($key, $value);
		}
		
		// view层显示
		protected function display(){
			$this->smarty->display(self::$controller_name."/".self::$controller_method.".html");
		}
		
		// 返回具体的模型
		protected function model($model_name){
			$model_name = $model_name."Model";
			if(!file_exists("models/$model_name.php")){
				header('Content-Type: text/html;charset=utf-8');
				echo "model $model_name 不存在!<br />";
				return null;
			}
			include_once "models/$model_name.php";
			
			return new $model_name();
		}
		
		
	}
?>