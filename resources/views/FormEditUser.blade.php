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
    <h2><i class="fa fa-user"></i> Data User </h2>
    <div class="clearfix"></div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Data User</small></h2>
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
                    <br /> @foreach ($ambil as $a)
                    <form name="frm_up" id="frm_up" class="form-horizontal" action="/editUser" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Id User</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Id_User" placeholder="Id User" class="form-control"
                                            value="{{old('Id_User',$a->Id_User)}}" readonly> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="Nama" placeholder="Nama" class="form-control"
                                            value="{{$a->Nama}}"> <br />
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
                                    <label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" name="Password" placeholder="Password"
                                            class="form-control" value="{{$a->Password}}">
                                        <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Foto</label>
                                    <div class="col-lg-10">
                                        <img src="{{url('/'.$a->Foto)}}" name="Foto" width="100px" height="auto"><br><br>
                                        <input type="file" name="Foto" placeholder="Foto" class="form-control"
                                            value="{{old('Foto','$a->Foto')}}"> <br />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Level</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="Level_User" name="Level_User" required="required"
                                            value="{{$a->Level_User}}">
                                            <option>- Pilih Level -</option>
                                            <option value="Admin" {{$a->Level_User =="Admin" ? 'selected':''}}>Admin</option>
                                            <option value="User" {{$a->Level_User =="User" ? 'selected':''}}>User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal"><a
                                    href="/User">Tutup</a></button>
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
