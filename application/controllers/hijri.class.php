<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 include_once APPPATH . 'libraries/hijri.class.php';

class Hijri extends CI_Controller {

	public function index()
	{
		echo (new hijri\datetime())->format('D _j _M _Yهـ (j-m-Yم)');
	}
}