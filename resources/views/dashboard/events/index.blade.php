@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.events')
                <small>all events starts here {{$events->total()}}</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"> @lang('site.events')</li>
            </ol>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('site.events_list')</h3>

                    {{-- The Search Form--}}
                    <form action="{{route('events.index')}}" method="get">
                        <div class="row">
                            {{-- Search Field--}}
                            <div class="col-md-4 ">
                                <input type="text" name="search" class="form-control hover"
                                       placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>
                            {{-- Categories Sort Field--}}
                            <div class="col-md-4 ">
                                <select name="category_id" class="form-control">
                                    <option value="">@lang('site.all_categories')</option>
                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category->id }}" {{ request()->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-sm btn-primary"><i
                                        class="fa fa-search"> @lang('site.search') </i></button>

                                @if(auth()->user()->hasPermission('events_create'))
                                    <a href="{{route('event.add')}}" class="btn btn-primary btn-sm"><i
                                            class="fa fa-plus-circle"> @lang('site.add_new_event') </i></a>
                                @else
                                    <a href="#" class="btn btn-primary btn-sm disabled"><i
                                            class="fa fa-plus-circle"> @lang('site.add_new_event') </i></a>

                                @endif


                            </div>
                        </div>
                    </form>
                    <br>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if ($events->count() > 0)

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.title')</th>
                                <th>@lang('site.content')</th>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.start_date')</th>
                                <th>@lang('site.end_date')</th>
                                <th>@lang('site.location')</th>
                                <th>@lang('site.category')</th>
                                <th>@lang('site.notes')</th>
                                <th style="width: 180px">@lang('site.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $index=>$event)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{$event->title}}</td>
                                    <td>{!! $event->content !!}</td>
                                    <td><img src="{{ $event->image_path }}" alt="event Photo" class="img-thumbnail"
                                             style="height: 50px;"></td>
                                    <td>{{$event->start_date}}</td>
                                    <td>{{$event->end_date}}</td>
                                    <td>{{$event->location}}</td>
                                    <td>{{$event->category->name}}</td>
                                    <td>{{$event->notes}}</td>
                                    <td>
                                        {{--Edit event--}}
                                        @if(auth()->user()->hasPermission('events_update'))
                                            <a href="{{route('event.edit', ['id'=>$event->id])}}"
                                               class="btn btn-sm btn-info"><i class="fa fa-edit"></i>@lang('site.edit')
                                            </a>
                                        @else
                                            <a href="#"
                                               class="btn btn-sm btn-info disabled"><i
                                                    class="fa fa-edit"></i>@lang('site.edit')</a>
                                        @endif



                                        {{--Delete event--}}
                                        @if(auth()->user()->hasPermission('events_delete'))
                                            {{--
                                            <form action="{{route('event.destroy', $event->id)}}" style="display: inline-block" method="post">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button class="btn btn-danger btn-sm">@lang('site.delete')</button>
                                            </form>--}}
                                            <a class="confirm"
                                               href="{{route('event.destroy', ['id'=>$event->id])}}">
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
                        {{$events->appends(request()->query())->links()}}
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
