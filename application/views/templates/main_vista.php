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

  --------------------- Mi codigo  -------------------------

  @Autor:    Blas Monerris Alcaraz
  @Objeto:   Aprendizaje/Desarrollo
  @Comienzo: 22-05-2019
  @licencia  http://opensource.org/licenses/MIT  MIT License

  @Version   1.0.0

  @mail: expresoweb2019@gmail.com

  PHP 7.3.2 + Codeigniter 3.1.10 + Bootstrap 3.3.7



  Script creado el 22-05-2019
 * ******************************************************************** */
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content = "3600; url=<?= site_url('salir') ?>">
        <title>Basic19</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>

        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/blog-home.css') ?>" >
        <link rel="stylesheet" href="<?php //echo base_url('assets/bootstrap/css/local.css')   ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/blaymo.css') ?>">
        <style>
            #toTop{
                position: fixed;
                bottom: 10px;
                right: 10px;
                cursor: pointer;
                display: none;
            }
        </style>

    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= site_url('main') ?>">Basic19</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= site_url('main') ?>">Portada</a></li>
                        <li><a href="https://github.com/BlayMo/MyCi_Basic19">GitHub</a></li>
                        <li><a href="<?= site_url('main/contact') ?>">Contacto</a></li>
                        <?php if ($this->ion_auth->logged_in()) { ?>   
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <?php if ($this->ion_auth->is_admin()) { ?>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="<?= site_url('auth') ?>">Usuarios</a></li>
                                        <li><a href="<?= site_url('auth/groups') ?>">Grupos</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (!$this->ion_auth->logged_in()) { ?>            
                            <li class="pull-right"><a href="<?= site_url('auth/login') ?>">Login</a></li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($this->ion_auth->logged_in()) { ?>   
                            <li class="pull-right"><a href="<?= site_url('admin') ?>">Admin</a></li>
                            <li class="pull-right"><a href="<?= site_url('main/salir') ?>">Salir</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid">

            <?php $this->load->view($vista); ?> 

        </div>    
        <script src="<?php echo base_url('assets/bootstrap/js/jquery.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script>
            //boton Up    
            $(document).ready(function () {
                $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
                $(window).scroll(function () {
                    if ($(this).scrollTop() !== 0) {
                        $('#toTop').fadeIn();
                    } else {
                        $('#toTop').fadeOut();
                    }
                });
                $('#toTop').click(function () {
                    $("html, body").animate({scrollTop: 0}, 600);
                    return false;
                });
            });
        </script>

    </body>
</html>     
