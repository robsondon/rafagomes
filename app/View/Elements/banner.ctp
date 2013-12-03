<script type="text/javascript">
	$(window).load(function() {
		$('#featured').orbit();
	});
</script>
<?PHP
$banners = glob('img/banner/*.[jJ][pP][gG]');
?>

<div id="featured">
<?PHP foreach($banners as $banner): ?>
    <?PHP echo $this->Html->image('/'.$banner); ?>
 <?PHP endforeach ?>
</div>
    