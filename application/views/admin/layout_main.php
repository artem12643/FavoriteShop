<? $this->load->view('admin/components/adm_head')?>
  <body>
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
					<li><? echo anchor('admin/goods','Товары'); ?></li>
					<li><? echo anchor('admin/orders','Заказы'); ?></li>
					<li><? echo anchor('admin/coupons','Промо-коды'); ?></li>
					<li><? echo anchor('admin/config','Настройки'); ?></li>
					<li><? echo anchor('admin/page','Страницы'); ?></li>
				</ul>
				<ul class="nav navbar-nav pull-right">
					<li><? echo anchor('admin/user/logout','<i class="fa fa-power-off"></i> Выйти'); ?></li>
				</ul>
			</nav>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="<? echo $subview == 'admin/orders' ? 'col-lg-12' : 'col-lg-8';?>">
			<? empty($subview) ? "" : $this->load->view($subview)  ?>
			</div>
		</div>
	</div>
<? $this->load->view('admin/components/adm_foot'); ?>