<?PHP
class WebToolsHelper extends AppHelper{
	
	public $helpers=array("Html","Form");
	
	public function ie9(){
		return '<!--[if lt IE 9]>'.$this->Html->script("/web_tools/js/ie9.js").'<![endif]-->';
	}
	
	public function css($name,$queue=true){
		if($queue) return $this->Html->css("/web_tools/css/$name",'stylesheet',array("inline"=>false));
		return $this->Html->css("/web_tools/css/$name");
	}
	
	public function js($name,$queue=true){
		if($queue) return $this->Html->script("/web_tools/js/$name",false,array("inline"=>true,"once"=>true));
		else return $this->Html->script("/web_tools/js/$name");
	}
	
	public function jquery($name=NULL,$inline=true){
		$this->Html->script("/web_tools/js/jquery/jquery.js",false,array("inline"=>true,"once"=>true));
		if(!$name) return;
		return $this->Html->script("/web_tools/js/jquery/jquery.$name",false,array("inline"=>true,"once"=>true));
	}
	
	public function fancybox(){
		$this->Html->script('/web_tools/js/jquery/jquery.js',false,array('inline'=>false));
		$this->Html->css('/web_tools/fancybox/jquery.fancybox-1.3.4.css',false,array('inline'=>false));
		$this->Html->script('/web_tools/fancybox/jquery.easing-1.3.pack.js',false,array('inline'=>false));
		$this->Html->script('/web_tools/fancybox/jquery.fancybox-1.3.4.pack.js',false,array('inline'=>false));
		$this->Html->script('/web_tools/fancybox/jquery.mousewheel-3.0.4.pack.js',false,array('inline'=>false));
	}
}
?>