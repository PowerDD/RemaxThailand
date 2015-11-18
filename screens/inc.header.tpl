<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{$title} : Remax (Thailand)</title>
        <meta name="description" content="{$description}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="https://src.24fin.com/site/seller/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://src.24fin.com/site/seller/favicon.ico" type="image/x-icon">
        <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" rel="stylesheet">
        <link href="https://cdn.powerdd.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.powerdd.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{$system_url}/styles/style" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<input type="hidden" id="api_url" value="{$api_url}">
	<input type="hidden" id="api_key" value="{$api_key}">
	<input type="hidden" id="api_url_new" value="{$api_url_new}">
	{if isset($smarty.session.member.id)}
		<input type="hidden" id="member_id" value="{$smarty.session.member.id}">
		<input type="hidden" id="service_url" value="{$service_url}">
		<input type="hidden" id="service_key" value="{$service_key}">
		<script src="//ajax.aspnetcdn.com/ajax/mobileservices/MobileServices.Web-1.1.0.min.js"></script>
	{/if}

    <div class="container">

	<nav role="navigation" class="navbar navbar-default navbar-fixed-top nav-shadow">
		<div class="container">
			<div class="navbar-header">
				<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{$system_url}" class="navbar-brand"><img src="https://img.powerdd.com/web/logo/remax.png"></a>
			</div>

			<div class="navbar-collapse collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li{if $filename == 'home'} class="active"{/if}><a href="{$system_url}">หน้าหลัก</a></li>
					<li{if strpos($filename, 'about_us') !== false} class="active"{/if}><a href="{$system_url}/about_us">เกี่ยวกับเรา</a></li>
					<li class="dropdown{if $filename == 'product/category'} active{/if}">
						<a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">หมวดหมู่สินค้า <span class="caret"></span></a>
						<ul role="menu" class="dropdown-menu">
							<li{if isset($category_name) && $category_name == 'new'} class="active"{/if}><a href="{$system_url}/product/category/new">New Arrivals</a></li>
							{section name=idx loop=$category.id}
								{if $category.id[idx] != '2-7'}
									<li{if isset($category_name) && $category_name == $category.url[idx]} class="active"{/if}><a href="{$system_url}/product/category/{$category.url[idx]}">{$category.name[idx]}</a></li>
								{/if}
							{/section}
						</ul>
					</li>
					<li{if strpos($filename, 'contact_us') !== false} class="active"{/if}><a href="{$system_url}/contact_us">ติดต่อเรา</a></li>
					<li{if strpos($filename, 'warranty_condition') !== false} class="active"{/if}><a href="{$system_url}/warranty_condition">เงื่อนไขการรับประกัน</a></li>
          <li{if strpos($filename, 'payment') !== false} class="active"{/if}><a href="{$system_url}/payment">วิธีการชำระเงิน</a></li>
				</ul>
        <!--
				<form class="navbar-form navbar-left" role="search" method="POST" action="{$system_url}/product/search">
					<div class="input-group">
						<input type="text" class="form-control" id="keyword" name="keyword" placeholder="ค้นหาสินค้า" value="{if isset($smarty.post.keyword)}{$smarty.post.keyword}{/if}">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button" id="btn-search"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form> -->

				<ul class="nav navbar-nav navbar-right">
				{if isset($smarty.session.member.id)}
					<li class="dropdown">
						<a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user"></i> สวัสดีค่ะ คุณ{$smarty.session.member.firstName} <span class="caret"></span></a>
						<ul role="menu" class="dropdown-menu">
							<li><a href="{$system_url}/member/">หน้าหลัก</a></li>
							<li><a href="{$system_url}/member/barcode">Scan Barcode</a></li>
							<li><a href="{$system_url}/member/profile">ข้อมูลร้านค้า</a></li>
							<li role="presentation" class="divider"></li>
							<li><a href="https://auth.24fin.com/remax/logout">ออกจากระบบ</a></li>
						</ul>
					</li>
				{else}
					<li><a href="https://24fin-backend.azurewebsites.net">เข้าสู่ระบบ/สมัครสมาชิก</a></li>
				{/if}
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<div class="nav-bottom"></div>
