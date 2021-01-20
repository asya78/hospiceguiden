<?php

class Hospiceguiden {

    public $page_title;
    public $page_description;
    public $page_kaywords;
    public $page_name;
    public $configs;
    public $isPartial = false;

    public function __construct() {
        $this->configs = parse_ini_file(dirname(__DIR__) . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.ini", true);
        $this->GET_CTRL(\filter_input_array(INPUT_GET));
    }

    private function GET_CTRL($param) {
        $uri = explode('/', $param['page']);
        $part = array_shift($uri);
        $this->page_name = ($part == "") ? 'index' : $part;
        $this->page_title = $this->configs['pageTitle'][(!$this->configs['pageTitle'][$this->page_name]) ? 'index' : $this->page_name];
        $this->page_description = $this->configs['metaDescription'][(!$this->configs['metaDescription'][$this->page_name]) ? 'index' : $this->page_name];
        $this->page_keywords = $this->configs['metaKeywords'][(!$this->configs['metaKeywords'][$this->page_name]) ? 'index' : $this->page_name];
        if (method_exists($this, $this->page_name)) {
            $this->$param['page']();
        }
    }

    private function redirect($url = NULL) {
        if (empty($_SERVER['HTTPS'])) {
            $http = "http";
        } else {
            $http = "https";
        }
        header("Location: " . $http . "://" . $_SERVER['SERVER_NAME'] . substr($_SERVER['PHP_SELF'], 0, -9) . $url);
        exit;
    }


}
