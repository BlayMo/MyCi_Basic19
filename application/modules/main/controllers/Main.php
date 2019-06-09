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

class Main extends FrontController {

    public function index() {
        $data = [];
        
        $data['vista'] = 'main/portada';
        $this->load->view('templates/main_vista',$data);
    }
    
    public function salir(){
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }
    
    //--------------- formulario de contacto ------------------
        public function contact()
	{        
            // array de datos en blanco        
            $data = array(               
                'action' => site_url('main/create_contact'),
                'nombre' => set_value('nombre'),
                'email' => set_value('email'),
                'texto' => set_value('texto'),	   
            );
            $this->load->view('contact_form', $data);
        }
        
        public function create_contact() 
        {
            $this->_rules();

            if ($this->form_validation->run() == FALSE) {                
                $this->session->set_flashdata('message', validation_errors());
                $this->contact();
            } else {
                $data = array(
                    'nombre' => $this->input->post('nombre',TRUE),
                    'email' => $this->input->post('email',TRUE),
                    'texto' => $this->input->post('texto',TRUE),		
                );

            $this->envia_mail($data); //Por seguridad he omitido mi datos de gmail            
            redirect(site_url('main'));
            }
        }
        
        private function envia_mail($data)
        {
            //codigo para enviar mail con $data desde contact                    
            //cargamos la libreria email de ci
            $this->load->library("email");

            //configuracion para gmail
            // 'smtp_host' => 'ssl://smtp.gmail.com',
            $configGmail = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'localhost',
                    'smtp_port' => 25,
                    'smtp_user' => 'mi cuenta de gmail',
                    'smtp_pass' => 'mi password de gmail',
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'newline' => "\r\n"
                    );    

            //cargamos la configuración para enviar con gmail
            $this->email->initialize($configGmail);

            $this->email->from('mybasic19@gmail.com','MyCi_Basic19');
            
            $this->email->to($data['email']);
            $this->email->subject('Bienvenido/a a MyCi_Basic');
            $this->email->message('<h2>Email enviado con codeigniter haciendo uso del smtp de gmail</h2><hr><br> Bienvenido al blog');
            $this->email->send();
           
            $this->session->set_flashdata('message', 'Mensaje enviado Ok');

        }
        

}
