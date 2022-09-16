@extends('layouts.admin')

@section('title')

   {{trans('dashboard.Mail')}}


@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> {{trans('dashboard.Mail')}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active"> {{trans('dashboard.Mail')}}</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> {{trans('dashboard.Home')}}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-block d-md-flex justify-content-between">
                                <div class="d-block">
                                    <h5 class="card-title pb-0 border-0"> {{trans('dashboard.Mail')}}</h5>
                                </div>


                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12">


                                    <!-- Right Sidebar -->


                                    <div class="card">
                                        <div class="btn-toolbar p-3" role="toolbar">
                                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-dark waves-light waves-effect"><i
                                                        class="fa fa-message"></i></button>
                                                <button type="button"
                                                        class="btn btn-secondary waves-light waves-effect">{{$count->Count()}}</button>
                                            </div>


                                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                                <button type="button"
                                                        class="btn btn-dark waves-light waves-effect dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                    <strong> {{trans('dashboard.Incoming_messages')}}</strong> <i
                                                        class="mdi mdi-mail ms-2"></i>
                                                </button>

                                            </div>
                                        </div>
                                        <ul class="message-list">


                                            @forelse($mails as $mail)
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">

                                                        </div>
                                                        <a href="{{route('admin.mail.mail_details',$mail->id)}}" class="title">{{ $mail->name}}</a><span
                                                            class="star-toggle far fa-trash-alt"
                                                            data-bs-toggle="modal" data-bs-target="#delete{{$mail->id}}"
                                                            title=" {{trans('dashboard.Delete')}}" style=" cursor: pointer"></span>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="{{route('admin.mail.mail_details',$mail->id)}}" class="subject"><span class="bg-info badge me-2">{{ $mail->subject}}</span>
                                                            <span
                                                                class="teaser">{!! \Illuminate\Support\Str::limit( $mail->message,170,'...') !!}</span>
                                                        </a>
                                                        <div class="date">{{ $mail->created_at->diffForHumans()}}</div>
                                                    </div>
                                                </li>

                                                <!-- Delete Mail Modal -->
                                                <div  class="modal fade" tabindex="-1" role="dialog"
                                                     id="delete{{$mail->id}}" aria-labelledby="myModalLabel"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="myModalLabel">{{trans('dashboard.Delete_Message')}} </h3>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{route('admin.mail.destroy')}}"
                                                                  method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-body">

                                                                    <input type="hidden" name="mail_id"
                                                                           value="{{$mail->id}}">

                                                                    <h4>{{trans('dashboard.are_sure_of_the_deleting_process')}}</h4>

                                                                    <h5><span class="text-danger">{{$mail->name}}</span>
                                                                    </h5>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light waves-effect"
                                                                            data-bs-dismiss="modal">{{trans('dashboard.Close')}}
                                                                    </button>
                                                                    <button type="submit"
                                                                            class="btn btn-danger waves-effect waves-light">
                                                                        {{trans('dashboard.Delete')}}
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse


                                        </ul>
                                        <div class="float-right pagination-rounded">


                                            {{$mails->links()}}

                                        </div>
                                    </div> <!-- card -->


                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
