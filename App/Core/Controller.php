<?php


class Controller {
	
	/*BEGIN <<Bold Code>> */
	
	
	
	protected function model($model) {	
		require_once 'App/Models/'.$model.'.php';
		return new $model;
	}
	protected function view($view, $data=array()) {	
		require_once 'App/Views/'.$view.'.php';
	}
	/*END <<Bold Code>> */
	

}
?>