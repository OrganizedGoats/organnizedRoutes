<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(count($this->quotes->data));
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];
        $this->render();
    }
}