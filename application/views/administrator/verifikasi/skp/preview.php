            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h4>Preview Surat Keterangan Pemakaman</h4>
            	</div>
            	<a href="<?= base_url('verifikasi-surat-keterangan-pemakaman') ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
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
            										<td>Hubungan keluarga</td>
            										<td>:</td>
            										<td><?= $data->hubungan ?></td>
            									</tr>
            									<tr>
            										<td>Nama Pemohon</td>
            										<td>:</td>
            										<td><?= $data->nama ?></td>
            									</tr>
            						
            									<tr>
            										<td>Alamat</td>
            										<td>:</td>
            										<td><?= $data->alamat ?></td>
            									</tr>
            								
            									<tr>
            										<td>Keperluan</td>
            										<td>:</td>
            										<td><?= $data->keperluan ?></td>
            									</tr>
            									<tr>
            										<td>File KTP</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('../assets/file_ktp/') . $data->file_ktp ?>" class="img-thumbnail">
            										</td>
            									</tr>
            									<tr>
            										<td>File RT/RW</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('./assets/file_surat_keterangan_rt_rw/') . $data->file_surat_keterangan_rt_rw ?>" class="img-thumbnail">
            										</td>
            									</tr>
            								<?php } ?>
            							</table>
            							<h6>Data Almarhum / Almarhumah</h6>
            							<table class="table" style="width:100%">
            								<?php foreach ($datas as $data) { ?>
            									<tr>
            										<td>Nama Alm/h </td>
            										<td>:</td>
            										<td><?= $data->nama_alm ?></td>
            									</tr>
            										<tr>
            										<td>Bin/i</td>
            										<td>:</td>
            										<td><?= $data->bin ?></td>
            									</tr>
            									<tr>
            										<td>NIK</td>
            										<td>:</td>
            										<td><?= $data->nik ?></td>
            									</tr>
            										<tr>
            										<td>TTL</td>
            										<td>:</td>
            										<td><?= $data->tempat_lahir ?>, <?= $data->tanggal_lahir ?></td>
            									</tr>
            										<tr>
            										<td>Kewarganegaraan</td>
            										<td>:</td>
            										<td><?= $data->kewarganegaraan ?></td>
            									</tr>
            										<tr>
            										<td>Agama</td>
            										<td>:</td>
            										<td><?= $data->agama ?></td>
            									</tr>
            										<tr>
            										<td>Jenis Kelamin</td>
            										<td>:</td>
            										<td><?= $data->kelamin ?></td>
            									</tr>
            										<tr>
            										<td>Pekerjaan</td>
            										<td>:</td>
            										<td><?= $data->pekerjaan ?></td>
            									</tr>
            								
            								
            									<tr>
            										<td>Status Pernikahan</td>
            										<td>:</td>
            										<td><?= $data->status_perkawinan ?></td>
            									</tr>
            								
            									<tr>
            										<td>Hari Meninggal</td>
            										<td>:</td>
            										<td><?= $data->hari_meninggal ?></td>
            									</tr>
            										<tr>
            										<td>Hari Pemakaman</td>
            										<td>:</td>
            										<td><?= $data->hari_makam ?></td>
            									</tr>
            									<tr>
            										<td>Tanggal Meninggal</td>
            										<td>:</td>
            										<td><?= $data->tanggal_meninggal ?></td>
            									</tr>
            										<tr>
            										<td>Tanggal Pemakaman</td>
            										<td>:</td>
            										<td><?= $data->tanggal_makam ?></td>
            									</tr>
            									<tr>
            										<td>Jam Meninggal</td>
            										<td>:</td>
            										<td><?= $data->jam_meninggal ?></td>
            									</tr>
            									<tr>
            										<td>Jam Pemakaman</td>
            										<td>:</td>
            										<td><?= $data->jam_makam ?></td>
            									</tr>
            									<tr>
            										<td>Tempat Meninggal</td>
            										<td>:</td>
            										<td><?= $data->tempat_meninggal ?></td>
            									</tr>
            									<tr>
            										<td>Tempat Pemakaman</td>
            										<td>:</td>
            										<td><?= $data->tempat_pemakaman ?></td>
            									</tr>
            									<tr>
            										<td>Sebab Meninggal</td>
            										<td>:</td>
            										<td><?= $data->sebab_meninggal ?></td>
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
