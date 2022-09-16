@extends('layouts.admin')

@section('title')
    {{trans('dashboard.About_Us')}}
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
                        <h4 class="mb-sm-0">{{trans('dashboard.About_Us')}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">
                                    <h4 class="mb-sm-0">{{trans('dashboard.About_Us')}}</h4>
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


                            <form action="{{route('admin.about.update')}}" method="post">

                                @csrf
                                @method('PATCH')
                                <input type="hidden" value="{{$about->id}}" name="about_id">


                                <div class="row">

                                    <div class="col-6">
                                        <label for="bio_ar"> {{trans('dashboard.title_one_ar')}}:</label>

                                        <textarea id="title_one_ar" name="title_one_ar" class="body-content"
                                        >
                                                        {!! $about->getTranslation('title_one','ar')  !!}
                                                           </textarea>
                                        @error('title_one')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                  <div class="col-6">
                                        <label for="bio_ar"> {{trans('dashboard.title_one_en')}}:</label>

                                        <textarea id="title_one_en" name="title_one_en" class="body-content"
                                        >
                                                        {!! $about->getTranslation('title_one','en')  !!}
                                                           </textarea>
                                        @error('title_one')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>



                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-6">
                                        <label for="body_one">{{trans('dashboard.body_one_ar')}}:</label>

                                        <textarea id="body_one_ar" name="body_one_ar" class="body-content2"
                                        >
                                                    {!! $about->getTranslation('body_one','ar')  !!}
                                                           </textarea>
                                        @error('body_one')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="body_one">{{trans('dashboard.body_one_en')}}:</label>

                                        <textarea id="body_one_en" name="body_one_en" class="body-content2"
                                        >
                                                    {!! $about->getTranslation('body_one','en')  !!}
                                                           </textarea>
                                        @error('body_one')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>





                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-6">
                                        <label for="title_tow_ar"> {{trans('dashboard.title_tow_ar')}}:</label>

                                        <textarea id="title_tow_ar" name="title_tow_ar" class="body-content"
                                        >
                                                        {!! $about->getTranslation('title_tow','ar')  !!}
                                                           </textarea>
                                        @error('title_tow')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>
   <div class="col-6">
                                        <label for="title_tow_en"> {{trans('dashboard.title_tow_en')}}:</label>

                                        <textarea id="title_tow_en" name="title_tow_en" class="body-content"
                                        >
                                                       {!! $about->getTranslation('title_tow','en')  !!}
                                                           </textarea>
                                        @error('title_tow')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>




                                </div>
                                <br>

                                <div class="row">


                                    <div class="col-6">
                                        <label for="body_tow_ar">{{trans('dashboard.body_tow_ar')}}:</label>

                                        <textarea id="body_tow_ar" name="body_tow_ar" class="body-content2"
                                        >
                                                       {!! $about->getTranslation('body_tow','ar')  !!}
                                                           </textarea>
                                        @error('body_tow')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="body_tow_en">{{trans('dashboard.body_tow_en')}}:</label>

                                        <textarea id="body_tow_en" name="body_tow_en" class="body-content2"
                                        >
                                                       {!! $about->getTranslation('body_tow','en')  !!}
                                                           </textarea>
                                        @error('body_tow')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>





                                </div>
                                <br>

                                <div class="row">


                                    <div class="col-6">
                                        <label for="title_three_ar"> {{trans('dashboard.title_three_ar')}}:</label>

                                        <textarea id="title_three_ar" name="title_three_ar" class="body-content"
                                        >
                                                        {!! $about->getTranslation('title_three','ar') !!}
                                                           </textarea>
                                        @error('title_three_ar')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="title_three_en"> {{trans('dashboard.title_three_en')}}:</label>

                                        <textarea id="title_three_en" name="title_three_en" class="body-content"
                                        >
                                                        {!! $about->getTranslation('title_three','en') !!}
                                                           </textarea>
                                        @error('title_three_en')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>





                                </div>
                                <br>


                                <div class="row">


                                    <div class="col-6">
                                        <label for="body_three_ar">{{trans('dashboard.body_three_ar')}}:</label>

                                        <textarea id="body_three_ar" name="body_three_ar" class="body-content2"
                                        >
                                                       {!! $about->getTranslation('body_three','ar')  !!}
                                                           </textarea>
                                        @error('body_tow_ar')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="body_three_en">{{trans('dashboard.body_three_en')}}:</label>

                                        <textarea id="body_three_en" name="body_three_en" class="body-content2"
                                        >
                                                       {!! $about->getTranslation('body_three','en')  !!}
                                                           </textarea>
                                        @error('body_tow_en')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>







                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-6">
                                        <label for="title_four_ar"> {{trans('dashboard.title_four_ar')}}:</label>

                                        <textarea id="title_four_ar" name="title_four_ar" class="body-content"
                                        >
                                                       {!! $about->getTranslation('title_four','ar')  !!}
                                                           </textarea>
                                        @error('title_four_ar')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="title_four_en">{{trans('dashboard.title_four_en')}}:</label>

                                        <textarea id="title_four_en" name="title_four_en" class="body-content"
                                        >
                                                       {!! $about->getTranslation('title_four','en')  !!}
                                                           </textarea>
                                        @error('title_four_en')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>




                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-6">
                                        <label for="body_four_ar"> {{trans('dashboard.body_four_ar')}}:</label>

                                        <textarea id="body_four_ar" name="body_four_ar" class="body-content"
                                        >
                                                       {!! $about->getTranslation('body_four','ar')  !!}
                                                           </textarea>
                                        @error('title_four_ar')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="body_four_en"> {{trans('dashboard.body_four_en')}}:</label>

                                        <textarea id="body_four_en" name="body_four_en" class="body-content"
                                        >
                                                       {!! $about->getTranslation('body_four','en')  !!}
                                                           </textarea>
                                        @error('body_four_en')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>




                                </div>
                                <br>


                                <button class="btn ripple btn-secondary m-lg-2" type="submit">
                                    {{trans('dashboard.Save_Changes')}}<i
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

            $('#title_one_ar').summernote({
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

            $('#title_one_en').summernote({
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

            $('#body_one_ar').summernote({
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

            $('#body_one_en').summernote({
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

            $('#title_tow_ar').summernote({
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

            $('#title_tow_en').summernote({
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

            $('#body_tow_ar').summernote({
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

            $('#body_tow_en').summernote({
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

            $('#title_three_ar').summernote({
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

            $('#title_three_en').summernote({
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

            $('#body_three_ar').summernote({
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

            $('#body_three_en').summernote({
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

            $('#title_four_ar').summernote({
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

            $('#title_four_en').summernote({
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

            $('#body_four_ar').summernote({
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

            $('#body_four_en').summernote({
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
