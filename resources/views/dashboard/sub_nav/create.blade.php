@extends('layouts.dashboard.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.sub_navs')
                <small>all Sub Navs starts here {{$sub_navs->count()}}</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('sub_nav.index')}}"> @lang('site.sub_navs')</a></li>
                <li class="active"> @lang('site.add_sub_nav')</li>
            </ol>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card card-primary">

                                <div class="card-header">
                                    <h3 class="card-title">@lang('site.add_new_sub_nav')</h3>
                                </div>
                                <!-- /.card-header -->
                                @include('partials._errors')

                                <!-- form start -->
                                <form method="post" action="{{route('sub_nav.store')}}">

                                    @csrf
                                    @method('post')
                                    <!-- card-body -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-body">

                                                {{-- Category Arabic Name--}}
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputNameAr">@lang('site.name_ar')</label>
                                                    <input type="text" name="name_ar" class="form-control"
                                                           id="exampleInputNameAr"
                                                           value="{{old('name_ar')}}" required>
                                                </div>

                                                {{-- Category English Name--}}
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputName">@lang('site.name_en')</label>
                                                    <input type="text" name="name" class="form-control"
                                                           id="exampleInputName"
                                                           value="{{old('name')}}" required>
                                                </div>


                                                {{-- Nav Status--}}
                                                <div class="form-group col-md-4">
                                                    <label for="SelectStatus">@lang('site.status')</label>
                                                    <select id="SelectStatus" class="custom-select form-control"
                                                            name="status">
                                                        <option
                                                            value="0" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>
                                                        <option
                                                            value="1" {{ old('status') == 'active' ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                    </select>
                                                </div>


                                                {{-- Nav Priority--}}
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPriority">@lang('site.priority')</label>
                                                    <input type="number" name="priority" step="1" class="form-control"
                                                           id="exampleInputPriority"
                                                           value="{{old('priority')}}" min="1" required>
                                                </div>


                                                {{-- Nav href--}}
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputHref">@lang('site.href')</label>
                                                    <input type="text" name="href" class="form-control"
                                                           id="exampleInputHref"
                                                           value="{{old('href')}}" required>
                                                </div>


                                                {{-- Nav Special--}}
                                                <div class="form-group col-md-4">
                                                    <label for="SelectSpecial">@lang('site.special')</label>
                                                    <select id="SelectSpecial" class="custom-select form-control"
                                                            name="special">
                                                        <option
                                                            value="0" {{ old('special') == 'Normal Link' ? 'selected' : '' }}>
                                                            Normal Link
                                                        </option>
                                                        <option
                                                            value="1" {{ old('special') == 'Special Link' ? 'selected' : '' }}>
                                                            Special Link
                                                        </option>


                                                    </select>
                                                </div>


                                                {{-- Main Navs List--}}
                                                <div class="col-sm-4">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label for="Select">@lang('site.navigationMenu')</label>
                                                        <select id="Select" class="custom-select form-control"
                                                                name="nav_menu_id" required>
                                                            <option value="">---</option>
                                                            @foreach($navmenus as $navmenu)

                                                                <option
                                                                    value="{{$navmenu->id}}"
                                                                    {{ old('nav_menu_id') == $navmenu->id ? 'selected' : '' }}
                                                                >
                                                                    {{$navmenu->name}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                {{--Notes--}}
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputNotes">@lang('site.notes')</label>
                                                    <input type="text" name="notes" class="form-control"
                                                           id="exampleInputNotes"
                                                           value="{{old('notes')}}">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="row container justify-content-md-center">
                                        <div class="col-md-10">
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-plus"></i> @lang('site.add') </button>
                                            </div>
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
