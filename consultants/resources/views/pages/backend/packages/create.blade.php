@extends('layouts.admin')

@section('title')
    {{trans('dashboard.Packages')}}
@endsection

@section('style')


@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{trans('dashboard.Packages')}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">
                                    <h4 class="mb-sm-0">{{trans('dashboard.Packages')}}</h4>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="{{route('admin.dashboard')}}">{{trans('dashboard.Home')}}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{--                            <div class="d-block d-md-flex justify-content-between">--}}
                            {{--                                <div class="d-block">--}}
                            {{--                                    <a href=""--}}
                            {{--                                       class="btn btn-outline-success waves-effect waves-light btn-rounded"--}}
                            {{--                                    >رجوع <i class="fa fa-arrow-circle-right"></i>--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <br>


                            <form action="{{route('admin.packages.store')}}" method="post">

                                @csrf


                                <div class="row">
                                    <div class="col-6">
                                        <label for="title_ar"
                                              >{{trans('dashboard.Title_ar')}}:</label>
                                        <input class="form-control" type="text"
                                               name="title_ar"
                                               id="title_ar">
                                        @error('title_ar')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="title_en"
                                              >{{trans('dashboard.Title_en')}}:</label>
                                        <input class="form-control" type="text"
                                               name="title_en"
                                               id="title_en">
                                        @error('title_en')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>




                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-6">

                                        <label for="type" class=" col-form-label">{{trans('dashboard.Time_period')}} : </label>

                                        <select class="form-control" name="time_period">
                                            <option selected > {{trans('dashboard.Choose')}}...</option>


                                            <option
                                                value="monthly" {{old('time_period') == 'monthly' ?'selected' : null}}>
                                                {{trans('dashboard.Monthly')}}
                                            </option>
                                            <option
                                                value="yearly" {{old('time_period') == 'yearly' ?'selected' : null}}>
                                                {{trans('dashboard.Yearly')}}
                                            </option>

                                            <option
                                                value="2 years" {{old('time_period') == '2 years' ?'selected' : null}}>
                                                {{trans('dashboard.2_Years')}}
                                            </option>


                                        </select>
                                        @error('time_period')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                        <div class="col-6">
                                            <label for="price"
                                                   class="col-sm-2 col-form-label">{{trans('dashboard.Price')}}:</label>
                                            <input class="form-control" type="text"
                                                   name="price"
                                                   id="price">
                                            @error('price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>





                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-6">
                                        <label for="features_ar"> {{trans('dashboard.Features_ar')}}:</label>

                                        <textarea id="features_ar" name="features_ar" class="body-content"
                                        >

                                                           </textarea>
                                        @error('features_ar')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                  <div class="col-6">
                                        <label for="features_en"> {{trans('dashboard.Features_en')}}:</label>

                                        <textarea id="features_en" name="features_en" class="body-content"
                                        >

                                                           </textarea>
                                        @error('features_en')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>




                                </div>
                                <br>




                                <button class="btn ripple btn-secondary m-lg-2" type="submit">
                                    {{trans('dashboard.Save')}} <i
                                        class="fe fe-plus"></i></button>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('scripts')

    <script>


        $(function () {

            $('#features_ar').summernote({
                height: 100,

                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear',
                        'strikethrough', 'superscript', 'subscript',
                        'fontname', 'fontsize', 'table', 'ul', 'ol', 'paragraph',
                    ]],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']],
                    ['color', ['color']],
                    ['color', ['forecolor']],


                ],
                popover: {
                    image: [
                        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    table: [
                        ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                        ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                },


            });

        });

        $(function () {

            $('#features_en').summernote({
                height: 100,

                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear',
                        'strikethrough', 'superscript', 'subscript',
                        'fontname', 'fontsize', 'table', 'ul', 'ol', 'paragraph',
                    ]],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']],
                    ['color', ['color']],
                    ['color', ['forecolor']],


                ],
                popover: {
                    image: [
                        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    table: [
                        ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                        ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                },


            });

        });


    </script>

@endsection
