@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.blogs')
                <small>all blogs starts here</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('blogs.index')}}"> @lang('site.blogs')</a></li>
                <li class="active"> @lang('site.add_blog')</li>
            </ol>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card card-primary">

                                <div class="card-header">
                                    <h3 class="card-title">@lang('site.add_new_blog')</h3>
                                </div>
                                <!-- /.card-header -->
                                @include('partials._errors')

                                <!-- form start -->
                                <form method="post" action="{{route('blog.store')}}" enctype="multipart/form-data">

                                    @csrf
                                    {{method_field('post')}}

                                    <div class="card-body">

                                        {{-- blog English title--}}
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputTitle">@lang('site.title_en')</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputTitle"
                                                   value="{{old('title')}}" required>
                                        </div>


                                        {{-- blog Arabic title--}}
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputTitleAr">@lang('site.title_ar')</label>
                                            <input type="text" name="title_ar" class="form-control"
                                                   id="exampleInputTitleAr"
                                                   value="{{old('title_ar')}}" required>
                                        </div>


                                        {{-- blog English content --}}
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputDesc">@lang('site.content_en')</label>
                                            <textarea name="content" class="form-control ckeditor"
                                                      id="exampleInputDesc">{{old('content')}}
                                            </textarea>
                                        </div>


                                        {{-- blog Arabic content --}}
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputDescAr">@lang('site.content_ar')</label>
                                            <textarea name="content_ar" class="form-control ckeditor"
                                                      id="exampleInputDescAr">{{old('content_ar')}}
                                            </textarea>
                                        </div>


                                        {{-- blog publish Date --}}
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPubDate">@lang('site.publish_date')</label>
                                            <input type="date" name="publish_date" class="form-control"
                                                   id="exampleInputPubDate"
                                                   value="{{old('publish_date')}}" required>
                                        </div>


                                        {{-- blog Image --}}
                                        <div class=" col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputimage">@lang('site.choose_image')</label>
                                                <input type="file" name="image" class="form-control "
                                                       id="exampleInputimage"
                                                       onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                                                >
                                            </div>

                                            <div class="form-group">
                                                <img src="{{ asset('uploads/blogs_img/default.png') }}"
                                                     alt="Your Photo"
                                                     id="blah" class="img-thumbnail" style="height: 50px; width: 75px;">
                                            </div>
                                        </div>


                                        {{-- blog Notes--}}
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputNotes">@lang('site.notes')</label>
                                            <input type="text" name="notes" class="form-control" id="exampleInputNotes"
                                                   value="{{old('notes')}}">
                                        </div>


                                        {{-- blog Category--}}
                                        <div class="card-body">
                                            {{--{{old ('category_id')}}--}}
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label for="Select">@lang('site.category')</label>
                                                        <select id="Select" class="custom-select form-control"
                                                                name="category_id" required>
                                                            <option value="">---</option>
                                                            @foreach($categories as $category)

                                                                <option
                                                                    value="{{$category->id}}"
                                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                                    {{$category->name}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    {{-- blog Top News --}}
                                    <div class="form-group col-md-1">
                                        <p class="fw-bolder" style="font-weight: bold;"> Top News</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class=" form-check">
                                            <input class="form-check-input" type="radio" name="top_news"
                                                   id="exampleRadios1" value="0" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                @lang('site.Not Paned As Top News')
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="top_news"
                                                   id="exampleRadios2" value="1">
                                            <label class="form-check-label" for="exampleRadios2">
                                                @lang('site.Paned As Top News')
                                            </label>
                                        </div>
                                    </div>


                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa fa-plus"></i> @lang('site.add') </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div><!-- end of content wrapper -->

@endsection


@push('scripts')

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endpush
