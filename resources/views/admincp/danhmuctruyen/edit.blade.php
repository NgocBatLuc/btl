@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật danh mục truyện</div>
                @if ($errors ->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors -> all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('danhmuc.update', [$danhmuc -> id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="danhmuc">Tên danh mục</label>
                            <input type="text" class="form-control" id="slug" value="{{$danhmuc->tendanhmuc}}" onkeyup="ChangeToSlug();" name="tendanhmuc" aria-describedby="tendanhmucHelp" placeholder="Tên danh mục ...">
<!--                             <small id="tendanhmucHelp" class="form-text text-muted">Vui lòng nhập tên danh mục</small> -->
                        </div>
                        <div class="form-group">
                            <label for="danhmuc">Slug danh mục</label>
                            <input type="text" class="form-control" id="convert_slug" value="{{$danhmuc->slug_danhmuc}}" name="slug_danhmuc" placeholder="Slug danh mục ...">
<!--                             <small id="tendanhmucHelp" class="form-text text-muted">Vui lòng nhập tên danh mục</small> -->
                        </div>
                        <div class="form-group">
                            <label for="danhmuc">Mô tả danh mục</label>
                            <input type="text" class="form-control" id="motadanhmuc" value="{{$danhmuc->mota}}" name="mota" aria-describedby="motadanhmucHelp" placeholder="Mô tả danh mục ...">
<!--                             <small id="motadanhmucHelp" class="form-text text-muted">Vui lòng mô tả danh mục</small> -->
                        </div>

                        <div class="form-group">
                            <label for="kichhoat">Kích hoạt</label>
                            <select class="form-control mt-3" name="kichhoat">
                                @if($danhmuc->kichhoat == 0)
                                    <option selected value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                @else
                                    <option value="0">Kích hoạt</option>
                                    <option selected value="1">Không kích hoạt</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" name="capnhat" class="btn btn-primary mt-3">Cập nhật</button>
                    </form>

                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
