<?php
	class Admin extends BaseController{
		
		public function register(){
			if ($_POST) {
				$add_data = [
					'username'=>$_POST['username'],
					'password'=>$_POST['password'],
					'question'=>$_POST['question'],
					'answer'=>$_POST['answer']
				];
				$user_name=$add_data['username'];
				$user_pwd=$add_data['password'];
				$problem=$add_data['question'];
				$answer=$add_data['answer'];
				$check_code = $_POST['check_code'];
				
				if(!isset($user_name) || empty($user_name)){
					$this->transport('error', "用户名不能为空");
				}else if(!isset($user_pwd) || empty($user_pwd)){
					$this->transport('error', "密码不能为空");
				}else if(!isset($problem) || empty($problem)){
					$this->transport('error', "题目不能为空");
				}else if(!isset($answer) || empty($answer)){
					$this->transport('error', "答案不能为空");
				}else if(!isset($check_code) || empty($check_code)){
						$this->transport('error', "验证码不能为空");
				}else{
					session_start();
					$record_code = $_SESSION['check_code'];
					if($record_code != $check_code){
						$this->transport('error', '验证码错误');
						
					}else{
						$select_user=$this->model("admin")->get_user(['username'=>$user_name]);
						if(count($select_user) == 0){
							$this->model("admin")->insert_user($add_data);
							$_SESSION['code'] = 'code';
							header("location:index.php");
						}else{
							$_SESSION['code'] = 'code';
							$this->transport('error', "用户名存在");
							
						}
					}
					
					
				}
				
			}
			
			$this->display();
		}
		
		public function check_code(){
			session_start();
			$image = imagecreatetruecolor(100,30);
			$bgcolor = imagecolorallocate($image,rand(0,9).rand(0, 9).rand(0,9),000,000);
			$ftcolor = imagecolorallocate($image,255,255,255);
			imagefill($image,0,0,$bgcolor);
			$num_record = '';
			for($i=0;$i<4;$i++){
				$num = rand(1,9);
				$num_record .= $num;
				imagestring($image,6,$i*100/4,rand(5,10),$num,$ftcolor);
			}
			$_SESSION['check_code'] = $num_record;
			header('Content-Type:image/png');
			imagepng($image);
			imagedestroy($image);
		}
		
		//用户登陆
		public function login()
		{
			// 获取数据	
			$username = $_POST['username'];
			$password = $_POST['password'];

			if(isset($username) && isset($password)){
				//查询
				$select_data = [
					'username'=>$username,
					'password'=>$password
				];
				$res = $this->model("admin")->get_user($select_data);
				if(!empty($res)){
					$code = '';
					for($i = 0; $i < 10; $i++){
						$code .= rand(1000, 9999);
					}
					$this->model('CheckCode')->insert_code(['code'=>$code]);
					session_start();
					$_SESSION["code"] = $code;
					header("location:index.php");
				}else{
					$this->transport("error", '用户名或密码错误!');
					$this->display();
				}
				
				
			}else{
				$this->transport("error", "请先输入用户名和密码！");
				$this->display();
			}	
		}
		

		//忘记密码
		public function forget(){
			// 获取数据
			if ($_POST) {
				
				$username = $_POST['username'];
				$answer = $_POST['answer'];
				if(isset($username) && !empty($username) && !isset($answer)){
					
					$user = $this->model('admin')->get_user(['username'=>$username]);
					if(!empty($user)){
						$user = $user[0];
						$this->transport('input_username', $user['username']);
						$this->transport('question', $user['question']);
					}else{
						$this->transport('error', '用户名输入错误或不存在!');
					}
					
					
				}else{
					$answer = $_POST['answer'];
					if($answer){
						//查询
						$select_data = [
							'username'=>$_POST['username'],
							'answer'=>$_POST['answer']
						];
						$res = $this->model("admin")->get_user($select_data);
						//结果返回
						if(!empty($res)){
							$this->transport('password', $res[0]['password']);
						}else{
							$this->transport('error', "答案不正确！");
						}
	
					}else{
						$this->transport('error', "请先输入您问题的答案!");
					}	
				}
				
			}
			
			$this->display();
			
		}
	}
?>