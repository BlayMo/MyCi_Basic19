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
?> 

<li class="selected"><a href="<?= site_url('admin') ?>"><i class="fa fa-bullseye"></i> Dashboard</a></li>
<li><a href="<?= site_url('admin/users') ?>"><i class="fa fa-table"></i> Users</a></li>
<li><a href="<?= base_url('assets/Theme-DarkAdmin/')?>portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>
<li><a href="<?= site_url('admin/blog') ?>"><i class="fa fa-globe"></i> Blog</a></li>
<li><a href="<?= base_url('assets/Theme-DarkAdmin/')?>signup.html"><i class="fa fa-list-ol"></i> SignUp</a></li>
<li><a href="<?= base_url('assets/Theme-DarkAdmin/')?>register.html"><i class="fa fa-font"></i> Register</a></li>
<li><a href="<?= base_url('assets/Theme-DarkAdmin/')?>timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
<li><a href="<?= base_url('assets/Theme-DarkAdmin/')?>forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
<li><a href="<?= base_url('assets/Theme-DarkAdmin/')?>typography.html"><i class="fa fa-font"></i> Typography</a></li>
<li><a href="<?= base_url('assets/Theme-DarkAdmin/')?>bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
<li><a href="<?= base_url('assets/Theme-DarkAdmin/')?>bootstrap-grid.html"><i class="fa fa-table"></i> Bootstrap Grid</a></li>
<li><a href="<?= site_url('main') ?>"><i class="fa fa-home"></i> Front</a></li>
<li><a href="<?= site_url('salir') ?>"><i class="fa fa-table"></i> Log Out</a></li>