@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật chapter truyện</div>
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
                    <form method="POST" action="{{route('chapter.update', [$chapter->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="danhmuc">Tên chapter</label>
                            <input type="text" class="form-control" id="slug" value="{{$chapter->tieude}}" onkeyup="ChangeToSlug();" name="tieude" aria-describedby="tendanhmucHelp" placeholder="Tên chapter ...">
<!--                             <small id="tendanhmucHelp" class="form-text text-muted">Vui lòng nhập tên danh mục</small> -->
                        </div>
                        
                        <div class="form-group">
                            <label for="danhmuc">Slug chapter</label>
                            <input type="text" class="form-control" id="convert_slug" value="{{$chapter->slug_chapter}}" name="slug_chapter" placeholder="Slug chapter ...">
<!--                             <small id="tendanhmucHelp" class="form-text text-muted">Vui lòng nhập tên danh mục</small> -->
                        </div>

                        <div class="form-group">
                            <label for="danhmuc">Tóm tắt chapter</label>
                            <input type="text" class="form-control" id="motadanhmuc" value="{{$chapter->tomtat}}" name="tomtat" aria-describedby="motadanhmucHelp" placeholder="Tóm tắt  ...">
<!--                             <small id="motadanhmucHelp" class="form-text text-muted">Vui lòng mô tả danh mục</small> -->
                        </div>

                        <div class="form-group">
                            <label for="danhmuc">Nội dung chapter</label>
                            <textarea name="noidung" class="form-control" style="resize: none;">{{$chapter->noidung}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="danhmuc">Thuộc truyện</label>
                            <select class="form-control mt-3" name="truyen_id">
                                @foreach($truyen as $key => $value)

                                    <option {{ $chapter->truyen_id == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->tentruyen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kichhoat">Kích hoạt</label>
                            <select class="form-control mt-3" name="kichhoat">
                            @if($chapter->kichhoat == 0)
                                    <option selected value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                @else
                                    <option value="0">Kích hoạt</option>
                                    <option selected value="1">Không kích hoạt</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" name="themdanhmuc" class="btn btn-primary mt-3">Cập nhật</button>
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
