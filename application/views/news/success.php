<?php header('Content-type:text/html;charset=utf-8');?>
<h2>添加成功！</h2>
<h3>自动跳回<a href="<?=$_SERVER['HTTP_REFERER']?>">添加页面</a></h3>
<script type="text/javascript">
	function redrect(){
		window.location = '<?=$_SERVER['HTTP_REFERER']?>';
	}
	window.setTimeout(redrect,10000);
</script>
