<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
</head>


<body>
    <div class="container mt-3 page">
        <div class="sub-page">
            <center>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="<?= base_url() ?>./assets/logo/clp.png" width="130px" height="130px">
                        </td>
                        <td>
                            <center>
                                <strong>
                                    <h5>PEMERINTAH KABUPATEN CILACAP</h5>
                                    <h5>KECAMATAN KESUGIHAN</h5>
                                    <h5>DESA KARANGKANDRI</h5>
                                    <small>Jalan Lingkar Timur N0. 1 Karangkandri Telp (0282) 549688</small>
                                </strong>
                            </center>
                        </td>
                         </tr>
                          </table><br>
                       </center>
                         <p class="text-end ">
                        <small>
                           Kode Pos 53274
                        </small>
                    </p>
                   
               
            <hr>

            <div class="identitas">
                <?php foreach ($data as $d) { ?>
              <!--      <p class="text-end fw-bold">
                        <small>
                        //    <?=  $d->tanggal_surat ?>
                        </small>
                    </p> -->
                    <span class="text-center">
                        <strong>
                            <p>
                                <u><?= $d->jenis_surat ?></u>
                            </p>
                        </strong></span>
                          <p>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nomor : </p>
      
             
            </div>
            <div class="text-surat">
                <p>Yang bertanda tangan di bawah ini Kepada Desa Karangkandri kecamatan Kesugihan, Kabupaten Cilacap,
                    menerangkan bahwa :</p>
              <table class="table" style="width:100%">
                   
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->nama_alm ?></td>
                        </tr>
                        <tr>
                            <td>Nik</td>
                            <td>: </td>
                            <td><?= $d->nik ?></td>
                        </tr>
                        
                       <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir ?>, <?= $d->tanggal_lahir ?></td>
                            </tr>
            
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>: </td>
                            <td><?= $d->kewarganegaraan ?></td>
                        </tr>
                         <tr>
                            <td>Agama</td>
                            <td>: </td>
                            <td><?= $d->agama ?></td>
                        </tr>
                        
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: </td>
                            <td><?= $d->kelamin ?></td>
                        </tr>
                        <tr> <td>Pekerjaan </td>
            				<td>:</td>
            				<td><?= $d->pekerjaan ?></td> </tr>
                         <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat ?></td>
                        </tr>
                        
                        
            			<?php } ?>
                         </table>
                        
                       <h6>Menerangkan bahwa orang tersebut telah meninggal dunia pada :</h6>
                        
                     	<table class="table" style="width:100%">
                     	    <?php foreach ($data as $d) { ?>
                     	    	
                     	    		<tr>
            										<td>Hari </td>
            										<td>:</td>
            										<td><?= $d->hari_meninggal ?></td>
            									</tr>
            									<tr>
            										<td>Tanggal </td>
            										<td>:</td>
            										<td><?= $d->tanggal_meninggal ?></td>
            									</tr>
            									<tr>
            										<td>Waktu</td>
            										<td>:</td>
            										<td><?= $d->jam_meninggal ?></td>
            									</tr>
            									<tr>
            										<td>Tempat </td>
            										<td>:</td>
            										<td><?= $d->tempat_meninggal ?></td> </tr>
            										
            							
                	   <?php } ?>
                </table>
                     	    	
                     	    	
                     	    	  <h6>Telah dimakamkan pada :</h6> 
                     	    	
                     	    		<table class="table" style="width:100%">
                     	    <?php foreach ($data as $d) { ?>
                     	    
                     	    	<tr>
            										<td>Hari </td>
            										<td>:</td>
            										<td><?= $d->hari_makam ?></td>
            									</tr>
            						<tr>
            										<td>Tanggal </td>
            										<td>:</td>
            							<td><?= $d->tanggal_makam ?></td>
            									</tr>
            									<tr>
            										<td>Waktu</td>
            										<td>:</td>
            										<td><?= $d->jam_makam ?></td></tr>
            											<tr>	
            										<td>Tempat </td>
            										<td>:</td>
            										<td><?= $d->tempat_pemakaman ?></td> </tr>
            							
                        
                    <?php } ?>
                </table>
                
                <p>Demikian Surat Keterangan ini kami buat dengan sebenarnya dan dapat dipergunakan seperlunya.</p>
                
                <div class="kades float-end">
                    <span class="mb-n2">Karangkandri , <?= date('d M Y') ?></span>
                    <p>KEPALA DESA KARANGKANDRI</p>
                 <!--     <img src="<?= base_url('./assets/ttd/ttd.png') ?>" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;">  -->
                    <class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;">  </br></br></br>
                    <p class="fw-bold" style="margin-top: -5px; z-index:2;">RIDWANULLOH</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
    </div>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>