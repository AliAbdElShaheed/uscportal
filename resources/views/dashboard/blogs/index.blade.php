@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.blogs')
                <small>all blogs starts here {{$blogs->total()}}</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"> <i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"> @lang('site.blogs')</li>
            </ol>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('site.blogs_list')</h3>

                    {{-- The Search Form--}}
                    <form action="{{route('blogs.index')}}" method="get">
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

                                @if(auth()->user()->hasPermission('blogs_create'))
                                    <a href="{{route('blog.add')}}" class="btn btn-primary btn-sm"><i
                                            class="fa fa-plus-circle"> @lang('site.add_new_blog') </i></a>
                                @else
                                    <a href="#" class="btn btn-primary btn-sm disabled"><i
                                            class="fa fa-plus-circle"> @lang('site.add_new_blog') </i></a>

                                @endif


                            </div>
                        </div>
                    </form>
                    <br>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if ($blogs->count() > 0)

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.title')</th>
                                {{--<th>@lang('site.content')</th>--}}
                                <th>@lang('site.image')</th>
                                <th>@lang('site.publish_date')</th>
                                <th>@lang('site.appear_on_top_news')</th>
                                <th>@lang('site.category')</th>
                                <th>@lang('site.notes')</th>
                                <th style="width: 180px">@lang('site.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $index=>$blog)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{$blog->title}}</td>
                                    {{--<td>{!! $blog->content !!}</td>--}}
                                    <td><img src="{{ $blog->image_path }}" alt="Blog Photo" class="img-thumbnail"
                                             style="height: 50px;"></td>
                                    <td>{{$blog->publish_date}}</td>
                                    <td>

                                        @if (($blog->top_news) == 1)
                                            Yes
                                        @else
                                            No
                                        @endif

                                    </td>
                                    <td>{{$blog->category->name}}</td>
                                    <td>{{$blog->notes}}</td>
                                    <td>
                                        {{--Edit blog--}}
                                        @if(auth()->user()->hasPermission('blogs_update'))
                                            <a href="{{route('blog.edit', ['id'=>$blog->id])}}"
                                               class="btn btn-sm btn-info"><i class="fa fa-edit"></i>@lang('site.edit')
                                            </a>
                                        @else
                                            <a href="#"
                                               class="btn btn-sm btn-info disabled"><i
                                                    class="fa fa-edit"></i>@lang('site.edit')</a>
                                        @endif



                                        {{--Delete blog--}}
                                        @if(auth()->user()->hasPermission('blogs_delete'))
                                            {{--
                                            <form action="{{route('blog.destroy', $blog->id)}}" style="display: inline-block" method="post">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button class="btn btn-danger btn-sm">@lang('site.delete')</button>
                                            </form>--}}
                                            <a class="confirm"
                                               href="{{route('blog.destroy', ['id'=>$blog->id])}}">
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
                        {{$blogs->appends(request()->query())->links()}}
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
