            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h4>Preview Surat Keterangan Domisili Usaha</h4>
            	</div>
            	<a href="<?= base_url('verifikasi-surat-keterangan-domisili-usaha') ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<div class="table-responsive overflow-auto">
            							<h6>Data Pemohon :</h6>
            							<table class="table" style="width:100%">
            								<?php foreach ($datas as $data) { ?>
            									<tr>
            										<td>Nama</td>
            										<td>:</td>
            										<td><?= $data->nama ?></td>
            									</tr>
            									<tr>
            										<td>Tempat lahir</td>
            										<td>:</td>
            										<td><?= $data->tempat_lahir ?></td>
            									</tr>
            									<tr>
            										<td>Tanggal lahir</td>
            										<td>:</td>
            										<td><?= $data->tanggal_lahir ?></td>
            									</tr>
            									<tr>
            										<td>Nik</td>
            										<td>:</td>
            										<td><?= $data->nik ?></td>
            									</tr>
            									<tr>
            										<td>Jabatan</td>
            										<td>:</td>
            										<td><?= $data->jabatan ?></td>
            									</tr>
            									<p>Surat</p>
            									<tr>
            										<td>Alamat</td>
            										<td>:</td>
            										<td><?= $data->alamat ?></td>
            									</tr>
            										<tr>
            										<td>Nama usaha</td>
            										<td>:</td>
            										<td><?= $data->nama_usaha ?></td>
            									</tr>
            										<tr>
            										<td>Alamat usaha</td>
            										<td>:</td>
            										<td><?= $data->alamat_usaha ?></td>
            									</tr>
            									<tr>
            										<td>File KTP</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('./assets/file_ktp/') . $data->file_ktp ?>" class="img-thumbnail">
            										</td>
            									</tr>
            									<tr>
            										<td>File surat keterangan RT RW</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('./assets/file_surat_keterangan_rt_rw/') . $data->file_surat_keterangan_rt_rw ?>" class="img-thumbnail">
            										</td>
            									</tr>
            								<?php } ?>
            							</table>
            						</div>
            					</div>
            				</div>

            			</div>
            		</div>
            	</section>
            </div>
          