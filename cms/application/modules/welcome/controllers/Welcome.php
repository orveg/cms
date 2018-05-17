<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function index()
    {

        $this->template->set_layout('home')
                       ->set_partial('header', 'partials/header')
                       ->set_partial('header', 'partials/footer')
                       ->build('welcome_message', array('message' => 'Hi there!'));
    }
}
