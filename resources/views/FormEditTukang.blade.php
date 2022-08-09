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
    <h2><i class="fa fa-user"></i> Data Tukang </h2>
    <div class="clearfix"></div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Data Tukang</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Settings 1</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <div class="x_content">
                    <br /> @foreach ($a as $a)
                    <form name="frm_up" id="frm_up" class="form-horizontal" action="/editTB" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Id Tukang</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Id_Tukang" placeholder="Id User" class="form-control"
                                            value="{{$a->Id_Tukang}}" readonly> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Nama_Tukang" placeholder="Nama" class="form-control"
                                            value="{{$a->Nama_Tukang}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Usia</label>
                                    <div class="col-lg-10">
                                        <input type="number" name="Usia" placeholder="Usia" class="form-control" value="{{$a->Usia}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Jenis Kel</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Jenis_Kelamin" placeholder="Jenis Kelamin" class="form-control" value="{{$a->Jenis_Kelamin}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Alamat</label>
                                    <div class="col-lg-10">
                                        <input type="textarea" name="Alamat" placeholder="Alamat" class="form-control"
                                            value="{{$a->Alamat}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="email" name="Email" placeholder="Email" class="form-control"
                                            value="{{$a->Email}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">No Hp Yayasan</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="No_Hpyayasan" placeholder="No Hp Yayasan" class="form-control" value="{{$a->No_Hpyayasan}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Status Pernikahan</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Status_Pernikahan" placeholder="No Hp Yayasan" class="form-control" value="{{$a->Status_Pernikahan}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Skill</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Skill" placeholder="Skill" class="form-control" value="{{$a->Skill}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Gaji</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Gaji_Tukang" placeholder="Gaji" class="form-control" value="{{$a->Gaji_Tukang}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Id Yayasan</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Id_yayasan" placeholder="Id Yayasan" class="form-control" value="{{$a->Id_yayasan}}"> <br />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal"><a
                                    href="/Tukang">Tutup</a></button>
                                <button type="submit" class="btn btn-info">Simpan</button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('Footer')
@parent
@endsection
