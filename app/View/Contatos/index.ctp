<?PHP echo $this->Html->css('contato.css'); ?>
<div id="contato">
	<h3 class="title"><span>Entre em</span> Contato </h3>
    <div id="formulario">
    	<?PHP 
			echo $this->Form->create('Contato');
			echo $this->Form->input('nome',array("label"=>'','placeholder'=>'Nome'));
			echo $this->Form->input('email',array("label"=>'','placeholder'=>'E-mail'));
			echo $this->Form->input('mensagem',array("label"=>'','placeholder'=>'Digite sua mensagem'));
			echo $this->Form->submit('Enviar');
			echo $this->Form->reset('limpar');
			echo $this->Form->end();
		?>
    </div>
    <div id="infos">
    	<h3 class="title"><span>Informação de</span> Contato </h3>
        <p>E: contato@djrafagomes.com.br</p>
		<p>T: (45) 3035.3909</p>
		<p>C: (45) 9838.4824</p>
    </div>
</div>