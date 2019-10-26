
@extends('front.templates.default')

@section('content')

<div class="container mt-5">



<div class="card mt-5">
        <div class="card-header">
                <h4 class="text-center">Pelaporan Dan Pengaduan</h4>
          
        </div>
        <div class="card-body">
          <h6 class="card-title">Sampaikan Keluhan , Masukan dan Saran Anda Kami Menjamin Kerahasiaanya</h6>
          <p class="card-text"></p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
      

        <div class="row justify-content-center mt-4">
                        <div class="col-xs-11 col-md-5 col-lg-4">

                                        <div class="card" style="width: 18rem;">
                                                        <div class="card-header">
                                                                        Contact
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                          <li class="list-group-item">Pemerintah Kecamatan Dungingi</li>
                                                          <li class="list-group-item">Jalan Apel II Kel. Huangobotu</li>
                                                          <li class="list-group-item">dungingioffice@gmail.com</li>
                                                          <li class="list-group-item">(0435)8526697</li>
                                                        </ul>
                                                      </div>



                        
                        </div>
                        <div class="col-xs-11 col-md-5 col-lg-6">

                                       
                                                      <form>
                                                                <div class="form-group">
                                                                  <label for="formGroupExampleInput">Nama </label>
                                                                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="formGroupExampleInput2">Alamat</label>
                                                                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                </div>
                                                                <div class="form-group">
                                                                                <label for="formGroupExampleInput2">No Kontak</label>
                                                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                                                              </div>
                                                                             

                                                                                      <div class="form-group">
                                                                                                <label for="exampleFormControlTextarea1">Pesan</label>
                                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                                              </div>

                                                                                      <div class="card-action center">
                                                                                                

                                                                                                              <button type="button" class="btn btn-primary btn-md">Kirim</button>
                                                                                                
                                                                                            </div>
                                                              </form>


                          
                        </div>
                      </div>

        

     
            
                
                 
               
                <div class="card-footer text-muted mt-4">
                                Sistem Informasi Pelaporan Dan Pelayanan Terpadu Kecamatan
                              </div>
        </div>
</div>



        


@endsection

