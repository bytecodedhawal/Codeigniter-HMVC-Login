<?php

class MY_Controller extends MX_Controller
{
    function __construct()
    {
        $this->load->helper('security_helper');
        parent:: __construct();
    }
}