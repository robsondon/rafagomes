<?PHP
App::uses('AppController','Controller');

class MusicasController extends AppController{
	
	
public function index(){

		//$this->Paginator->settings=array('limit' => 10,'order' => array('Musica.id' => 'DESC'));
		$this->set('musicas',$this->paginate());
	}
	
}