<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['judul_besar'] = 'Simpleton V 1.0.0';
		$data['judul_kecil'] = 'Contoh script menarik data dari fingerprint';
		$data['output'] = '<div class="content body">
							<section id="introduction">
							  <h2 class="page-header">Intro</h2>
							  <p class="lead">
							    Source code menarik data dari fingerprint ini dibuat menggunakan <b>Simpleton</b>. <b>Simpleton</b> dibuat untuk memudahkan kamu dalam membuat program PHP yang selalu membutuhkan Autentikasi dan operasi CRUD (Create, Read, Update & Delete).
							    Daripada membuat autentikasi dan CRUD berulang-ulang, lebih baik memakai <b>Simpleton</b> Saja :D
							    Skeleton Codeigniter ini menggunakan template <a href = "https://almsaeedstudio.com/preview">AdminLTE</a>, salah satu template gratis terpopuler saat ini. <b>Simpleton</b> cocok untuk kamu yang familiar dengan :<br><br>
							    1. <a href = "http://www.codeigniter.com/download">Codeigniter</a><br>
							    2. <a href = "http://benedmunds.com/ion_auth/">Ion Auth</a><br>
							    3. <a href = "http//grocerycrud.com">GroceryCRUD</a><br><br>
							    Punya saran atau ingin diskusi tentang <b>Simpleton</b> ? <a href = "https://www.facebook.com/groups/924598607617619">Disini tempatnya.</a><br>
							    Suka dengan <b>Simpleton</b> ? Silahkan like fanpagenya : <a href = "https://www.facebook.com/heruprambadicom-1650504335226276">Disini tempatnya.</a><br>
							  </p>
							</section><!-- /#introduction -->
							<!-- ============================================================= -->

							<section id="download">
							  <div class="row">
							    <div class="col-sm-6">
							      <div class="box box-primary">
							        <div class="box-header with-border">
							          <h3 class="box-title">Punya saran atau ingin diskusi tentang <b>Simpleton</b> ?</h3>
							          <span class="label label-primary pull-right"><i class="fa fa-html5"></i></span>
							        </div><!-- /.box-header -->
							        <div class="box-body">
							          <p>Silahkan beri masukan, atau request fitur tambahan di group dibawah ini.</p>
							          <a class="btn btn-primary" href="https://www.facebook.com/groups/924598607617619" target = "_blank">Group Simpleton</a>
							        </div><!-- /.box-body -->
							      </div><!-- /.box -->
							    </div><!-- /.col -->
							    <div class="col-sm-6">
							      <div class="box box-danger">
							        <div class="box-header with-border">
							          <h3 class="box-title">Suka dengan <b>Simpleton</b> ?</h3>
							          <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
							        </div><!-- /.box-header -->
							        <div class="box-body">
							          <p>Silahkan like fanpagenya.</p>
							          <a class="btn btn-danger" href = "https://www.facebook.com/heruprambadicom-1650504335226276" target = "_blank">Disini tempatnya.</a>
							        </div><!-- /.box-body -->
							      </div><!-- /.box -->
							    </div><!-- /.col -->
							  </div><!-- /.row -->';
		$this->load->view('welcome_message', $data);
	}
}
