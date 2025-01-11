@extends('header')

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>

@section('content')
  <div class="image-container set-full-height" style="background-image: url('https://www.alist.ae/assets/images/background-1.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <!-- Wizard container -->
          <div class="wizard-container">
            <div class="card wizard-card" data-color="red" id="wizard">
              <form action="{{ route('pemohon.submit') }}" method="POST">
                @csrf
                <div class="wizard-header">
                  <h3 class="wizard-title">
                    Daftar Pemohon Baru
                  </h3>
                  <h5></h5>
                </div>
                <div class="wizard-navigation">
                  <ul>
                    <li><a href="#pemohon" data-toggle="tab">Pemohon</a></li>
                    <li><a href="#pasangan" data-toggle="tab">Pasangan</a></li>
                    <li><a href="#kewangan" data-toggle="tab">Kewangan</a></li>
                    <li><a href="#harta" data-toggle="tab">Harta</a></li>
                  </ul>
                </div>

                <div class="tab-content">
                  <div class="tab-pane" id="pemohon">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text">Maklumat Peribadi Pemohon</h4>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-">&nbsp;</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Nama Pemohon *</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="nama" value="{{ old('nama')}}" class="form-control" required></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">No Kad. Pengenalan *</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="ic" value="{{ old('ic')}}" maxlength="12" class="form-control" required></div>
                          </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip">
                                <select name="jantina" id="jantina" class="select form-control">
                                <option selected disabled>Sila Pilih Jantina *</option>
                                <option value="Lelaki" {{ old('jantina') == 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
                                <option value="Wanita" {{ old('jantina') == 'Wanita' ? 'selected' : '' }}>Wanita</option>    
                                </select></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Tarikh Lahir Pemohon">
                                <input type="date" value="{{ old('tarikh_lahir')}}" name="tarikh_lahir" id="tarikh_lahir" class="date form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label"></label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <select name="status" id="status" class="select form-control">
                                  <option disabled selected>Status Perkahwinan *</option>
                                  <option value="Kahwin" {{ old('status') == 'Kahwin' ? 'selected' : '' }}>Kahwin</option>
                                  <option value="Bujang" {{ old('status') == 'Bujang' ? 'selected' : '' }}>Bujang</option>    
                                  <option value="Duda(Kematian Isteri)" {{ old('status') == 'Duda(Kematian Isteri)' ? 'selected' : '' }}>Duda (Kematian Isteri)</option>
                                  <option value="Duda(Bercerai)" {{ old('status') == 'Duda(Bercerai)' ? 'selected' : '' }}>Duda (Bercerai)</option>
                                  <option value="Janda(Kematian Suami)" {{ old('status') == 'Janda(Kematian Suami)' ? 'selected' : '' }}>Janda (Kematian Suami)</option>
                                  <option value="Janda(Bercerai)" {{ old('status') == 'Janda(Bercerai)' ? 'selected' : '' }}>Janda (Bercerai)</option>
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
                                <select name="mental" id="mental" class="select form-control">
                                  <option selected disabled>Keadaan Mental *</option>
                                  <option value="Waras" {{ old('mental') == 'Waras' ? 'selected' : '' }}>Waras</option>
                                  <option value="Tidak Waras" {{ old('Tidak Waras') == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
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
                                <select name="islam" id="islam" class="select form-control">
                                  <option selected disabled>Penghayatan Islam *</option>
                                  <option value="Baik" {{ old('Islam') == 'Baik' ? 'selected' : '' }}>Baik</option>
                                  <option value="Kurang Baik" {{ old('Islam') == 'Kurang Baik' ? 'selected' : '' }}>Kurang Baik</option>
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
                                <select name="fizikal" id="fizikal" class="select form-control">
                                  <option selected disabled>Keadaan Fizikal *</option>
                                      <option value="Sihat" {{ old('fizikal') == 'Sihat' ? 'selected' : '' }}>Sihat</option>
                                      <option value="Sakit" {{ old('fizikal') == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                      <option value="OKU" {{ old('fizikal') == 'OKU' ? 'selected' : '' }}>OKU</option>
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
                                <input type="text" value="{{ old('alamat') }}" name="alamat" class="form-control">
                                <select name="poskod" id="poskod" class="select form-control">
                                  <option selected value="81900" >81900</option>
                              </select>
                              <select name="bandar" id="bandar" class="select form-control">
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
                                <input type="text" name="nombor_rumah" value="{{ old('nombor_rumah')}}" id="nombor_rumah" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Nombor Bimbit *</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="text" value="{{ old('nombor_bimbit')}}" name="nombor_bimbit" id="nombor_bimbit" class="form-control"></div>
                            </div>
                          </div>
                      </div></div></div>

                  <div class="tab-pane" id="pasangan">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text">Maklumat Pasangan Pemohon</h4>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-">&nbsp;</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Nama Pasangan *</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" value="{{ old('nama_pasangan')}}" name="nama_pasangan" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">No Kad. Pengenalan *</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" name="ic_pasangan" value="{{ old('ic_pasangan')}}" maxlength="12" class="form-control"></div>
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
                                <option value="Lelaki" {{ old('jantina_pasangan') == 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
                                <option value="Wanita" {{ old('jantina_pasangan') == 'Wanita' ? 'selected' : '' }}>Wanita</option>    
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
                                <input type="date" name="tarikh_lahir_pasangan" value="{{ old('tarikh_lahir_pasangan')}}" id="tarikh_lahir" class="date form-control"></div>
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
                                  <option value="Kahwin" {{ old('status_pasangan') == 'Kahwin' ? 'selected' : '' }}>Kahwin</option>
                                  <option value="Bujang" {{ old('status_pasangan') == 'Bujang' ? 'selected' : '' }}>Bujang</option>    
                                  <option value="Duda(Kematian Isteri)" {{ old('status_pasangan') == 'Duda(Kematian Isteri)' ? 'selected' : '' }}>Duda (Kematian Isteri)</option>
                                  <option value="Duda(Bercerai)" {{ old('status_pasangan') == 'Duda(Bercerai)' ? 'selected' : '' }}>Duda (Bercerai)</option>
                                  <option value="Janda(Kematian Suami)" {{ old('status_pasangan') == 'Janda(Kematian Suami)' ? 'selected' : '' }}>Janda (Kematian Suami)</option>
                                  <option value="Janda(Bercerai)" {{ old('status_pasangan') == 'Janda(Bercerai)' ? 'selected' : '' }}>Janda (Bercerai)</option>
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
                                  <option value="Waras" {{ old('mental_pasangan') == 'Waras' ? 'selected' : '' }}>Waras</option>
                                  <option value="Tidak Waras" {{ old('mental_pasangan') == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
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
                                  <option value="Baik" {{ old('islam_pasangan') == 'Baik' ? 'selected' : '' }}>Baik</option>
                                  <option value="Kurang Baik" {{ old('islam_pasangan') == 'Kurang Baik' ? 'selected' : '' }}>Kurang Baik</option>
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
                                      <option value="Sihat" {{ old('fizikal_pasangan') == 'Sihat' ? 'selected' : '' }}>Sihat</option>
                                      <option value="Sakit" {{ old('fizikal_pasangan') == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                      <option value="OKU" {{ old('fizikal_pasangan') == 'OKU' ? 'selected' : '' }}>OKU</option>
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
                                <input type="text" value="{{ old('alamat_pasangan' )}}" name="alamat_pasangan" class="form-control">
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
                                <input type="text" value="{{ old('nombor_rumah_pasangan')}}" name="nombor_rumah_pasangan" id="nombor_rumah_pasangan" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Nombor Bimbit *</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="text" name="nombor_bimbit_pasangan" value="{{ old('nombor_bimbit_pasangan') }}" id="nombor_bimbit_pasangan" class="form-control"></div>
                            </div>
                          </div>
                      </div></div></div>

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
                              <input name="jawatan" value="{{ old('jawatan')}}" type="text" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Gaji</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="gaji" type="number" value="{{ old('gaji')}}" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Majikan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="majikan" value="{{ old('majikan')}}" type="text" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Jawatan Pasangan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="jawatan_psgn" value="{{ old('jawatan_pasangan')}}" type="text" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Gaji Pasangan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="gaji_psgn" value="{{ old('gaji_pasangan')}}" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Majikan Pasangan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="majikan_psgn" value="{{ old('majikan_pasangan')}}" type="text" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Sumbangan Anak</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="sumbangan_anak" value="{{ old('sumbangan_anak')}}" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Sumbangan Saudara Mara</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="sumbangan_saudara" value="{{ old('sumbangan_saudara')}}" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Pendapatan Sampingan</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="sampingan" value="{{ old('sampingan')}}" type="number" min="0" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Sumbangan Agensi</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input name="sumbangan_agensi" value="{{ old('sumbangan_agensi')}}" type="number" min="0" class="form-control"></div>
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
                                <input name="makan" value="{{ old('makan')}}" type="number" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Perubatan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="perubatan" value="{{ old('perubatan')}}" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Bil SAJ/TNB</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="bil" value="{{ old('bil')}}" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Pengangkutan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="pengangkutan" value="{{ old('pengangkutan')}}" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Sewa Rumah</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="sewa_rumah" value="{{ old('sewa_rumah')}}" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Persekolahan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="persekolahan" value="{{ old('persekolahan')}}" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="material-icons"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Lain - lain</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input name="lain" value="{{ old('lain')}}" type="number" min="0" class="form-control"></div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>

                

                  <div class="tab-pane" id="harta">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text">Maklumat Kediaman Pemohon&nbsp;</h4>
                      </div>

                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-">&nbsp;</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Status Kediaman</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text"value="{{ old('status_kediaman')}}" name="status_kediaman" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Jenis Kediaman</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                              <input type="text" value="{{ old('jenis_kediaman')}}" name="jenis_kediaman" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Kemudahan Asas</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip">
                                <input type="text" value="{{ old('kemudahan')}}" name="kemudahan" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Kuantiti Bilik</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="number" value="{{ old('bilik')}}" name="bilik" class="date form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Kemudahan Tambahan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="text" value="{{ old('kemudahan_tambahan')}}" name="kemudahan_tambahan" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Anggaran Nilai Semasa Kediaman</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="number" value="{{ old('nilai_kediaman')}}" name="nilai_kediaman" class="form-control"></div>
                            </div>
                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-"></i>
                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Bayaran Bulanan</label>
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                <input type="number" value="{{ old('bulanan')}}" name="bulanan" class="form-control"></div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <h4 class="info-text">Maklumat Harta Pemohon</h4>
                          </div>
                          <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Rumah (unit)</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('rumah')}}" name="rumah" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Nilai Rumah</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('nilai_rumah')}}" name="nilai_rumah" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Tanah (ekar)</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('tanah')}}" name="tanah" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Nilai Tanah</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('nilai_tanah')}}" name="nilai_tanah" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Kenderaan (unit)</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('kenderaan')}}" name="kenderaan" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Nilai Kenderaan</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('nilai_kenderaan')}}" name="nilai_kenderaan" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Astro</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="text" name="astro" value="{{ old('astro')}}" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Nilai Bayaran Astro</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('nilai_astro')}}" min="0" name="nilai_astro" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Nilai Barang Kemas</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" min="0" value="{{ old('barang_kemas')}}" name="barang_kemas" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Nilai Wang Simpanan</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('simpanan')}}" min="0" name="simpanan" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Lain - Lain</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="text" value="{{ old('lain_lain')}}" name="lain_lain" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="fa fa-"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Nilai Lain - lain</label>
                                  <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
                                    <input type="number" value="{{ old('nilai_lain')}}" min="0" name="nilai_lain" class="form-control"></div>
                                </div>
                              </div>
                              <div class="input-group">
                                <button type="submit" class="btn btn-submit">Submit</button>
                              </div>
                          </div>                              
                      </div>
                    </div>
                  </div>
            
                <div class="wizard-footer">
                  <div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='submit' value='Submit' />
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
  
    @endsection



