@extends('layouts.admin')

@section('title')
    نبذة عنا
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
                        <h4 class="mb-sm-0">نبذة عنا</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">
                                    <h4 class="mb-sm-0">نبذة عنا</h4>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="{{route('admin.dashboard')}}">الرئيسية</a></li>
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
                                        <label for="bio_ar"> العنوان الأول:</label>

                                        <textarea id="title_one" name="title_one" class="body-content"
                                        >
                                                        {!! $about->title_one !!}
                                                           </textarea>
                                        @error('title_one')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="body_one">المحتوى الأول:</label>

                                        <textarea id="body_one" name="body_one" class="body-content2"
                                        >
                                                     {!! $about->body_one !!}
                                                           </textarea>
                                        @error('body_one')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-6">
                                        <label for="title_tow"> العنوان الثاني:</label>

                                        <textarea id="title_tow" name="title_tow" class="body-content"
                                        >
                                                        {!! $about->title_tow !!}
                                                           </textarea>
                                        @error('title_tow')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="body_tow">المحتوى الثاني:</label>

                                        <textarea id="body_tow" name="body_tow" class="body-content2"
                                        >
                                                     {!! $about->body_tow !!}
                                                           </textarea>
                                        @error('body_tow')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-6">
                                        <label for="title_three"> العنوان الثالث:</label>

                                        <textarea id="title_three" name="title_three" class="body-content"
                                        >
                                                        {!! $about->title_three !!}
                                                           </textarea>
                                        @error('title_three')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="body_three">المحتوى الثالث:</label>

                                        <textarea id="body_three" name="body_three" class="body-content2"
                                        >
                                                     {!! $about->body_three !!}
                                                           </textarea>
                                        @error('body_three')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-6">
                                        <label for="title_four"> العنوان الرابع:</label>

                                        <textarea id="title_four" name="title_four" class="body-content"
                                        >
                                                        {!! $about->title_four !!}
                                                           </textarea>
                                        @error('title_four')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="body_four">المحتوى الرابع:</label>

                                        <textarea id="body_four" name="body_four" class="body-content2"
                                        >
                                                     {!! $about->body_four !!}
                                                           </textarea>
                                        @error('body_four')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                </div>
                                <br>


                                <button class="btn ripple btn-secondary m-lg-2" type="submit">
                                    حفظ التغييرات<i
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

            $('#title_one').summernote({
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

            $('#body_one').summernote({
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

            $('#title_tow').summernote({
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

            $('#body_tow').summernote({
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

            $('#title_three').summernote({
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

            $('#body_three').summernote({
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

            $('#title_four').summernote({
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

            $('#body_four').summernote({
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
