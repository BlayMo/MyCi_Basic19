<?php

/* * **********************************************************
 * The MIT License
 *
 * Copyright 2019 Blas Monerris Alcaraz.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.

  --------------- CodeIgniter -----------------------------------

  @package	CodeIgniter
  @author	EllisLab Dev Team
  @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
  @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
  @license	http://opensource.org/licenses/MIT	MIT License
  @link	https://codeigniter.com
  @since	Version 1.0.0
  @filesource

  --------------------- xxxxxx -------------------------

  @Proyecto: MyCi_Basic
  @Autor:    Blas Monerris Alcaraz
  @Objeto:   Aprendizaje/Desarrollo
  @Comienzo: 09-08-2016
  @Actualizado Jun-2019
  @licencia  http://opensource.org/licenses/MIT  MIT License
  @link
  @Version   1.0.1

  @mail: expresoweb2019@gmail.com

  PHP 7.3.2 + Codeigniter 3.1.10 + Bootstrap 3.4.1

  textoacambiar

  Script creado el 08-06-2019
 * ******************************************************************** */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends AdminController {

    public function index() {
        $data = [];

        $data['users'] = new stdClass();
        $data['vista'] = 'admin/widgets/admin_dashboard';
        $data['nav_bar'] = 'admin/admin_navbar';
        $this->load->view('admin/admin_vista', $data);
    }

    public function blog() {
        $data = [];

        $data['vista'] = 'admin/widgets/admin_blog';
        $data['nav_bar'] = 'admin/widgets/admin_navbar_blog';

        $this->load->view('admin/admin_vista', $data);
    }

    public function users() {
        $data = [];
        $data['title'] = $this->lang->line('index_heading');

        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        //list the users
        $data['users'] = $this->ion_auth->users()->result();

        //USAGE NOTE - you can do more complicated queries like this
        //$data['users'] = $this->ion_auth->where('field', 'value')->users()->result();

        foreach ($data['users'] as $k => $user) {
            $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
        }

        $data['vista'] = 'admin/widgets/admin_dashboard';
        $data['nav_bar'] = 'admin/admin_navbar';
        $this->load->view('admin/admin_vista', $data);
        
    }

}
