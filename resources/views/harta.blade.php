<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pemohon Baru</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/inputform.css')}}">

</head>
<body>
  <div class="image-container set-full-height" style="background-image: url('https://www.alist.ae/assets/images/background-1.jpg')">

    <!--   Big container   -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <!-- Wizard container -->
          <div class="wizard-container">
            <div class="card wizard-card" data-color="red" id="wizard">
              <form action="" method="POST">

                <div class="wizard-header">
                  <h3 class="wizard-title">
                    Daftar Pemohon Baru
                  </h3>
                  <h5></h5>
                </div>
                <div class="wizard-navigation">
                  <ul>
                    <li><a href="#harta" data-toggle="tab">Harta</a></li>
                    <li><a href="#bantuan" data-toggle="tab">Bantuan</a></li>
                    <li><a href="#kifayah" data-toggle="tab">Had Kifayah</a></li>
                    <li><a href="#sejarah" data-toggle="tab">Sejarah Bantuan</a></li>
                  </ul>
                </div>

                <div class="tab-content">
                  <div class="tab-pane" id="harta">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text">Maklumat Kediaman</h4>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-">&nbsp;</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Status Kediaman</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="status_kediaman" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Jenis Kediaman</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="jenis_kediaman" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Kemudahan Asas</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip">
                                <input type="text" name="kemudahan" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Kuantiti Bilik</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Tarikh Lahir Pemohon">
                                <input type="number" name="bilik" class="date form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Kemudahan Tambahan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="text" name="tambahan" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="number" name="nilai_kediaman" class="form-control" ></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="number" name="bulanan" class="form-control"></div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <h4 class="info-text">Maklumat Harta</h4>
                          </div>
                          <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Rumah (unit)</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" name="rumah" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Tanah (ekar)</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" name="tanah" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Kenderaan (unit)</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" name="kenderaan" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Astro</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="text" name="astro" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Barang Kemas</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="text" name="barang_kemas" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Wang Simpanan</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="text" name="simpanan" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Lain - Lain</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="text" name="lain_harta" class="form-control"></div>
                                </div>
                              </div>
                          </div>                              
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="kifayah">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text">Had Kifayah</h4>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-">&nbsp;</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Nama Pasangan *</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="nama_pasangan" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">No Kad. Pengenalan *</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="ic_pasangan" maxlength="12" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip">
                                <select name="jantina_pasangan" id="jantina" class="select form-control">
                                <option selected disabled>Sila Pilih Jantina *</option>
                                <option value="Lelaki">Lelaki</option>
                                <option value="Wanita">Wanita</option>    
                                </select></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Tarikh Lahir Pasangan">
                                <input type="date" name="tarikh_lahir_pasangan" id="tarikh_lahir" class="date form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <select name="status_pasangan" id="status" class="select form-control">
                                  <option disabled selected>Status Perkahwinan *</option>
                                  <option value="Kahwin">Kahwin</option>
                                  <option value="Bujang">Bujang</option>    
                                  <option value="Duda(Kematian Isteri)">Duda (Kematian Isteri)</option>
                                  <option value="Duda(Bercerai)">Duda (Bercerai)</option>
                                  <option value="Janda(Kematian Suami)">Janda (Kematian Suami)</option>
                                  <option value="Janda(Bercerai)">Janda (Bercerai)</option>
                          </select></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <select name="mental_pasangan" id="mental" class="select form-control">
                                  <option selected disabled>Keadaan Mental *</option>
                                  <option value="Waras">Waras</option>
                                  <option value="Tidak Waras">Tidak Waras</option>
                              </select></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <select name="islam_pasangan" id="islam" class="select form-control">
                                  <option selected disabled>Penghayatan Islam *</option>
                                  <option value="Baik">Baik</option>
                                  <option value="Kurang Baik">Kurang Baik</option>
                              </select></div>
                            </div>
                          </div>

                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <select name="fizikal_pasangan" id="fizikal" class="select form-control">
                                  <option selected disabled>Keadaan Fizikal *</option>
                                      <option value="Sihat">Sihat</option>
                                      <option value="Sakit">Sakit</option>
                                      <option value="OKU">OKU</option>
                                  </select></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Alamat *</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Alamat Penuh">
                                <input type="text" name="alamat_pasangan" class="form-control">
                                <select name="poskod_pasangan" id="poskod" class="select form-control">
                                  <option selected value="81900" >81900</option>
                              </select>
                              <select name="bandar_pasangan" id="bandar" class="select form-control">
                                  <option selected value="Kota Tinggi">Kota Tinggi</option>
                              </select></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Nombor Rumah(Jika Ada)</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="text" name="nombor_rumah_pasangan" id="nombor_rumah_pasangan" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Nombor Bimbit *</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="text" name="nombor_bimbit_pasangan" id="nombor_bimbit_pasangan" class="form-control"></div>
                            </div>
                          </div>

                      </div>
                    </div>

                  </div>

                  <div class="tab-pane" id="kewangan">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text">Maklumat Kewangan Pemohon</h4>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Jawatan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="jawatan" type="text" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Gaji</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="gaji" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Majikan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="majikan" type="text" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Jawatan Pasangan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="jawatan_pasangan" type="text" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Gaji Pasangan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="gaji_pasangan" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Majikan Pasangan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="majikan_pasangan" type="text" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Sumbangan Anak</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="gaji_pasangan" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Sumbangan Saudara Mara</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="gaji_pasangan" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Pendapatan Sampingan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="gaji_pasangan" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Sumbangan Agensi</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="gaji_pasangan" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <h4 class="info-text">Maklumat Perbelanjaan Pemohon</h4>
                        </div>
                        <div class="col-sm-12">
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Makan / Minum</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="makan" type="number" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Perubatan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="perubatan" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Bil SAJ/TNB</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="bil" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Pengangkutan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="pengangkutan" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Sewa Rumah</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="sewa_rumah" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Persekolahan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="persekolahan" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Lain - lain</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="lain" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="waris">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="info-text">Maklumat Tanggungan dan Waris</h4>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-">&nbsp;</i>
                        </span>
                        <div class="form-group label-floating">
                          <label class="control-label">Nama Pasangan *</label>
                          <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                            <input type="text" name="nama_pasangan" class="form-control"></div>
                        </div>
                      </div>

                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-"></i>
                        </span>
                        <div class="form-group label-floating">
                          <label class="control-label">No Kad. Pengenalan *</label>
                          <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                            <input type="text" name="ic_pasangan" maxlength="12" class="form-control"></div>
                        </div>
                      </div>

                      <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip">
                              <select name="jantina_pasangan" id="jantina" class="select form-control">
                              <option selected disabled>Sila Pilih Jantina *</option>
                              <option value="Lelaki">Lelaki</option>
                              <option value="Wanita">Wanita</option>    
                              </select></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Tarikh Lahir Pasangan">
                              <input type="date" name="tarikh_lahir_pasangan" id="tarikh_lahir" class="date form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <select name="status_pasangan" id="status" class="select form-control">
                                <option disabled selected>Status Perkahwinan *</option>
                                <option value="Kahwin">Kahwin</option>
                                <option value="Bujang">Bujang</option>    
                                <option value="Duda(Kematian Isteri)">Duda (Kematian Isteri)</option>
                                <option value="Duda(Bercerai)">Duda (Bercerai)</option>
                                <option value="Janda(Kematian Suami)">Janda (Kematian Suami)</option>
                                <option value="Janda(Bercerai)">Janda (Bercerai)</option>
                        </select></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <select name="mental_pasangan" id="mental" class="select form-control">
                                <option selected disabled>Keadaan Mental *</option>
                                <option value="Waras">Waras</option>
                                <option value="Tidak Waras">Tidak Waras</option>
                            </select></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <select name="islam_pasangan" id="islam" class="select form-control">
                                <option selected disabled>Penghayatan Islam *</option>
                                <option value="Baik">Baik</option>
                                <option value="Kurang Baik">Kurang Baik</option>
                            </select></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <select name="fizikal_pasangan" id="fizikal" class="select form-control">
                                <option selected disabled>Keadaan Fizikal *</option>
                                    <option value="Sihat">Sihat</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="OKU">OKU</option>
                                </select></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Alamat *</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Alamat Penuh">
                              <input type="text" name="alamat_pasangan" class="form-control">
                              <select name="poskod_pasangan" id="poskod" class="select form-control">
                                <option selected value="81900" >81900</option>
                            </select>
                            <select name="bandar_pasangan" id="bandar" class="select form-control">
                                <option selected value="Kota Tinggi">Kota Tinggi</option>
                            </select></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Nombor Rumah(Jika Ada)</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="nombor_rumah_pasangan" id="nombor_rumah_pasangan" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Nombor Bimbit *</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="nombor_bimbit_pasangan" id="nombor_bimbit_pasangan" class="form-control"></div>
                          </div>
                        </div>

                    </div>
                  </div>

                </div>
                <div class="wizard-footer">
                  <div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                  </div>
                  <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div> <!-- wizard container -->
        </div>
      </div> <!-- row -->
    </div> <!--  big container -->
  </div>
</body>
<script src="{{asset('js/inputform.js')}}"></script>
</html>