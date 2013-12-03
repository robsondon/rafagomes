<?PHP echo $this->Html->css('home.css'); ?>
<div id="home">

	<div id="fastbar">
    
    	<div class="separacao">
        	<div class="news">
            	<h3 class="bartitle"><span>Ultimas</span> Noticias</h3>
                <ul>
                	<li>
                    	<div class="date">
                        	<span class="dia">09</span>
                            <span class="mes">nov</span>
                        </div>
                        <p>nonononono ono no n on on on on o no no no no n on on on on on on o no no no no n on on</p>
                    </li>
                	<li>
                    	<div class="date">
                        	<span class="dia">09</span>
                            <span class="mes">nov</span>
                        </div>
                        <p>nonononono ono no n on on on on o no no no no n on on on on on on o no no no no n on on</p>
                    </li>
                	<li>
                    	<div class="date">
                        	<span class="dia">09</span>
                            <span class="mes">nov</span>
                        </div>
                        <p>nonononono ono no n on on on on o no no no no n on on on on on on o no no no no n on on</p>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="separacao">
        	<h3 class="bartitle"><span>Musicas</span> Recentes</h3>
            
            <iframe width="200px" height="65px" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118281772&amp;color=161413&amp;auto_play=false&amp;show_artwork=false"></iframe>
            <iframe width="200px" height="65px" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/117453560&amp;color=161413&amp;auto_play=false&amp;show_artwork=false"></iframe>
            <iframe width="200px" height="65px" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/116320301&amp;color=161413&amp;auto_play=false&amp;show_artwork=false"></iframe>
            
            
        </div>
        <div class="separacao">
        	<div class="imagem">
        	<?PHP echo $this->Html->image('home/dj.jpg'); ?>
            </div>
        </div>
        
    </div>
    
    <div id="updates">
    	<div class="separacao">
        	<h3 class="bartitle"><span>Eventos</span> Marcados</h3>
            <div class="events">
            <ul>
                <li>
                    <div class="date">
                        <span class="dia">09</span>
                        <span class="mes">nov</span>
                    </div>
                    <p>nonononono ono no n on on on on o no no no no n on on on on on on o no no no no n on on</p>
                </li>
                <li>
                    <div class="date">
                        <span class="dia">09</span>
                        <span class="mes">nov</span>
                    </div>
                    <p>nonononono ono no n on on on on o no no no no n on on on on on on o no no no no n on on</p>
                </li> 
            </ul>
            </div>
        </div>
        <div class="separacao">
        	<h3 class="bartitle"><span>Ultimo</span> Vídeos</h3>
            <div class="youtube">
            	<?PHP echo $this->Html->link('','#',array('class'=>'playbtn')); ?>
            	<?PHP echo $this->Youtube->thumbnail('QGVYbgKABb4','large'); ?>
            </div>
        </div>
        <div class="separacao">
        	<h3 class="bartitle"><span>Rafa</span> Gomes</h3>
            <div class="sobre">
                <p>
                Sed ut perspiciatis unde omnis 
    Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.
     aut odit aut fugit.
     sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>
            </div>
        </div>
    
    </div>
    
</div>
