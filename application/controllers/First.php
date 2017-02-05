<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author chach
 */
class First extends Application{
    function __construct() {
        parent::__construct();
    }
    
    /*
     * "First" page for the app
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->render();
    } 
    
    public function zzz() {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    public function gimme($id) {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get($id);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
