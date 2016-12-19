<?php

use Yaf\Application as Application;
use Yaf\Bootstrap_Abstract as BaseBootstrap;
use Yaf\Dispatcher as Dispatcher;
use Yaf\Loader;
use Yaf\Registry as Registry;


/**
 * @name Bootstrap
 * @author root
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends BaseBootstrap {

    public function _initConfig() {
		//把配置保存起来
		$arrConfig = Application::app()->getConfig();
		Registry::set('config', $arrConfig);

	}

	public function _initLoader(Dispatcher $dispatcher) {
        Loader::import(APP_PATH . '/vendor/autoload.php');
    }

	public function _initPlugin(Dispatcher $dispatcher) {
		//注册一个插件
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
	}
	
	public function _initView(Dispatcher $dispatcher) {
        $config = Registry::get('config');
        $dispatcher->setView(new Twig($config->get('application.directory') . '/views', $config->get('twig')->toArray()));
	}


}