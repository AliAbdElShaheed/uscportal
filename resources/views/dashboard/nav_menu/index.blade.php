@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.navigationMenu')
                <small>all navigationMenu starts here {{$navmenus->total()}}</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"> @lang('site.navigationMenu')</li>
            </ol>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('site.navigationMenu_list')</h3>

                    {{-- The Search Form--}}
                    <form action="{{route('nav-menu.index')}}" method="get">
                        <div class="row">

                            <div class="col-md-4 ">
                                <input type="text" name="search" class="form-control hover"
                                       placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-sm btn-primary"><i
                                        class="fa fa-search"> @lang('site.search') </i></button>

                                @if(auth()->user()->hasPermission('navigationMenu_create'))
                                    <a href="{{route('nav-menu.add')}}" class="btn btn-primary btn-sm"><i
                                            class="fa fa-plus-circle"> @lang('site.add_new_category') </i></a>
                                @else
                                    <a href="#" class="btn btn-primary btn-sm disabled"><i
                                            class="fa fa-plus-circle"> @lang('site.add_new_category') </i></a>

                                @endif


                            </div>
                        </div>
                    </form>
                    <br>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if ($navmenus->count() > 0)

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.items_count')</th>
                                <th>@lang('site.related_items')</th>
                                <th>@lang('site.notes')</th>
                                <th style="width: 180px">@lang('site.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($navmenus as $index=>$category)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{$category->name}}</td>
                                    @if($category->id == 1)
                                        <td>{{$category->blogs->count()}}</td>
                                    @else
                                        <td>{{$category->events->count()}}</td>
                                    @endif
                                    <td><a href="{{ route('nav-menu.index', ['category_id' => $category->id]) }}"
                                           class="btn btn-primary btn-sm">@lang('site.items')</a></td>
                                    <td>{{$category->notes}}</td>
                                    <td>
                                        {{--Edit category--}}
                                        @if(auth()->user()->hasPermission('navigationMenu_update'))
                                            <a href="{{route('nav-menu.edit', ['id'=>$category->id])}}"
                                               class="btn btn-sm btn-info"><i
                                                    class="fa fa-edit"></i>@lang('site.edit')
                                            </a>
                                        @else
                                            <a href="#"
                                               class="btn btn-sm btn-info disabled"><i
                                                    class="fa fa-edit"></i>@lang('site.edit')</a>
                                        @endif



                                        {{--Delete category--}}
                                        @if(auth()->user()->hasPermission('navigationMenu_delete'))
                                            {{--
                                            <form action="{{route('nav-menu.destroy', $category->id)}}" style="display: inline-block" method="post">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button class="btn btn-danger btn-sm">@lang('site.delete')</button>
                                            </form>--}}
                                            <a class="confirm"
                                               href="{{route('nav-menu.destroy', ['id'=>$category->id])}}">
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
                        {{$navmenus->appends(request()->query())->links()}}
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
