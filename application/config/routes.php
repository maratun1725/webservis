<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['mahasiswa/get_data']['GET'] = 'MahasiswaController/get_mahasiswa';
$route['mahasiswa/insert_data']['POST'] = 'MahasiswaController/insert_mahasiswa';
$route['mahasiswa/update_data']['POST'] = 'MahasiswaController/update_mahasiswa';
$route['mahasiswa/delete_data']['POST'] = 'MahasiswaController/delete_mahasiswa';
