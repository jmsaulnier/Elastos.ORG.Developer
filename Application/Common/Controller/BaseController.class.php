<?php
namespace Common\Controller;
use Think\Controller;
class BaseController extends Controller{
	public function _initialize() {
		if(isset($_SESSION ['eladevp']['lang']) && $_SESSION ['eladevp']['lang']!=""){
			
		}else{
			$_SESSION ['eladevp']['lang'] = "cn";
		}
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			
		}else{
			$this->redirect("Error404/index");
		}
	}
	 public function _empty(){
		$this->redirect("Empty/index");
    } 
}
?>