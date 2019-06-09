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

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->output->enable_profiler(true);
    }

    function user_online() {
        // Compruebo quien esta online y almaceno sus datos en una cookie de session
        $aDatosUser = array('username' => '');

        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row_array();

            //datos del usuario
            $aDatosUser = array(
                'username' => $user['username'],
                'user_id' => $user['id'],
                'email' => $user['email'],
                'active' => $user['active'],
            );
            //grupo al que pertenece
            //$groups = $this->ion_auth->get_users_groups()->result();
            //$aDatosUser['groups'] =  $groups;
        }
        $this->session->set_userdata($aDatosUser);
    }

}

/*
 * 
 * 
 * Controller de Administracion
 */

class AdminController extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->user_online();
        if (!$this->ion_auth->is_admin()) {

            $this->session->set_flashdata('message', 'You must be an administrator to view this page.');
            redirect(site_url('main'));
        }
    }

}

/*
 * 
 * 
 * Controller Front
 */

class FrontController extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->user_online();
    }

}
