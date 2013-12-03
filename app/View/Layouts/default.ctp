<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "DJ" ?>
		| RafaGomes
	</title>
	<?php
		echo $this->WebTools->css('reset.css',false);
		echo $this->WebTools->ie9();
		echo $this->WebTools->js('jquery/jquery.js',false);
		echo $this->Html->css('layout.css');
		echo $this->Html->meta('icon');
		echo $this->Html->script('orbit/jquery.orbit-1.2.3.min');
		echo $this->Html->css('orbit.css');
	?>
</head>
<body>
<header id="topo">
	<div id="logo">
    	<?PHP echo $this->Html->image('layout/logo.png',array('url'=>'/')); ?>
    </div>
    <div id="menu">
    	<nav>
        	<ul>
            	<li><?PHP echo $this->Html->link('SOBRE','/'); ?></li>
                <li><?PHP echo $this->Html->link('MÚSICAS','/musicas'); ?></li>
                <li><?PHP echo $this->Html->link('VIDEOS','/videos'); ?></li>
                <li><?PHP echo $this->Html->link('FOTOS','/fotos'); ?></li>
                <li><?PHP echo $this->Html->link('CONTATOS','/contatos'); ?></li>
            </ul>
        </nav>
    </div>
    <div id="banner">
    	<?PHP echo $this->element('banner'); ?>
    </div>
</header><br class="clearfix">

<?PHP echo $content_for_layout; ?><br class="clearfix">


<footer id="rodape">
	<div class="copy">djrafagomes.com.br © 2014<br>
<span>Todos os direitos</span> reservados</div>
	
    <div class="midias">
    	<ul>
        	<li><a href="#" class="face tooltip"><span>Curta</span></a></li>
            <li><a href="#" class="twitter tooltip"><span>Twitter</span></a></li>
            <li><a href="#" class="youtube tooltip"><span>Assita</span></a></li>
        </ul>
    </div>
</footer>

</body>
</html>
