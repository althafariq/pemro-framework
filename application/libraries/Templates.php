<?php

class Templates
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function display($template = NULL, $data = NULL)
    {
        if ($template != NULL && $data != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
            $data['_header'] = $this->ci->load->view('templates/header', $data, TRUE);
            $data['_sidebar'] = $this->ci->load->view('templates/sidebar', $data, TRUE);
            $data['_template'] = $this->ci->load->view('templates/template', $data);
    }

    function auth($template = NULL, $data = NULL)
    {
        if ($template != NULL && $data != NULL)
            $data['_auth_content'] = $this->ci->load->view($template, $data, TRUE);
            $data['_auth_header'] = $this->ci->load->view('templates/auth_header', $data, TRUE);
            $data['_auth_footer'] = $this->ci->load->view('templates/auth_footer', $data, TRUE);
            $data['_auth_template'] = $this->ci->load->view('templates/auth_template', $data);
    }
}