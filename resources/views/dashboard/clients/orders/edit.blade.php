@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.clients')
                <small>all client's Orders starts here</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('clients.index')}}"> @lang('site.clients')</a></li>
                <li><a href="{{route('orders.index')}}"> @lang('site.orders')</a></li>
                <li class="active"> @lang('site.edit_order')</li>
            </ol>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="card-header">
                            <h3 class="card-title">@lang('site.edit_the_order')</h3>
                        </div>

                        <!-- left column -->
                        <div class="col-md-6">

                            <div class="box box-primary">

                                <div class="box-header">

                                    <h3 class="box-title" style="margin-bottom: 10px">@lang('site.categories')</h3>

                                </div><!-- end of box header -->

                                <div class="box-body">

                                    @foreach ($categories as $category)

                                        <div class="panel-group">

                                            <div class="panel panel-info">

                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse"
                                                           href="#{{ str_replace(' ', '-', $category->name) }}">{{ $category->name }}</a>
                                                    </h4>
                                                </div>

                                                <div id="{{ str_replace(' ', '-', $category->name) }}"
                                                     class="panel-collapse collapse">

                                                    <div class="panel-body">

                                                        @if ($category->products->count() > 0)

                                                            <table class="table table-hover">
                                                                <tr>
                                                                    <th>@lang('site.name')</th>
                                                                    <th>@lang('site.stock')</th>
                                                                    <th>@lang('site.price')</th>
                                                                    <th>@lang('site.add')</th>
                                                                </tr>

                                                                @foreach ($category->products as $product)
                                                                    <tr>
                                                                        <td>{{ $product->name }}</td>
                                                                        <td>{{ $product->stock }}</td>
                                                                        <td>{{ number_format($product->sale_price, 2) }}</td>
                                                                        <td>
                                                                            <a href=""
                                                                               id="product-{{ $product->id }}"
                                                                               data-name="{{ $product->name }}"
                                                                               data-id="{{ $product->id }}"
                                                                               data-price="{{ $product->sale_price }}"
                                                                               data-stock="{{ $product->stock }}"
                                                                               class="btn btn-sm {{ in_array($product->id, $order->products->pluck('id')->toArray()) ? 'btn-default disabled' : 'btn-success add-product-btn-s' }}">
                                                                                <i class="fa fa-plus"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                            </table><!-- end of table -->

                                                        @else
                                                            <h5>@lang('site.no_records')</h5>
                                                        @endif

                                                    </div><!-- end of panel body -->

                                                </div><!-- end of panel collapse -->

                                            </div><!-- end of panel primary -->

                                        </div><!-- end of panel group -->

                                    @endforeach

                                </div><!-- end of box body -->

                            </div><!-- end of box -->

                        </div><!-- end of col -->


                        <!-- right column The Form -->
                        <div class="col-md-6">

                            <div class="box box-primary">

                                <div class="box-header">

                                    <h3 class="box-title">@lang('site.the_order')</h3>

                                </div><!-- end of box header -->

                                <div class="box-body">

                                    <form
                                        action="{{ route('order.update', ['order' => $order->id, 'client' => $client->id]) }}"
                                        method="post">

                                        @csrf
                                        @method('post')

                                        @include('partials._errors')


                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputDelivery">@lang('site.delivery_officer')</label>
                                                <input type="text" name="delivery_officer" class="form-control"
                                                       id="exampleInputDelivery"
                                                       value="{{$order->delivery_officer}}">
                                            </div>

                                            {{--// List of Transportation--}}
                                            <?php
                                            $transportation = ['تروسيكل', 'Motorcycle موتوسيكل', 'Truck عربية نقل', 'Taxi', 'Car', 'Bicycle'];
                                            ?>

                                            <div class="form-group col-md-4">
                                                <label for="Select">@lang('site.transportation')</label>
                                                <select id="Select" class="custom-select form-control"
                                                        name="transportation">
                                                    <option value="">---</option>

                                                    @foreach($transportation as $transport)
                                                        <option
                                                            {{ $transport == $order->transportation ? 'selected' : '' }}
                                                            value="{{ $transport }}">
                                                            {{ $transport }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label
                                                    for="exampleInputTNumber">@lang('site.transportation_number')</label>
                                                <input type="text" name="transportation_number" class="form-control"
                                                       id="exampleInputTNumber"
                                                       value="{{$order->transportation_number}}">
                                            </div>
                                        </div>

                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>@lang('site.product')</th>
                                                <th>@lang('site.quantity')</th>
                                                <th>@lang('site.price')</th>
                                            </tr>
                                            </thead>

                                            <tbody class="order-list">

                                            @foreach ($order->products as $product)
                                                <tr>
                                                    <td>{{ $product->name }}</td>
                                                    <td><input type="number"
                                                               name="products[{{ $product->id }}][quantity]"
                                                               data-price="{{ number_format($product->sale_price, 2) }}"
                                                               class="form-control input-sm product-quantity" min="1"
                                                               max="{{ $product->pivot->quantity + $product->stock }}"
                                                               value="{{ $product->pivot->quantity }}"></td>
                                                    <td class="product-price">{{ number_format($product->sale_price * $product->pivot->quantity, 2) }}</td>
                                                    <td>
                                                        <button class="btn btn-danger btn-sm remove-product-btn"
                                                                data-id="{{ $product->id }}"><span
                                                                class="fa fa-trash"></span></button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>

                                        </table><!-- end of table -->

                                        <h4>@lang('site.total') : <span
                                                class="total-price-s">{{ number_format($order->total_price, 2) }}</span>
                                        </h4>

                                        <button class="btn btn-primary btn-block" id="form-btn"><i
                                                class="fa fa-edit"></i> @lang('site.edit_order')</button>

                                    </form>

                                </div><!-- end of box body -->

                            </div><!-- end of box -->


                            {{-- To Show Orders History OF This Client--}}
                            @if ($client->orders->count() > 0)

                                <div class="box box-primary">

                                    <div class="box-header">

                                        <h3 class="box-title" style="margin-bottom: 10px">@lang('site.previous_orders')
                                            <small>{{ $orders->total() }}</small>
                                        </h3>

                                    </div><!-- end of box header -->

                                    <div class="box-body">

                                        @foreach ($orders as $order)

                                            <div class="panel-group">

                                                <div class="panel panel-success">

                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse"
                                                               href="#{{ $order->created_at->format('d-m-Y-s') }}">{{ $order->created_at->toFormattedDateString() }}</a>
                                                        </h4>
                                                    </div>

                                                    <div id="{{ $order->created_at->format('d-m-Y-s') }}"
                                                         class="panel-collapse collapse">

                                                        <div class="panel-body">

                                                            <ul class="list-group">
                                                                @foreach ($order->products as $product)
                                                                    <li class="list-group-item">{{ $product->name }}</li>
                                                                @endforeach
                                                            </ul>

                                                        </div><!-- end of panel body -->

                                                    </div><!-- end of panel collapse -->

                                                </div><!-- end of panel primary -->

                                            </div><!-- end of panel group -->

                                        @endforeach

                                        {{ $orders->links() }}

                                    </div><!-- end of box body -->

                                </div><!-- end of box -->

                            @endif
                        </div><!-- end of col -->

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
