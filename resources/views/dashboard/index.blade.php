@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.dashboard')
                <small>it all starts here</small>
            </h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>

        <section class="content">

            <div class="row">

                {{-- categories--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ $categories_count }}</h3>

                            <p>@lang('site.categories')</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('categories.index') }}" class="small-box-footer">@lang('site.read')
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--Top News--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ $top_news_count }}</h3>

                            <p>@lang('site.top_news')</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">@lang('site.read') <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--Blogs--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow-gradient">
                        <div class="inner">
                            <h3>{{ $blogs_count }}</h3>

                            <p>@lang('site.blogs')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-newspaper-o"></i>
                        </div>
                        <a href="#" class="small-box-footer">@lang('site.read') <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--Events--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $events_count }}</h3>

                            <p>@lang('site.events')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-podcast" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="small-box-footer">@lang('site.read') <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--users--}}
                {{--
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $users_count }}</h3>

                            <p>@lang('site.users')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="{{ route('users.index') }}" class="small-box-footer">@lang('site.read') <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                --}}

            </div><!-- end of row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="box box-solid">

                        <div class="box-header">
                            <h3 class="box-title">Work Flow Graph</h3>
                        </div>
                        <div class="box-body border-radius-none">
                            <div class="chart" id="line-chart" style="height: 250px;"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

                <div class="col-lg-6">
                    ali
                </div>
            </div>


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

@push('scripts')
    {{--

        <script>

            //line chart
            var line = new Morris.Line({
                element: 'line-chart',
                resize: true,
                data: [
                        @foreach ($sales_data as $data)
                    {
                        ym: "{{ $data->year }}-{{ $data->month }}", sum: "{{ $data->sum }}"
                    },
                    @endforeach
                ],
                xkey: 'ym',
                ykeys: ['sum'],
                labels: ['@lang('site.total')'],
                lineWidth: 2,
                hideHover: 'auto',
                gridStrokeWidth: 0.4,
                pointSize: 4,
                gridTextFamily: 'Open Sans',
                gridTextSize: 10
            });
        </script>
    --}}

@endpush
