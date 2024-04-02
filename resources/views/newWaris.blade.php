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