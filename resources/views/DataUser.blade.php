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
<div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabel Data User</h2>
                    <div class="navbar-right">
                    </div>
                    <ul class="nav navbar-right panel_toolbox">
                        <button class="btn btn-info btn-sm btn-flat" data-toggle="modal" data-target="#modal-add"><i
                                class="fa fa-plus"></i>&nbsp; Tambah</button>
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="datatable-responsive"
                                    class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>Id User</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Foto</th>
                                            <th>Level User</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $x)
                                        <tr>
                                            <td>{{$x->Id_User}}</td>
                                            <td>{{$x->Nama}}</td>
                                            <td>{{$x->Alamat}}</td>
                                            <td>{{$x->Email}}</td>
                                            <td>{{$x->Password}}</td>
                                            <td><img src="{{$x->Foto}}" width="100px" height="auto"></td>
                                            <td>{{$x->Level_User}}</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-xs"><a
                                                        href="/editUser/{{$x->Id_User}}" style="color: white"><i
                                                            class="fa fa-edit"></i></a></button>
                                                <button type="button" class="btn btn-danger btn-xs"><a
                                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data Id = {{$x->Id_User}} ?');"
                                                        href="/hapusUser/{{$x->Id_User}}" style="color: white"><i
                                                            class="fa fa-trash-o"></i></a></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data-->
<div class="modal inmodal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <form name="frm_add" id="frm_add" class="form-horizontal" action="/inputuser" method="POST"
            enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Id User</label>
                        <div class="col-lg-10">
                            <input type="text" name="Id_User" placeholder="Id User"
                                class="form-control" value="{{old('Id_User')}}" required>
                            <br />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" name="Nama" placeholder="Nama" class="form-control" value="{{old('Nama')}}" required> <br />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Alamat</label>
                        <div class="col-lg-10">
                            <input type="text" name="Alamat" placeholder="Alamat" class="form-control" value="{{old('Alamat')}}" required> <br />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="Email" placeholder="Email" class="form-control" value="{{old('Email')}}" required> <br />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" name="Password" placeholder="Password" class="form-control" value="{{old('Password')}}" required> <br />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Foto</label>
                        <div class="col-lg-10">
                            <input type="file" name="Foto" class="form-control" value="{{old('Foto')}}" required> <br />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Level</label>
                        <div class="col-lg-10">
                            <select name="Level_User" id="Level" class="form-control" placeholder="Level User" required>
                                <option>-Pilih Level-</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('Footer')
@parent
@endsection
