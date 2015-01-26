<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Guess extends Application {
 
    function __construct() 
    {
        parent::__construct();
    }

    function index() 
    {
        $this->data['pagebody'] = 'justone'; 
        $source = $this->quotes->get('4');
        
        $who = $source['who'];
        $mug = $source['mug'];
        $where = $source['where'];
        $what = $source['what'];
        
        $this->data['who'] = $who;
        $this->data['mug'] = $mug;
        $this->data['href'] = $where;
        $this->data['what'] = $what;

        $this->render();
    }
    
}