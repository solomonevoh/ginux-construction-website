<?php
class Core
{
    protected $currentController  = 'Pages';
    protected $currentMethod      = 'index';
    protected $params             = [];

    public function __construct()
    {
        //print_r($this->getUrl());
    // $url = $this->getUrl();
    //
    // if (file_exists(APPROOT. '/'. $url[0]. '.php')){
    //   $this->currentController = ucwords($url[0]);
    //   //Unset variable.
    //   unset($url[0]);
    //   //Redirect::to(URLROOT.'/app/'.$this->currentController. '.php');
    //   }
    //
    //   //Require file
    //   require_once APPROOT . '/controllers/'.$this->currentController. '.php';
    //
    //   //Instantiate Class.
    //   $this->currentController = new $this->currentController;
    //
    //   // Check for second part of url
    //   if(isset($url[1])){
    //     // Check to see if method exists in controller
    //     if(method_exists($this->currentController, $url[1])){
    //       $this->currentMethod = $url[1];
    //       // Unset 1 index
    //       unset($url[1]);
    //     }
    //   }

      // Get params
      //$this->params = $url ? array_values($url) : [];

      // Call a callback with array of params
      //call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
