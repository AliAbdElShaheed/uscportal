@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.navigationMenu')
                <small>all Navigation Menu starts here</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('nav-menu.index')}}"> @lang('site.navigationMenu')</a></li>
                <li class="active"> @lang('site.edit_navigationMenu')</li>
            </ol>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card card-primary">

                                <div class="card-header">
                                    <h3 class="card-title">@lang('site.edit_navigationMenu')</h3>
                                </div>
                                <!-- /.card-header -->
                                @include('partials._errors')

                                <!-- form start -->
                                <form method="post" action="{{route('nav-menu.update', $nav->id)}}">

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
                                                           value="{{ $nav->getTranslation('name', 'ar') }}" required>
                                                </div>

                                                {{-- Category English Name--}}
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputName">@lang('site.name_en')</label>
                                                    <input type="text" name="name" class="form-control"
                                                           id="exampleInputName"
                                                           value="{{ $nav->getTranslation('name', 'en') }}" required>
                                                </div>


                                                {{-- Nav Status--}}
                                                {{--// List of State--}}{{--
                                                <?php $status = ['InActive', 'Active']; ?>--}}

                                                <div class="form-group col-md-4">
                                                    <label for="SelectStatus">@lang('site.status')</label>
                                                    <select id="SelectStatus" class="custom-select form-control"
                                                            name="status">

                                                        <option
                                                            value="1" {{ $nav->status == 1 ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option
                                                            value="0" {{ $nav->status == 0 ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>

                                                    </select>
                                                </div>


                                                {{-- Nav Priority--}}
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPriority">@lang('site.priority')</label>
                                                    <input type="number" name="priority" step="1" class="form-control"
                                                           id="exampleInputPriority"
                                                           value="{{ $nav->priority }}" min="1" required>
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
                                                            value="0" {{ $nav->special == 0 ? 'selected' : '' }}>
                                                            Normal Link
                                                        </option>
                                                        <option
                                                            value="1" {{ $nav->special == 1 ? 'selected' : '' }}>
                                                            Special Link
                                                        </option>


                                                    </select>
                                                </div>


                                                {{-- Category Notes--}}
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputNotes">@lang('site.notes')</label>
                                                    <input type="text" name="notes" class="form-control"
                                                           id="exampleInputNotes"
                                                           value="{{ $nav->notes }}">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="row container justify-content-md-center">
                                        <div class="col-md-10">
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-edit"></i> @lang('site.edit') </button>
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
