@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.clients')
                <small>all clients starts here</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('clients.index')}}"> @lang('site.clients')</a></li>
                <li class="active"> @lang('site.add_client')</li>
            </ol>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <div class="card card-primary">

                                <div class="card-header">
                                    <h3 class="card-title">@lang('site.add_new_client')</h3>
                                </div>
                                <!-- /.card-header -->
                                @include('partials._errors')

                                <!-- form start -->
                                <form method="post" action="{{route('client.store')}}">

                                    @csrf
                                    {{method_field('post')}}

                                    <div class="card-body">

                                        {{-- client Name--}}
                                        <div class="form-group">
                                            <label for="exampleInputName">@lang('site.name')</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputName"
                                                   value="{{old('name')}}" required>
                                        </div>

                                        {{-- client  Phone--}}
                                        @for($i = 0; $i < 2; $i++)
                                            <div class="form-group">
                                                <label for="exampleInputPhone">@lang('site.phone')</label>
                                                <input type="text" name="phone[]" class="form-control"
                                                       id="exampleInputPhone">
                                            </div>
                                        @endfor



                                        {{-- client Address--}}
                                        <div class="form-group">
                                            <label for="exampleInputAddress">@lang('site.address')</label>
                                            <input type="text" name="address" class="form-control"
                                                   id="exampleInputAddress"
                                                   value="{{old('address')}}">
                                        </div>

                                        {{-- Client Notes--}}
                                        <div class="form-group">
                                            <label for="exampleInputNotes">@lang('site.notes')</label>
                                            <input type="text" name="notes" class="form-control" id="exampleInputNotes"
                                                   value="{{old('notes')}}">
                                        </div>

                                    </div>


                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa fa-plus"></i> @lang('site.add') </button>
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
