{{-- @extends('frontend.company.layouts.main')

@section('container')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Lowongan</h4>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">Tambah Lowongan</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>judul_lowongan</th>
                            <th>deskripsi</th>
                            <th>lokasi</th>
                            <th>salary</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lowongans as $item)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}} </td>
                            <td>{{$item->location}}</td>
                            <td class="color-primary">{{$item->salary}}</td>
                            <td class="color-primary">
                                <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter2"><span data-feather="edit"></span>Update</button>
                                <form action="DELETE" method="post" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn sweet-confirm">
                                    <span data-feather="trash-2"></span>Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Lowongan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/perusahaan-lowongan" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control input-rounded" name="title" placeholder="Job Title" value="{{ old('title')}}">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="comment" name="description" placeholder="Deskripsi" value="{{ old('description')}}"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-rounded" name="location" placeholder="Lokasi" value="{{ old('location')}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="salary" value="{{ old('salary')}}">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter2">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Lowongan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/perusahaan-lowongan/edit" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control input-rounded" name="title" placeholder="Job Title" value="{{ old('title'), $lowongans->title}}">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="comment" name="description" placeholder="Deskripsi" value="{{ old('description', $lowongans->description)}}"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-rounded" name="location" placeholder="Lokasi" value="{{ old('location'), $lowongans->location}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="salary" value="{{ old('salary'), $lowongans->salary}}">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection --}}

@extends('frontend.company.layouts.main')

@section('container')
@if (session()->has('pesan'))
    <div class="alert alert-success mt-1" role="alert">
        {{ session('pesan') }}
    </div>
@endif
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Lowongan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>job_title</th>
                            <th>description</th>
                            <th>location</th>
                            <th>salary</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($lowongans as $item)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->location}}</td>
                            <td class="color-primary">{{$item->salary}}</td>
                            <td class="color-primary">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter2-{{ $item->id }}"><span data-feather="edit"></span> Update</button>
                                <form action="/perusahaan-lowongan/{{$item->id}}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="deleteButton" class="btn btn-danger btn sweet-confirm" onclick="return confirm('Yakin ingin Hapus data?')">
                                        <span data-feather="trash-2"></span> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <div class="modal fade" id="exampleModalCenter2-{{ $item->id }}">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Lowongan</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="/perusahaan-lowongan/{{ $item->id }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <input type="text" class="form-control input-rounded" name="title" placeholder="Job Title" value="{{ old('title', $item->title) }}">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" id="comment" name="description" placeholder="Deskripsi">{{ old('description', $item->description) }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-rounded" name="location" placeholder="Lokasi" value="{{ old('location', $item->location) }}">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" name="salary" value="{{ old('salary', $item->salary) }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">Buka Lowongan</button>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Lowongan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/perusahaan-lowongan" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control input-rounded" name="title" placeholder="Job Title" value="{{ old('title')}}">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="comment" name="description" placeholder="Deskripsi" value="{{ old('description')}}"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-rounded" name="location" placeholder="Lokasi" value="{{ old('location')}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="salary" value="{{ old('salary')}}">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
