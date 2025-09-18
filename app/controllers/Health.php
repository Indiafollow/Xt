<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Health extends CI_Controller
{
    public function index()
    {
        header('Content-Type: text/plain');
        echo 'OK';
    }
}
