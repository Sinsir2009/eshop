<?php
return array(
	'product/([0-9]+)' => 'product/view/$1', //actionView ProductController
	
	'catalog' => 'catalog/index', //actionIndex CatalogController
	'category/([0-9]+)/page-([0-9])+' => 'catalog/category/$1/$2', //actionCategory CatalogController
	'category/([0-9]+)' => 'catalog/category/$1', //actionCategory CatalogController
	
	'user/register' => 'user/register',
	'user/login' => 'user/login',
	'user/logout' => 'user/logout',
	
	'cabinet/edit' => 'cabinet/edit', //actionEdit CabinetController
	'cabinet' => 'cabinet/index', //actionIndex CabinetController

	
	'' => 'site/index', //actionIndex SiteController

);