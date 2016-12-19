<?php

use Yaf\Plugin_Abstract as BasePlugin;
use Yaf\Request_Abstract as HttpRequest;
use Yaf\Response_Abstract as HttpResponse;

/**
 * @name SamplePlugin
 * @desc Yaf定义了如下的6个Hook,插件之间的执行顺序是先进先Call
 * @see http://www.php.net/manual/en/class.yaf-plugin-abstract.php
 * @author root
 */
class SamplePlugin extends BasePlugin {

	public function routerStartup(HttpRequest $request, HttpResponse $response) {
	}

	public function routerShutdown(HttpRequest $request, HttpResponse $response) {
	}

	public function dispatchLoopStartup(HttpRequest $request, HttpResponse $response) {
	}

	public function preDispatch(HttpRequest $request, HttpResponse $response) {
	}

	public function postDispatch(HttpRequest $request, HttpResponse $response) {
	}

	public function dispatchLoopShutdown(HttpRequest $request, HttpResponse $response) {
	}

}
