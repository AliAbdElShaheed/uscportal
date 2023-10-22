@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.navigationMenu')
                <small>all Navigation Menu starts here {{$navmenus->count()}}</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('nav-menu.index')}}"> @lang('site.navigationMenu')</a></li>
                <li class="active"> @lang('site.add_navigationMenu')</li>
            </ol>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card card-primary">

                                <div class="card-header">
                                    <h3 class="card-title">@lang('site.add_new_navigationMenu')</h3>
                                </div>
                                <!-- /.card-header -->
                                @include('partials._errors')

                                <!-- form start -->
                                <form method="post" action="{{route('nav-menu.store')}}">

                                    @csrf
                                    @method('post')
                                    {{--{{method_field('post')}}--}}
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
                                                {{--// List of State--}}{{--
                                                <?php $status = ['InActive', 'Active']; ?>--}}

                                                <div class="form-group col-md-4">
                                                    <label for="SelectStatus">@lang('site.status')</label>
                                                    <select id="SelectStatus" class="custom-select form-control"
                                                            name="status">

                                                        <option
                                                            value="1" {{ old('status') == 'active' ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option
                                                            value="0" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>


                                                        {{--@foreach($status as $state)
                                                                <option
                                                                    value="{{ $state }}"
                                                                    {{ old('status') == $state ? 'selected' : '' }}>
                                                                    {{ $state }}
                                                                </option>
                                                            @endforeach--}}

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
                                                {{--// List of Special--}}{{--
                                                <?php $specials = ['Normal Link', 'Special Link']; ?>--}}

                                                <div class="form-group col-md-4">
                                                    <label for="SelectSpecial">@lang('site.special')</label>
                                                    <select id="SelectSpecial" class="custom-select form-control"
                                                            name="special">

                                                        {{--@foreach($specials as $special)
                                                            <option
                                                                value="{{ $special }}"
                                                                {{ old('special') == $special ? 'selected' : '' }}>
                                                                {{ $special }}
                                                            </option>
                                                        @endforeach--}}

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


                                                {{-- Category Notes--}}
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
