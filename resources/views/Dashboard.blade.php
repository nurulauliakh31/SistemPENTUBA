@extends("PTB")

@section("Judul")
UASWEB3
@endsection

@section("Logo")
PENTUBA
@endsection

@section("Navigasibar")
@parent
@endsection

@section("Sidebar")
@parent
@endsection

@section("Konten")
<div class="x_title">
    <h2><i class="fa fa-home"></i> Home </h2>
    <div class="clearfix"></div>
</div>
<div class="">
    <div class="row" style="display: inline-block;">
      <div class="top_tiles">
        <div class="animated flipInY col-lg-4 col-md-5 col-sm-6 ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="count">Data</div>
            <h3>User &emsp;&ensp;<br><br></h3><hr>
            <p> <center> <a href="/User"> &emsp;&ensp;&ensp; Lihat Selengkapnya  &emsp;&ensp;&ensp;</a> </center> </p>
          </div>
        </div>
        <div class="animated flipInY col-lg-4 col-md-5 col-sm-6 ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-institution"></i></div>
            <div class="count">Data</div>
            <h3>Penyedia Tukang Bangunan</h3><hr>
            <p> <center> <a href="/PenyediaTB"> &emsp;&ensp;&ensp; Lihat Selengkapnya  &emsp;&ensp;&ensp;</a> </center> </p>
          </div>
        </div>
        <div class="animated flipInY col-lg-4 col-md-5 col-sm-6 ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-users"></i></div>
            <div class="count">Data</div>
            <h3>Tukang &emsp;&ensp;<br><br></h3><hr>
            <p> <center> <a href="/Tukang"> &emsp;&ensp;&ensp; Lihat Selengkapnya  &emsp;&ensp;&ensp;</a> </center> </p>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection

@section('Footer')
@parent
@endsection