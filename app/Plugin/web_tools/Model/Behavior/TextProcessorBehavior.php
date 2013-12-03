<?PHP
class TextProcessorBehavior extends ModelBehavior{

	public function slug(Model $model,$title){
		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $title);	
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);	
		$clean = strtolower(trim($clean, '-'));
		return $clean;
	}
}