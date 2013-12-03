<?PHP
App::uses('AppController','Controller');

class ContatosController extends AppController{
	
	public $uses=array("Contato");
	
	public function index(){
		if($this->request->is("post")){
			if(isset($this->data)){
				if($this->Contato->send($this->data)) $this->redirect("/contatos/enviado");
			}
		}
	}
	
	public function enviado(){
		$this->autoRender=false;
		$this->Session->setFlash('E-mail Enviado com sucesso! Aguarde contato, obrigado.');
		$this->redirect("/contatos");
		
	}
	
}