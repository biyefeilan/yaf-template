<?php

class Twig implements Yaf\View_Interface {

    /**
     * @var Twig_Loader_Filesystem
     */
    protected $loader;

    /**
     * @var Twig_Environment
     */
    protected $twig;

    /**
     * @var array
     */
    protected $variables = [];

    public function __construct($templateDir, array $options = []) {
        $this->loader = new Twig_Loader_Filesystem($templateDir);
        $this->twig   = new Twig_Environment($this->loader, $options);
    }

    public function __isset($name) {
        return isset($this->variables[$name]);
    }

    public function __set($name, $value) {
        $this->variables[$name] = $value;
    }

    public function __get($name) {
        return $this->variables[$name];
    }

    public function __unset($name) {
        unset($this->variables[$name]);
    }

    public function getTwig() {
        return $this->twig;
    }

    public function assign($name, $value = null) {
        $this->variables[$name] = $value;
    }

    public function display($template, $variables = null) {
        echo $this->render($template, $variables);
    }

    public function getScriptPath() {
        return $this->loader->getPaths();
    }

    public function render($template, $variables = null) {
        if ( is_array($variables) ) {
            $this->variables = array_merge($this->variables, $variables);
        }
        return $this->twig->loadTemplate($template)->render($this->variables);
    }

    public function setScriptPath($templateDir) {
        $this->loader->setPaths($templateDir);
    }

}