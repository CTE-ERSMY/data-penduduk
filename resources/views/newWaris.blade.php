<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggungan Dan Waris</title>
</head>
<link rel="stylesheet" href="{{asset('css/tableNew.css')}}">
<link rel="stylesheet" href="{{asset('css/navi2.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js"></script>

<style>
    .pointer{
  cursor:pointer;
}

#right{
  float:right;
}
</style>
<body>
  <div class="navigation-bar">
    <a href="{{route('index')}}"class="tab laman">Laman Utama<br>(batal)</a>
    <a class="tab done">Pemohon</a>
    <a class="tab done">Pasangan</a>
    <a class="tab done">Pendapatan</a>
    <a class="tab done">Perbelanjaan</a>
    <a class="tab active">Tanggungan dan Waris</a>
    <a class="tab">Harta</a>
    <a class="tab">Bantuan</a>
    <a class="tab">Had Kifayah</a>
    <a class="tab">Lampiran Dokumen</a>
    <a class="tab">Rumusan Siasatan</a>
    <a class="tab">Sejarah Bantuan</a>
</div>
    <div ng-app="prongbang">
        <div ng-controller="calcPriceController" class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 style="color: white">Tanggungan dan Waris</h5>
              <br>
              <form ng-submit="submitData()" method="POST" action="{{ route('newWaris.new')}}">
                @csrf
                @if(isset($pemohonId))
        <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
        @endif
                <table class="table">
                  <thead>
                    <tr>
                      <th style="size:5px;">#</th>
                      <th>Nama</th>
                      <th>No. Kad Pengenalan</th>
                      <th>Umur</th>
                      <th>Hubungan</th>
                      <th>Status</th>
                      <th>Sekolah/Pekerjaan</th>
                      <th>Fizikal</th>
                      <th>Mental</th>
                      <th>Pendapatan/Keperluan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td ng-bind="products.length+1"></td>
                      <td><input ng-model="product.name" type="text" name="nama" class="form-control" size="30" required/></td>
                      <td><input ng-model="product.ic" type="text" name="ic" class="form-control" maxlength="12" size="13" required></td>
                      <td><input ng-model="product.umur" type="number" name="umur" class="form-control" min="0" maxlength="2" style="width:50px" required></td>
                      <td><select name="hubungan" ng-model="product.hubungan" id="hubungan" required>
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
                      <td><select name="status" ng-model="product.status" id="status" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Sekolah">Sekolah</option>   
                        <option value="Bekerja">Bekerja</option>
                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                        </select></td>
                          <td><input ng-model="product.kerja" type="text" name="kerja" class="form-control" required></td>
                        <td><select name="fizikal" ng-model="product.fizikal" id="fizikal" required>
                          <option value="Sihat">Sihat</option>
                          <option value="Sakit">Sakit</option>    
                          <option value="OKU">OKU</option>
                          </select></td>
                        <td><select name="mental" ng-model="product.mental" id="mental" required>
                          <option value="Waras">Waras</option>    
                          <option value="Tidak Waras">Tidak Waras</option>
                          </select></td>
                        <td><input ng-model="product.pendapatan" type="number" name="pendapatan" min="0" class="form-control" style="width: 100px" required></td>
                        <tr>
                        <td><button class="button" type="submit">Add</button></td>
                        <td><a href="{{route('index')}}"><button type="button" class="button" style="background-color: red">Tamat</button></a></td>
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
              </form> 
              <div ng-bind="products | json"></div>
            </div>
          </div>
        </div>
      </div>
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