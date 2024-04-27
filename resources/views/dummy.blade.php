@include('header')
<head>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/inputform.css')}}">

</head>

<body>
  var $validator = $('.wizard-card form').validate({
    rules: {
      firstname: {
        required: true,
        minlength: 3
      },
      lastname: {
        required: true,
        minlength: 3
      },
      email: {
        required: true,
        minlength: 3,
      }
  },

  errorPlacement: function(error, element) {
      $(element).parent('div').addClass('has-error');
   }
});

  'nama_waris.*' => 'required|string',
  'ic_waris.*' => 'required|numeric|digits:12|unique:waris',
  'umur_waris.*' => 'required|numeric|min:0',
  'hubungan_waris.*' => 'required|string',
  'status_waris.*' => 'required|string',
  'kerja_waris.*' => 'required|string',
  'mental_waris.*' => 'required|in:Waras,Tidak Waras',
  'pendapatan_waris.*' => 'required|numeric|min:0',

          
  $warisData = $request->only(['nama_waris', 'ic_waris', 'umur_waris', 'hubungan_waris', 'status_waris', 'kerja_waris', 'mental_waris', 'pendapatan_waris']);

  $warisRecords = array_map(function ($nama, $ic, $umur, $hubungan, $status, $kerja, $mental, $pendapatan) use ($pemohon) {
      return [
          'nama' => $nama,
          'ic' => $ic,
          'umur' => $umur,
          'hubungan' => $hubungan,
          'status' => $status,
          'kerja' => $kerja,
          'mental' => $mental,
          'pendapatan' => $pendapatan,
          'maklumat_pemohon_id' => $pemohon->id,
      ];
  }, $warisData['nama_waris'], $warisData['ic_waris'], $warisData['umur_waris'], $warisData['hubungan_waris'], $warisData['status_waris'], $warisData['kerja_waris'], $warisData['mental_waris'], $warisData['pendapatan_waris']);

  Waris::insert($warisRecords);


  function generateTable() {
    var numRows = parseInt(document.getElementById("rowNumberInput").value);
    var tableBody = document.getElementById("myTable").getElementsByTagName("tbody")[0];
    tableBody.innerHTML = ""; // Clear existing table rows
    
    for (var i = 0; i < numRows; i++) {
      var newRow = tableBody.insertRow();
      var cell1 = newRow.insertCell(0);
      var cell2 = newRow.insertCell(1);
      var cell3 = newRow.insertCell(2);
      var cell4 = newRow.insertCell(3);
      var cell5 = newRow.insertCell(4);
      var cell6 = newRow.insertCell(5);
      var cell7 = newRow.insertCell(6);
      var cell8 = newRow.insertCell(7);
      var cell9 = newRow.insertCell(8);
      // Add more cells if needed 
      cell1.innerHTML = "<input type='text' value='{{ old('nama_waris')}}' name='nama_waris[]' placeholder='Nama'>";
    cell2.innerHTML = "<input type='text' value='{{ old('ic_waris')}}' name='ic_waris[]' placeholder='No Kad. Pengenalan' > ";
    cell3.innerHTML = "<input type='number' value='{{ old('umur_waris')}}' min='0' name='umur_waris[]' placeholder='Umur'>";
    cell4.innerHTML = "<select name='hubungan_waris[]'>" +
                    "<option selected disabled>Hubungan</option>" +
                    "<option value='Anak' {{ old('hubungan_waris') == 'Anak' ? 'selected' : '' }}>Anak</option>" +
                    "<option value='Anak Tiri' {{ old('hubungan_waris') == 'Anak Tiri' ? 'selected' : '' }}>Anak Tiri</option>" +
                    "<option value='Anak Angkat' {{ old('hubungan_waris') == 'Anak Angkat' ? 'selected' : '' }}>Anak Angkat</option>" +
                    "<option value='Anak Saudara' {{ old('hubungan_waris') == 'Anak Saudara' ? 'selected' : '' }}>Anak Saudara</option>" +
                    "<option value='Isteri 1' {{ old('hubungan_waris') == 'Isteri 1' ? 'selected' : '' }}>Isteri 1</option>" +
                    "<option value='Isteri 2' {{ old('hubungan_waris') == 'Isteri 2' ? 'selected' : '' }}>Isteri 2</option>" +
                    "<option value='Isteri 3' {{ old('hubungan_waris') == 'Isteri 3' ? 'selected' : '' }}>Isteri 3</option>" +
                    "<option value='Isteri 4' {{ old('hubungan_waris') == 'Isteri 4' ? 'selected' : '' }}>Isteri 4</option>" +
                  "</select>";
    cell5.innerHTML = "<select name='status_waris[]' >"+
                        "<option selected disabled>Status</option>"+
                        "<option value='Sekolah' {{ old('status_waris') == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>"+   
                        "<option value='Bekerja' {{ old('status_waris') == 'Bekerja' ? 'selected' : '' }}>Bekerja</option>"+
                        "<option value='Tidak Bekerja' {{ old('status_waris') == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>"+
                        "</select>";
    cell6.innerHTML = "<input type='text' value='{{ old('kerja_waris')}}' name='kerja_waris[]' placeholder='Pekerjaan/Sekolah'>";
    cell7.innerHTML = "<select name='fizikal_waris[]'>"+
                          "<option selected disabled>Fizikal</option>"+
                          "<option value='Sihat' {{ old('fizikal_waris') == 'Sihat' ? 'selected' : '' }}>Sihat</option>"+
                          "<option value='Sakit' {{ old('fizikal_waris') == 'Sakit' ? 'selected' : '' }}>Sakit</option>"+    
                          "<option value='OKU' {{ old('fizikal_waris') == 'OKU' ? 'selected' : '' }}>OKU</option>"+ 
                          "</select>";
    cell8.innerHTML = "<select name='mental_waris[]'>"+
                          "<option selected disabled>Mental</option>"+
                          "<option value='Waras' {{ old('mental_waris') == 'Waras' ? 'selected' : '' }}>Waras</option>"+    
                          "<option value='Tidak Waras' {{ old('mental_waris') == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>"+
                        "</select>";
    cell9.innerHTML = "<input type='number' min='0' value='{{ old('pendapatan_waris')}}' name='pendapatan_waris[]' placeholder='Pendapatan'>";
    // Add more cells if needed
  }
}
<script>
  $('thead').on('click', '.addRow', function(){
    var tr = "<tr>"+
              "<td>"+
                "<select name='butiran_tanggungan[]' class='form-control'>"+
                "<option disabled>Pilih Butiran</option>"+
                "<option value='Ketua Keluarga-Luar Bandar'>Ketua Keluarga-Luar Bandar</option>"+
                "<option value='Ketua Keluarga-Dalam Bandar'>Ketua Keluarga-Dalam Bandar</option>"+
                "<option value='Pasangan'>Pasangan</option>"+
                "<option value='Anak Sekolah Menengah 13 - 17 Tahun'>Anak Sekolah Menengah 13 - 17 Tahun</option>"+
                "<option value='Anak sekolah Rendah 7 - 12 Tahun'>Anak sekolah Rendah 7 - 12 Tahun</option>"+
                "<option value='Anak 6 Tahun ke Bawah'>Anak 6 Tahun ke Bawah</option>"+
                "<option value='Anak Menuntut di IPTA/S'>Anak Menuntut di IPTA/S</option>"+
                "<option value='Anak Tidak Bersekolah (Bawah 17 Tahun)'>Anak Tidak Bersekolah (Bawah 17 Tahun)</option>"+
                "<option value='Dewasa (18 tahun ke atas/tidak bekerja)'>Dewasa (18 tahun ke atas/tidak bekerja)</option>"+
              "</select>"+
              "</td>"+
              "<td><input type='number' name='jumlah_tanggungan[]' min='0' class='form-control'></td>"+
              "<th><a href='javascript:void(0)' class='btn btn-danger deleteRow'>-</a></th>"+
          "<tr>"+
            $('tbody').append(tr);
  });
</script>
  <div class="image-container set-full-height" style="background-image: url('https://www.alist.ae/assets/images/background-1.jpg')">

    <!--   Big container   -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <!-- Wizard container -->
          <div class="wizard-container">
            <div class="card wizard-card" data-color="red" id="wizard">
              <form action="" method="">

                <div class="wizard-header">
                  <h3 class="wizard-title">
                    Vendor Sign up
                  </h3>
                  <h5>This information will let us know more about you.</h5>
                </div>
                <div class="wizard-navigation">
                  <ul>
                    <li><a href="#details" data-toggle="tab">Venue</a></li>
                    <li><a href="#offer" data-toggle="tab">Offer</a></li>
                    <li><a href="#captain" data-toggle="tab">Redemption</a></li>
                    <li><a href="#description" data-toggle="tab">Personal</a></li>
                  </ul>
                </div>

                <div class="tab-content">
                  <div class="tab-pane" id="details">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text"> Let's start with the basic details.</h4>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">storefront</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Venue Name</label>

                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This will be the name display in Offer.">
                              <input name="name" type="text" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-instagram fa-2x"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Venue Instagram URL</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Influencers will tag stories in this instagram.">
                              <input name="name2" type="text" class="form-control"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="offer">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text"> Let's work with offer details.</h4>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">link</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Venue's menu URL</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Influencers will order / see menu from this link. ( Webisite, Zomato, Chatfood, etc.)">
                              <input name="name" type="text" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">link</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Venue's Review URL</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Influencers will rate and submit reviews in this link in addition to instagram stories. ( Google, Zomato, Chatfood, etc.)">
                              <input name="name2" type="text" class="form-control"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="captain">
                    <h4 class="info-text">How do you want the offer redeemed? </h4>
                    <div class="row">
                      <div class="col-md-12 radiogroup">

                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you want people Call you to redeem the offer code.">
                          <input type="radio" name="job" value="Design">
                          <div class="icon">
                            <i class="material-icons">call</i>
                          </div>
                          <h6>Call</h6>
                        </div>

                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you want people whatsapp you to redeem the offer code.">
                          <input type="radio" name="job" value="Code">
                          <div class="icon">
                            <i class="fa fa-whatsapp"></i>
                          </div>
                          <h6>Whatsapp</h6>
                        </div>

                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you want provide coupon upon checkout.">
                          <input type="radio" name="job" value="Code">
                          <div class="icon">
                            <i class="fa fa-ticket"></i>
                          </div>
                          <h6>Coupon</h6>
                        </div>

                      </div>

                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-whatsapp fa-2x"></i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Call / Whatsapp Number</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This Number will be used by influencers to redeem the offers (applicable only if you selected Call / Whatsapp option)">
                              <input name="name" type="text" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">group</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Number of influencers per day</label>

                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="How many influencers per day you want to review your venue.">
                              <input name="name" type="number" class="form-control" placeholder="Number of influencers per day"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">map</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Location restrictions (if any)</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="If you are limited to specific locations for food delivery mention that locations.">
                              <textarea name="name2" type="text" class="form-control"></textarea></div>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>

                  <div class="tab-pane" id="description">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text"> Let's us contact you.</h4>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">person</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Contact person Full Name</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Name will be for our internal communication only. This wont be disclosed anywhere">
                              <input name="name" type="text" class="form-control"></div>
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">email</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Email address</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="We will send offer codes, Audit reports ect to this email address. (This will not be published anywhere)">
                              <input name="name2" type="email" class="form-control"></div>
                          </div>
                        </div>
<div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">smartphone</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Contact Number</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This Number will be used for our internal communication only. This wont be disclosed anywhere">
                              <input name="name" type="text" class="form-control"></div>
                          </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">comment</i>
                          </span>
                          <div class="form-group label-floating">
                            <label class="control-label">Special instructions (if any)</label>
                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="If you are specific requirments, let us know.">
                              <textarea name="name2" type="text" class="form-control"></textarea></div>
                          </div>
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

@include('header3')
              <h5>Tanggungan dan Waris</h5>
              <br>
              <form ng-submit="submitData()" method="POST" action="{{ route('newWaris.new')}}">
                @csrf
                @if(isset($pemohonId))
        <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
        @endif  
                <table class="table table-border">
                  <tr>
                      <th>Nama</th>
                      <td><input ng-model="product.name" type="text" name="nama" class="form-control" required/></td>
                    </tr><tr>
                      <th>No. Kad Pengenalan</th>
                      <td><input ng-model="product.ic" type="text" name="ic" class="form-control" maxlength="12" required></td>
                    </tr><tr>
                      <th>Umur</th>
                      <td><input ng-model="product.umur" type="number" name="umur" class="form-control" min="0" required></td>
                    </tr><tr>
                      <th>Hubungan</th>
                      <td><select name="hubungan" ng-model="product.hubungan" class="form-control" id="hubungan" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Anak">Anak</option>
                        <option value="Anak Tiri">Anak Tiri</option>    
                        <option value="Anak Angkat">Anak Angkat</option>
                        <option value="Anak Saudara">Anak Saudara</option>
                        <option value="Isteri 1">Isteri 1</option>
                        <option value="Isteri 2">Isteri 2</option>
                        <option value="Isteri 3">Isteri 3</option>
                        <option value="Isteri 4">Isteri 4</option>
                        </select></td>
                      </tr><tr>
                      <th>Status</th>
                      <td><select name="status" class="form-control" ng-model="product.status" id="status" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Sekolah">Sekolah</option>   
                        <option value="Bekerja">Bekerja</option>
                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                        </select></td>
                      </tr><tr>
                      <th>Sekolah/Pekerjaan</th>
                      <td><input ng-model="product.kerja" class="form-control" type="text" name="kerja" class="form-control" required></td>
                    </tr><tr>
                      <th>Fizikal</th>
                        <td><select name="fizikal" class="form-control" ng-model="product.fizikal" id="fizikal" required>
                          <option value="Sihat">Sihat</option>
                          <option value="Sakit">Sakit</option>    
                          <option value="OKU">OKU</option>
                          </select></td>
                        </tr><tr>
                      <th>Mental</th>
                      <td><select name="mental" class="form-control" ng-model="product.mental" id="mental" required>
                        <option value="Waras">Waras</option>    
                        <option value="Tidak Waras">Tidak Waras</option>
                        </select></td>
                      </tr><tr>
                      <th>Pendapatan/Keperluan</th>
                      <td><input ng-model="product.pendapatan" type="number" name="pendapatan" min="0" class="form-control" required></td>
                    </tr>
                    <form id="redirectForm" action="{{ route('newHarta.view') }}" method="GET">
                      @csrf
                      <input type="hidden" name="pemohonId" value="{{ $pemohonId }}">
                  </form>
                  
                    <tr>
                      <td><button class="button" type="submit">Add</button></td>
                    </form> 
                      <form id="redirectForm" action="{{ route('newHarta.view') }}" method="GET">
                        @csrf
                        <input type="hidden" name="pemohonId" value="{{ $pemohonId }}">
                    </form>
                      <td><button id="redirectToHarta">Selesai</button></td>
                    </tr>
                  
                    </tr>
                    <tr ng-repeat="p in products">
                      <td ng-bind="$index+1"></td>
                      <td ng-bind="p.name"></td>
                      <td ng-bind="p.ic"></td>
                      <td ng-bind="p.umur"></td>
                      <td ng-bind="p.hubungan"></td>
                      <td ng-bind="p.status"></td>
                      <td ng-bind="p.kerja"></td>
                      <td ng-bind="p.fizikal"></td>
                      <td ng-bind="p.mental"></td>
                      <td ng-bind="p.pendapatan"></td>
                      <td ng-bind="p.price"></td>
                      <td>
                        <span ng-click="removeItem($index)" class="pointer glyphicon glyphicon-remove" aria-hidden="true"></span>
                      </td>
                    </tr> 
                  </tbody>
                </table>
              
              <div ng-bind="products | json"></div>
            </main>
            <script>
              document.getElementById('redirectToHarta').addEventListener('click', function() {
                  document.getElementById('redirectForm').submit();
              });
          </script>
<script>
    var app = angular.module('prongbang',[]);
app.controller('calcPriceController',function($scope){
  
  $scope.products = [];
  $scope.total = 0; 
  
  $scope.sumPrice = function(products) {
    var total = 0;
    angular.forEach(products,function(value,index){
      total += parseFloat(value.price);
    }); 
    return total.toFixed(2);
  };
  
  $scope.removeItem = function(index){
    /*$scope.products.slice(index,1);*/
    $scope.products[index] = undefined;
    $scope.products = $scope.select2product($scope.products); 
    $scope.total = $scope.sumPrice($scope.products);
  };
  
  $scope.select2product = function(products){
    var product = [];
    $scope.products = []; // clear data
    angular.forEach(products,function(value,index){
      if(value != undefined) product.push(value); 
    });
    return product;
  };
  
  $scope.add = function(product){
    $scope.products.push(product);
    $scope.total = $scope.sumPrice($scope.products);
    $scope.clearInput();
  };
  
  $scope.clearInput = function(){
    $scope.product = null;
  };
  $scope.submitData = function() {
    // Create an object to hold the form data
    var formData = {
        nama: $scope.product.name,
        ic: $scope.product.ic,
        umur: $scope.product.umur,
        hubungan: $scope.product.hubungan,
        status: $scope.product.status,
        pekerjaan: $scope.product.pekerjaan,
        fizikal: $scope.product.fizikal,
        mental: $scope.product.mental,
        pendapatan: $scope.product.pendapatan
    };
    $http.post('newWaris.new', formData)
        .then(function(response) {
            // Handle the response from the server (if needed)
            console.log(response.data);
            // Clear the form fields after successful submission
            $scope.clearInput();
        })
        .catch(function(error) {
            // Handle errors (if any)
            console.error('Error:', error);
        });
    };

});
</script>
</body>
</html>