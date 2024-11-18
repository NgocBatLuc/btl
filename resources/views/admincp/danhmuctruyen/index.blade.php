@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê danh mục truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Slug danh mục</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Kích hoạt</th>
                            <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($danhmuctruyen as $key => $danhmuc)

                            <tr>
                            <th scope="row">{{$key}}</th>
                            <td>{{$danhmuc->tendanhmuc}}</td>
                            <td>{{$danhmuc->slug_danhmuc}}</td>
                            <td>{{$danhmuc->mota}}</td>
                            <td>
                                @if($danhmuc->kichhoat == 0)
                                <span class="text text-success">Kích hoạt</span>
                                @else
                                <span class="text text-danger">Không kích hoạt</span>
                                @endif
                            </td>
                            <td>
                                <div style="display:flex; gap:10px">
                                    <a href="{{route('danhmuc.edit', [$danhmuc->id])}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('danhmuc.destroy', [$danhmuc->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Bạn có muốn xoá danh mục này không?'); " class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
