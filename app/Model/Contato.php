<?PHP
App::uses('CakeEmail', 'Network/Email');
class Contato extends AppModel{
	
	public $useTable=false;
	
	public $_schema=array(
		'nome'=>array('type'=>'string','length'=>255),
		'email'=>array('type'=>'string','length'=>255),
		'mensagem'=>array('type'=>'text'),
	);
	
	public $validate=array(
		'nome'=>array(
			'rule'=>array('minLength',3),
			'message'=>'O campo nome é obrigatório',
		),
		'email'=>array(
			'rule'=>'email',
			'message'=>'Não é um e-mail válido',
		),
		'mensagem'=>array(
			'rule'=>array('minLength',10),
			'message'=>'O campo mensagem é obrigatório',
		),
	);
	
	public function send($data){
		$this->set($data);
		if($this->validates()){
			App::uses("CakeEmail","Network/Email");
			$email=new CakeEmail("smtp");
			$email->template('default')
				->emailFormat("html")
				->to("criacao4@blancolima.com.br")
				->cc("web@blancolima.com.br")
				->sender($data['email'])
				->template("index","sendmail")
				->subject("Contato via site")
				->viewVars(array('data'=>$data));
			return $email->send();
		}
	}
}