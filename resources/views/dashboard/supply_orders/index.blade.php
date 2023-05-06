@extends('layouts.dashboard.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.supply_orders')
                <small>all @lang('site.supply_orders') starts here {{ $supply_orders->total() }} </small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')
                    </a></li>
                <li class="active">@lang('site.supply_orders')</li>
            </ol>
        </section>


        <section class="content">

            <div class="row">

                <div class="col-md-8">

                    <div class="box box-primary">

                        <div class="box-header">

                            <h3 class="box-title" style="margin-bottom: 10px">@lang('site.supply_orders')</h3>

                            <form action="{{ route('supply_orders.index') }}" method="get">

                                <div class="row">

                                    <div class="col-md-8">
                                        <input type="text" name="search" class="form-control"
                                               placeholder="@lang('site.search')" value="{{ request()->search }}">
                                    </div>

                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa fa-search"></i> @lang('site.search')</button>
                                    </div>

                                </div><!-- end of row -->

                            </form><!-- end of form -->

                        </div><!-- end of box header -->

                        @if ($supply_orders->count() > 0)

                            <div class="box-body table-responsive">

                                <table class="table table-hover">
                                    <tr>
                                        <th>@lang('site.supplier_name')</th>
                                        <th>@lang('site.total_price')</th>
                                        {{--<th>@lang('site.status')</th>--}}
                                        <th>@lang('site.created_at')</th>
                                        <th>@lang('site.actions')</th>
                                    </tr>

                                    @foreach ($supply_orders as $supply_order)
                                        <tr>
                                            <td>{{ $supply_order->supplier->name }}</td>
                                            <td>{{ number_format($supply_order->total_price, 2) }}</td>
                                            {{--<td>--}}
                                            {{--<button--}}
                                            {{--data-status="@lang('site.' . $order->status)"--}}
                                            {{--data-url="{{ route('dashboard.orders.update_status', $order->id) }}"--}}
                                            {{--data-method="put"--}}
                                            {{--data-available-status='["@lang('site.processing')", "@lang('site.finished') "]'--}}
                                            {{--class="order-status-btn btn {{ $order->status == 'processing' ? 'btn-warning' : 'btn-success disabled' }} btn-sm"--}}
                                            {{-->--}}
                                            {{--@lang('site.' . $order->status)--}}
                                            {{--</button>--}}
                                            {{--</td>--}}
                                            <td>{{ $supply_order->created_at->toFormattedDateString() }}</td>
                                            <td>
                                                {{--Same to the Blow Button To Test The button functionality--}}
                                                {{--<a href="{{ route('supply_order.show', ['id'=>$supply_order->id])}}"
                                                   class="btn btn-primary btn-sm">@lang('site.show')
                                                </a>--}}

                                                {{--Show Button--}}
                                                <button class="btn btn-primary btn-sm supply_order-products"
                                                        data-url="{{ route('supply_order.show', ['id'=>$supply_order->id]) }}"
                                                        data-method="get"
                                                >
                                                    <i class="fa fa-list"></i>
                                                    @lang('site.show')
                                                </button>


                                                {{--Update Button--}}
                                                @if (auth()->user()->hasPermission('orders_update'))
                                                    <a href="{{ route('supply_order.edit', ['supply_order' => $supply_order->id,'supplier' => $supply_order->supplier->id]) }}"
                                                       class="btn btn-warning btn-sm"><i
                                                            class="fa fa-pencil"></i> @lang('site.edit')</a>
                                                @else
                                                    <a href="#" disabled class="btn btn-warning btn-sm"><i
                                                            class="fa fa-edit"></i> @lang('site.edit')</a>
                                                @endif


                                                {{--Dalete Button--}}
                                                @if (auth()->user()->hasPermission('supply_orders_delete'))
                                                    <form
                                                        action="{{ route('supply_order.destroy', ['id'=>$supply_order->id]) }}"
                                                        method="post" style="display: inline-block;">
                                                        @csrf
                                                        @method('GET')
                                                        <button type="submit" class="btn btn-danger btn-sm delete"><i
                                                                class="fa fa-trash"></i> @lang('site.delete')</button>
                                                    </form>

                                                @else
                                                    <a href="#" class="btn btn-danger btn-sm" disabled><i
                                                            class="fa fa-trash"></i> @lang('site.delete')</a>
                                                @endif
                                            </td>

                                        </tr>

                                    @endforeach

                                </table><!-- end of table -->

                                {{ $supply_orders->appends(request()->query())->links() }}

                            </div>

                        @else

                            <div class="box-body">
                                <h3>@lang('site.no_records')</h3>
                            </div>

                        @endif

                    </div><!-- end of box -->

                </div><!-- end of col -->

                <div class="col-md-4">

                    <div class="box box-primary">

                        <div class="box-header">
                            <h3 class="box-title" style="margin-bottom: 10px">@lang('site.show_products')</h3>
                        </div><!-- end of box header -->

                        <div class="box-body">

                            <div style="display: none; flex-direction: column; align-items: center;" id="loading">
                                <div class="loader"></div>
                                <p style="margin-top: 10px">@lang('site.loading')</p>
                            </div>

                            <div id="supply_order-product-list">

                            </div><!-- end of supply order product list -->

                        </div><!-- end of box body -->

                    </div><!-- end of box -->

                </div><!-- end of col -->

            </div><!-- end of row -->

        </section><!-- end of content section -->

    </div><!-- end of content wrapper -->

@endsection
