@extends('layouts.dashboard.app')

@section('content')

    <!--    --><?php //dd($suppliers)?>
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.suppliers')
                <small>all suppliers starts here {{$suppliers->total()}}</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"> @lang('site.suppliers')</li>
            </ol>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('site.suppliers_list')</h3>

                    {{-- The Search Form--}}
                    <form action="{{route('suppliers.index')}}" method="get">
                        <div class="row">

                            <div class="col-md-4 ">
                                <input type="text" name="search" class="form-control hover"
                                       placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-sm btn-primary"><i
                                        class="fa fa-search"> @lang('site.search') </i></button>

                                @if(auth()->user()->hasPermission('suppliers_create'))
                                    <a href="{{route('supplier.add')}}" class="btn btn-primary btn-sm"><i
                                            class="fa fa-plus-circle"> @lang('site.add_new_supplier') </i></a>
                                @else
                                    <a href="#" class="btn btn-primary btn-sm disabled"><i
                                            class="fa fa-plus-circle"> @lang('site.add_new_supplier') </i></a>

                                @endif


                            </div>
                        </div>
                    </form>
                    <br>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if ($suppliers->count() > 0)

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.phone')</th>
                                <th>@lang('site.address')</th>
                                <th>@lang('site.notes')</th>
                                <th>@lang('site.add_supply_order')</th>
                                <th style="width: 180px">@lang('site.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($suppliers as $index=>$supplier)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{$supplier->name}}</td>
                                    <td>{{ is_array($supplier->phone) ? implode( '-', $supplier->phone ) : $supplier->phone }}</td>
                                    <td>{{$supplier->address}}</td>
                                    <td>{{$supplier->notes}}</td>

                                    {{--                                    {{$supplier->id}}--}}
                                    {{--Add Order To This supplier--}}
                                    @if(auth()->user()->hasPermission('supply_orders_create'))
                                        <td><a href="{{route('supply_order.add', $supplier->id)}}"
                                               class="btn btn-sm btn-primary">@lang('site.add_supply_order')</a></td>
                                    @else
                                        <td><a href="#" class="btn btn-sm btn-primary"
                                               disabled>@lang('site.add_order')</a></td>
                                    @endif

                                    <td>
                                        {{--Edit supplier--}}
                                        @if(auth()->user()->hasPermission('suppliers_update'))
                                            <a href="{{route('supplier.edit', ['id'=>$supplier->id])}}"
                                               class="btn btn-sm btn-info"><i class="fa fa-edit"></i>@lang('site.edit')
                                            </a>
                                        @else
                                            <a href="#"
                                               class="btn btn-sm btn-info disabled"><i
                                                    class="fa fa-edit"></i>@lang('site.edit')</a>
                                        @endif



                                        {{--Delete supplier--}}
                                        @if(auth()->user()->hasPermission('suppliers_delete'))
                                            {{--
                                            <form action="{{route('supplier.destroy', $supplier->id)}}" style="display: inline-block" method="post">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button class="btn btn-danger btn-sm">@lang('site.delete')</button>
                                            </form>--}}
                                            <a class="confirm"
                                               href="{{route('supplier.destroy', ['id'=>$supplier->id])}}">
                                                <button type="button"
                                                        class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i> @lang('site.delete')</button>
                                            </a>
                                        @else
                                            <a href="#">
                                                <button type="button"
                                                        class="btn btn-sm btn-danger disabled"><i
                                                        class="fa fa-trash"></i>@lang('site.delete')</button>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{$suppliers->appends(request()->query())->links()}}
                        <!-- /.card-body -->

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif
                </div>

            </div>

        </section>
    </div><!-- end of content wrapper -->

@endsection

@push('scripts')

    {{--
    <script onclick="delete" >
        $(function () {

            // Confirmation Message On Click The Link

            $('.confirm').click(function() {

                return confirm('Are You Sure ?');

            });
    </script>
    --}}
@endpush
