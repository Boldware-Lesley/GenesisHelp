<?php


class Template {
	
	/*BEGIN <<Bold Code>> */
	
	private $tpl ;	
	private $partialbuffer ;	
	private $assignvalues  = array();	
	
	
	public function __construct($path=' ') {	
		if (! empty ( $path )) {
			if (file_exists ( $path )) {
				$this->tpl = file_get_contents ( $path );
			} else {
				echo '<div style="margin: 0px;vertical-align: baseline;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;border-radius: 4px;color: #A94442;background-color: #F2DEDE;border-color: #EBCCD1;">';
				echo '<h4 style="margin-top: 0px;margin-bottom: 10px;color: inherit;font-size: 18px;">Template Error</h4>file "' . $path . '" Not Found.</div>';
			}
		} else {
			echo '<div style="margin: 0px;vertical-align: baseline;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;border-radius: 4px;color: #A94442;background-color: #F2DEDE;border-color: #EBCCD1;">';
			echo '<h4 style="margin-top: 0px;margin-bottom: 10px;color: inherit;font-size: 18px;">Template Error</h4>file Not Found.</div>';
		}
	}
	public function assign($old, $new=' ') {	
		if (! empty ( $old )) {
			$this->assignvalues [strtoupper ( $old )] = $new;
		}
	}
	public function show($debug=FALSE) {	
		if (count ( $this->assignvalues ) > 0) {
			foreach ( $this->assignvalues as $key => $value ) {
				$this->tpl = str_replace ( '{' . $key . '}', $value, $this->tpl );
			}
		}
		if ($debug) {
			$this->tpl.='<!--'.date('d.m.Y H:i:s').'-->';
		}
		echo $this->tpl;
	}
	public function view($debug=FALSE) {	
		if (count ( $this->assignvalues ) > 0) {
			foreach ( $this->assignvalues as $key => $value ) {
				$this->tpl = str_replace ( '{' . $key . '}', $value, $this->tpl );
			}
		}
		if ($debug) {
			$this->tpl.='<!--'.date('d.m.Y H:i:s').'-->';
		}
		return $this->tpl;
	}
	public function renderPartial($old, $path, $assignedvalues=array()) {	
		if (! empty ( $old )) {
			if (file_exists ( $path )) {
				$this->partialbuffer = file_get_contents ( $path );
				if (count ( $assignedvalues ) > 0) {
					foreach ( $assignedvalues as $key => $value ) {
						$this->partialbuffer = str_replace ( '{' . $key . '}', $value, $this->partialbuffer );
					}
				}
				$this->tpl = str_replace ( '[' . strtoupper ( $old ) . ']', $this->partialbuffer, $this->tpl );
					
				$this->partialbuffer = '';
			} else {
				echo '<div style="margin: 0px;vertical-align: baseline;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;border-radius: 4px;color: #A94442;background-color: #F2DEDE;border-color: #EBCCD1;">';
				echo '<h4 style="margin-top: 0px;margin-bottom: 10px;color: inherit;font-size: 18px;">Template Partial Error</h4>file "'.$path.'" Not Found.</div>';
			}
		}
	}
	/*END <<Bold Code>> */
	

}
?>