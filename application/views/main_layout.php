<? $this->load->view('components/page_head.php'); ?>
<div class="navbar navbar-static-top">
	<div class="container">
	<div class="navbar-header">
	  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		<span class="sr-only">Развернуть/Свернуть</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	 <a class="navbar-brand" href="<? echo site_url('/'); ?>"><img src="/assets/img/logo.png" style="height:50px;"/></a>
	</div>
	<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		<ul class="nav navbar-nav">
			<li><? echo anchor('/page/1','<i class="fa fa-file"></i> Правила'); ?></li>
			<li><? echo anchor('/page/2','<i class="fa fa-envelope"></i> Контакты'); ?></li>
		</ul>
	</nav>
	</div>
</div>
  <body>
    <div class="container">
		<center><img src="/assets/img/logo.png" style="width:100%;max-width:450px;"/></center>
		<div class="row maincont">
			<div class="col-lg-8">
			<? $this->load->view($subview); ?>
			</div>
		</div>
	</div>		
	<div id="loading"><i style="position:absolute; top:50%; left:50%" class="fa fa-spinner fa-pulse fa-4x"></i></div> 
	
<? $this->load->view('components/page_foot.php'); ?>