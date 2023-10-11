<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//routes

$route['dashboard'] = 'welcome/index';

//IndexAuth
$route['login'] = 'Auth/Auth/index';

//administrator
$route['administrator/login'] = 'Auth/Administrator/index';
$route['administrator-login-proses'] = 'Auth/Administrator/loginAdmin';
$route['user/login'] = 'Auth/Warga/index';
$route['user-login-proses'] = 'Auth/Warga/loginUser';
$route['user/register'] = 'Auth/Warga/register';
$route['user-register-proses'] = 'Auth/Warga/registerUser';
$route['logout'] = 'Auth/Logout/index';

$route['data-administrator'] = 'Administrator/Users/Administrator/index';
$route['created-administrator'] = 'Administrator/Users/Administrator/tambah';
$route['update-administrator/(:any)'] = 'Administrator/Users/Administrator/update/$1';
$route['deleted-administrator/(:any)'] = 'Administrator/Users/Administrator/deleted/$1';

$route['data-warga'] = 'Administrator/DataWarga/Warga/index';
$route['tambah-data-warga'] = 'Administrator/DataWarga/Warga/index_tambah';
$route['create-warga'] = 'Administrator/DataWarga/Warga/create';
$route['edit-warga/(:any)'] = 'Administrator/DataWarga/Warga/index_edit/$1';
$route['aksi-edit-warga/(:any)'] = 'Administrator/DataWarga/Warga/edit/$1';
$route['detail-warga/(:any)'] = 'Administrator/DataWarga/Warga/detail/$1';
$route['delete-warga/(:any)'] = 'Administrator/DataWarga/Warga/delete/$1';

$route['data-users'] = 'Administrator/Users/User/index';
$route['tambah-user'] = 'Administrator/Users/User/create';
$route['edit-user/(:any)'] = 'Administrator/Users/User/edit/$1';
$route['hapus-user/(:any)'] = 'Administrator/Users/User/delete/$1';



//verifikasi surat
//surat keterangan usaha
$route['verifikasi-surat-keterangan-usaha'] = 'Administrator/Verifikasi/SuratKeteranganUsaha/index';
$route['update-status-sku'] = 'Administrator/Verifikasi/SuratKeteranganUsaha/skuverif';
$route['komentar-sku/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganUsaha/skukomentar/$1';
$route['preview-sku/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganUsaha/preview/$1';

//surat keterangan domisili usaha
$route['verifikasi-surat-keterangan-domisili-usaha'] = 'Administrator/Verifikasi/SuratKeteranganDomisiliUsaha/index';
$route['update-status-skdu'] = 'Administrator/Verifikasi/SuratKeteranganDomisiliUsaha/skduverif';
$route['komentar-skdu/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganDomisiliUsaha/skdukomentar/$1';
$route['preview-skdu/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganDomisiliUsaha/preview/$1';

//surat keterangan domisili
$route['verifikasi-surat-keterangan-domisili'] = 'Administrator/Verifikasi/SuratKeteranganDomisili/index';
$route['update-status-skd'] = 'Administrator/Verifikasi/SuratKeteranganDomisili/skdverif';
$route['komentar-skd/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganDomisili/skdkomentar/$1';
$route['preview-skd/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganDomisili/preview/$1';

//surat keterangan beda nama
$route['verifikasi-surat-keterangan-beda-nama'] = 'Administrator/Verifikasi/SuratKeteranganBedaNama/index';
$route['update-status-skbn'] = 'Administrator/Verifikasi/SuratKeteranganBedaNama/skbnverif';
$route['komentar-skbn/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganBedaNama/skbnkomentar/$1';
$route['preview-skbn/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganBedaNama/preview/$1';

//surat keterangan pemakaman
$route['verifikasi-surat-keterangan-pemakaman'] = 'Administrator/Verifikasi/SuratKeteranganPemakaman/index';
$route['update-status-skp'] = 'Administrator/Verifikasi/SuratKeteranganPemakaman/skpverif';
$route['komentar-skp/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganPemakaman/skpkomentar/$1';
$route['preview-skp/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganPemakaman/preview/$1';


//users

//buat surat -list
$route['list-surat'] = 'Warga/Surat/Surat/index';

//sku
$route['sku/buat-surat'] = 'Warga/Surat/Sku/Sku/index';
$route['sku/proses'] = 'Warga/Surat/Sku/Sku/create';

$route['histori-sku'] = 'Warga/History/Sku/index';

//skdu
$route['skdu/buat-surat'] = 'Warga/Surat/Skdu/Skdu/index';
$route['skdu/proses'] = 'Warga/Surat/Skdu/Skdu/create';

$route['histori-skdu'] = 'Warga/History/Skdu/index';

//skd
$route['skd/buat-surat'] = 'Warga/Surat/Skd/Skd/index';
$route['skd/proses'] = 'Warga/Surat/Skd/Skd/create';

$route['histori-skd'] = 'Warga/History/Skd/index';

//skbn
$route['skbn/buat-surat'] = 'Warga/Surat/Skbn/Skbn/index';
$route['skbn/proses'] = 'Warga/Surat/Skbn/Skbn/create';

$route['histori-skbn'] = 'Warga/History/Skbn/index';

//skp
$route['skp/buat-surat'] = 'Warga/Surat/Skp/Skp/index';
$route['skp/proses'] = 'Warga/Surat/Skp/Skp/create';

$route['histori-skp'] = 'Warga/History/Skp/index';

//HISTORY SURAT
//history
$route['histori-surat'] = 'Warga/History/History/index';


//surat keterangan usaha
$route['history-surat-keterangan-usaha'] = 'Warga/History/SuratKeteranganUsaha/index';

//surat keterangan domisili usaha
$route['history-surat-keterangan-domisili-usaha'] = 'Warga/History/SuratKeteranganDomisiliUsaha/index';

//surat keterangan domisili
$route['history-surat-keterangan-domisili'] = 'Warga/History/SuratKeteranganDomisili/index';

//surat keterangan beda nama
$route['history-surat-keterangan-beda-nama'] = 'Warga/History/SuratKeteranganBedaNama/index';

//surat keterangan pemakaman
$route['history-surat-keterangan-pemakaman'] = 'Warga/History/SuratKeteranganPemakaman/index';



//cetak surat

//surat keterangan usaha
$route['cetak-surat-keterangan-usaha/(:any)'] = 'Warga/History/SuratKeteranganUsaha/cetak/$1';

//surat keterangan domisili usaha
$route['cetak-surat-keterangan-domisili-usaha/(:any)'] = 'Warga/History/SuratKeteranganDomisiliUsaha/cetak/$1';

//surat keterangan domisili
$route['cetak-surat-keterangan-domisili/(:any)'] = 'Warga/History/SuratKeteranganDomisili/cetak/$1';

//surat keterangan beda nama
$route['cetak-surat-keterangan-beda-nama/(:any)'] = 'Warga/History/SuratKeteranganBedaNama/cetak/$1';

//surat keterangan pemakaman
$route['cetak-surat-keterangan-pemakaman/(:any)'] = 'Warga/History/SuratKeteranganPemakaman/cetak/$1';

//hapus surat
$route['hapus-surat-keterangan-usaha/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganUsaha/hapus/$1';
$route['hapus-surat-keterangan-domisili-usaha/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganDomisiliUsaha/hapus/$1';
$route['hapus-surat-keterangan-domisili/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganDomisili/hapus/$1';
$route['hapus-surat-keterangan-beda-nama/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganBedaNama/hapus/$1';
$route['hapus-surat-keterangan-pemakaman/(:any)'] = 'Administrator/Verifikasi/SuratKeteranganPemakaman/hapus/$1';
