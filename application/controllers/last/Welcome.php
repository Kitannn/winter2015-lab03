<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Welcome extends Application {

    function __construct() 
    {
        parent::__construct();
    }

    function index() 
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->last();
        
        $person = $source['person'];
        $pic = $source['pic'];
        $where = $source['where'];
        $what = $source['what'];
        
        $this->data['person'] = $person;
        $this->data['pic'] = $pic;
        $this->data['href'] = $where;
        $this->data['what'] = $what;
        
        $this->render();
    }
}