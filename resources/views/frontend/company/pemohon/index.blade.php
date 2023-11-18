@extends('frontend.company.layouts.main')

@section('container')
@if (session()->has('pesan'))
    <div class="alert alert-success mt-1" role="alert">
        {{ session('pesan') }}
    </div>
@endif
<div class="col-lg-12">
    <div class="card">
        <div class="card-header align-items-start">
            <h4 class="card-title mt-1">Data Pemohon</h4>
            <div class="card-title">
                {{$pemohons->links()}} 
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>jobs</th>
                            <th>pemohon</th>
                            {{-- <th>aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody style="color: black">
                        @foreach ($pemohons as $pemohon)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$pemohon->perusahaan_job_share_id}}</td>
                            <td>{{$pemohon->user_id}}</td>
                            {{-- <td class="color-primary">
                                <form action="/perusahaan-lowongan/{{$pemohon->id}}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="deleteButton" class="btn btn-danger btn sweet-confirm" onclick="return confirm('Yakin ingin Hapus data?')">
                                        <span data-feather="trash-2"></span> Delete
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('export_pemohon') }}" class="btn btn-success text-white float-right">Export PDF</a>
            {{-- data-toggle="modal" data-target="#exampleModalCenter" --}}
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/pemohon" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="perusahaan_job_share_id" class="form-label">Job</label>
                        <select class="form-control form-control-lg" name="perusahaan_job_share_id">
                        @foreach($jobs as $job)
                            @if (old('perusahaan_job_share_id')==$job->id)
                            <option value="{{$job->id}}" selected>{{$job->posisi}}</option>
                            @else
                            <option value="{{$job->id}}">{{$job->posisi}}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-control form-control-lg" name="user_id">
                        @foreach($users as $user)
                            @if (old('user_id')==$user->id)
                            <option value="{{$user->id}}" selected>{{$user->id}}</option>
                            @else
                            <option value="{{$user->id}}">
                                {{$user->id}}
                                {{-- {{ optional($user->profile)->last_name }} --}}
                            </option>
                            @endif
                        @endforeach
                        </select>
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