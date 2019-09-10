@extends('layouts.master')

@section('content')

<div id="content">
    <div class="col-md-12 col-sm-12 col-xs-12" style="padding:20px;">           
        <div class="panel">


        <div class="col-md-10">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h4>Edit Data</h4>
                </div>

                <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12">
                        <form class="cmxform" id="signupForm" method="get" action="">
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="nama" name="nama" required>
                              <span class="bar"></span>
                              <label>Jenis - Pengeluaran atau pemasukan</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="nominal" name="nominal" required>
                              <span class="bar"></span>
                              <label>Nominal</label>
                            </div>

                          </div>

                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="date" class="form-text" id="tgl" name="tgl" required>
                              <span class="bar"></span>
                              <label>Waktu</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="keterangan" name="keterangan" required>
                              <span class="bar"></span>
                              <label>Keterangan</label>
                            </div>

                          </div>                   
                          <div class="col-md-12">
                            <input class="submit btn btn-success" type="submit" value="Submit">
                            <input class="submit btn btn-danger" type="submit" value="cancel">
                        </div>
                      </form>

                    </div>
                </div>

                </div>
            </div>


        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_nama: "required",
        validate_nominal: "required",
        validate_tgl: "required",
        validate_keterangan: "required"
      },
      messages: {
        validate_nama: "Masukkan jenis pemasukan atau pengeluaran",
        validate_nominal: "Masukkan nominal",
        validate_tgl: "Masukkan waktu",
        validate_keterangan: "Masukkan keterangan"
      }
    });

});
</script>

@endsection