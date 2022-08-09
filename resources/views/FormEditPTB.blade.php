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
    <h2><i class="fa fa-user"></i> Data Penyedia Tukang Bangunan </h2>
    <div class="clearfix"></div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Penyedia Tukang Bangunan</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <div class="x_content">
                    <br /> @foreach ($ambil as $a)
                    <form name="frm_up" id="frm_up" class="form-horizontal" action="/editPTB" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Id Yayasan</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Id_yayasan" placeholder="Id Yayasan" class="form-control"
                                            value="{{$a->Id_yayasan}}" readonly> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Nama_yayasan" placeholder="Nama Yayasan" class="form-control"
                                            value="{{$a->Nama_yayasan}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Alamat</label>
                                    <div class="col-lg-10">
                                        <input type="textarea" name="Alamat_yayasan" placeholder="Alamat" class="form-control"
                                            value="{{$a->Alamat_yayasan}}"> <br />
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
                                    <label class="col-lg-2 control-label">No Hp</label>
                                    <div class="col-lg-10">
                                        <input type="textarea" name="No_Hpyayasan" placeholder="No Hp" class="form-control"
                                            value="{{$a->No_Hpyayasan}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">No Izin</label>
                                    <div class="col-lg-10">
                                        <input type="textarea" name="No_izinyayasan" placeholder="No Izin" class="form-control"
                                            value="{{$a->No_izinyayasan}}"> <br />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal"><a
                                    href="/PenyediaTB">Tutup</a></button>
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
