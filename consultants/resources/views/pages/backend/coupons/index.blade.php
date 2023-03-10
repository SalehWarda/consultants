@extends('layouts.admin')

@section('title')
    {{trans('dashboard.Coupons')}}
@endsection

@push('style')
    @section('style')
        <link rel="stylesheet" href="{{asset('assets/admin/vendor/datepick/themes/classic.css')}}">
        <link rel="stylesheet" href="{{asset('assets/admin/vendor/datepick/themes/classic.date.css')}}">

        <style>
            .picker__select--month, .picker__select--year {

                padding: 0 !important;
            }
        </style>
    @endsection
@endpush
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{trans('dashboard.Coupons')}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">{{trans('dashboard.Coupons')}}</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('dashboard.Home')}}</a></li>
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
                                    <h5 class="card-title pb-0 border-0"> {{trans('dashboard.Coupons')}}</h5>
                                </div>

                                <div class="d-block d-md-flex justify-content-between">
                                    <div class="d-block">
                                        <a class="btn btn-secondary waves-effect waves-light btn-rounded"

                                           data-bs-toggle="modal" data-bs-target="#add"
                                        > {{trans('dashboard.Add_New_Coupon')}}  <i class="fa fa-plus"></i>
                                        </a>

                                    </div>

                                </div>
                            </div>


                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{trans('dashboard.Code')}}</th>
                                        <th>{{trans('dashboard.Value')}}</th>
                                        <th>{{trans('dashboard.Description')}}</th>
                                        <th>{{trans('dashboard.Used_time')}}</th>
                                        <th>{{trans('dashboard.Expiration_date')}}</th>
                                        <th>{{trans('dashboard.Status')}}</th>
                                        <th>{{trans('dashboard.Actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($coupons as $coupon)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td><strong>{{$coupon->code}}</strong><br>
                                                <small>{{$coupon->created_at->format('Y-m-d h:i a') }}</small>
                                            </td>
                                            <td>{{$coupon->value }} {{ $coupon->type == 'fixed'? '$' : '%' }}</td>
                                            <td>  {!! \Illuminate\Support\Str::limit($coupon->description ?? '',30,'...')  !!}  </td>
                                            <td>{{$coupon->used_times. '/' . $coupon->use_times  }}</td>
                                            <td>
                                                <small>{{$coupon->start_date != '' ? $coupon->start_date->format('Y-m-d'). ' - ' . $coupon->expire_date->format('Y-m-d') : '-' }}</small>
                                            </td>
                                            <td>
                                                @if($coupon->status == 1)
                                                    <span class="badge rounded-pill bg-success">{{$coupon->status() }}</span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger">{{$coupon->status() }}</span>

                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-list btn-list-icon">


                                                    <button type="button"
                                                            class="btn btn-info waves-effect waves-light btn-rounded"
                                                            data-bs-toggle="modal" data-bs-target="#edit{{$coupon->id}}"
                                                            title="{{trans('dashboard.Edit')}}">
                                                        <i class="ri-edit-2-fill align-middle me-2"></i>{{trans('dashboard.Edit')}}
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-danger waves-effect waves-light btn-rounded"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete{{$coupon->id}}" title="{{trans('dashboard.Delete')}}">
                                                        <i class="ri-delete-bin-2-line align-middle me-2"></i>{{trans('dashboard.Delete')}}
                                                    </button>

                                                </div>
                                            </td>
                                        </tr>



                                        <!--  Edit Coupon Modal -->
                                        <div class="modal fade" tabindex="-1" role="dialog" id="edit{{$coupon->id}}"
                                             aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myExtraLargeModalLabel">{{trans('dashboard.Edit')}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{route('admin.coupons.update')}}" method="post">
                                                            @csrf
                                                            @method('PUT')

                                                            <input type="hidden" name="coupon_id"
                                                                   value="{{$coupon->id}}">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label for="code" class=" col-form-label">{{trans('dashboard.Code')}}
                                                                        :</label>
                                                                    <input type="text" name="code" id="codeUpdate"
                                                                           class="form-control"
                                                                           value="{{old('code',$coupon->code)}}">

                                                                    @error('code')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-3">

                                                                    <label for="type" class=" col-form-label">{{trans('dashboard.Type')}}
                                                                        : </label>

                                                                    <select class="form-control" name="type">
                                                                        <option selected > {{trans('dashboard.Choose')}}...</option>


                                                                        <option
                                                                            value="fixed" {{old('type',$coupon->type) == 'fixed' ?'selected' : null}}>
                                                                            {{trans('dashboard.Fixed')}}
                                                                        </option>
                                                                        <option
                                                                            value="percentage" {{old('type',$coupon->type) == 'percentage' ?'selected' : null}}>
                                                                            {{trans('dashboard.Percentage')}}
                                                                        </option>


                                                                    </select>
                                                                    @error('type')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror

                                                                </div>

                                                                <div class="col-md-3">
                                                                    <label for="value" class=" col-form-label">{{trans('dashboard.Value')}}
                                                                        :</label>
                                                                    <input type="number" name="value"
                                                                           class="form-control"
                                                                           value="{{old('value',$coupon->value)}}">

                                                                    @error('value')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-3">
                                                                    <div class=" col-form-label">
                                                                        <label for="use_times">{{trans('dashboard.Used_time')}} :</label>
                                                                        <input type="number" name="use_times"
                                                                               value="{{ old('use_times',$coupon->use_times) }}"
                                                                               class="form-control">
                                                                        @error('use_times')<span
                                                                            class="text-danger">{{ $message }}</span>@enderror
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label> {{trans('dashboard.Start_date')}} :</label>

                                                                        <input type="text" name="start_date"
                                                                               id="start_dateUpdate"
                                                                               class="form-control"
                                                                               value="{{old('start_date',$coupon->start_date->format('Y-m-d'))}}">

                                                                        @error('start_date')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label> {{trans('dashboard.Expired_date')}} :</label>

                                                                        <input type="text" name="expire_date"
                                                                               id="expire_dateUpdate"
                                                                               class="form-control"
                                                                               value="{{old('expire_date',$coupon->expire_date->format('Y-m-d'))}}">

                                                                        @error('expire_date')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="status">{{trans('dashboard.Status')}} :</label>
                                                                        <br>
                                                                        <select class="form-control"
                                                                                name="status">

                                                                            <option selected > {{trans('dashboard.Choose')}}...</option>
                                                                            <option
                                                                                value="1" {{old('status',$coupon->status) == '1' ? 'selected' : null}}>
                                                                                {{trans('dashboard.Active')}}
                                                                            </option>
                                                                            <option
                                                                                value="0" {{old('status',$coupon->status) == '0' ? 'selected' : null}}>
                                                                                {{trans('dashboard.InActive')}}
                                                                            </option>

                                                                        </select>
                                                                        @error('status')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <br>
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label> {{trans('dashboard.Description')}} :</label>

                                                                        <textarea name="description" rows="3"
                                                                                  id="description"
                                                                                  class="form-control">

                                                                     {{old('description',$coupon->description)}}
                                                          </textarea>

                                                                        @error('description')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn ripple btn-secondary m-lg-2"
                                                                        type="submit"
                                                                >{{trans('dashboard.Save_Changes')}}<i
                                                                        class="fe fe-plus"></i></button>
                                                                <button class="btn ripple btn-danger"
                                                                        data-bs-dismiss="modal" type="button">
                                                                    {{trans('dashboard.Close')}}
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                        <!-- Delete Mail Modal -->
                                        <div  class="modal fade" tabindex="-1" role="dialog"
                                              id="delete{{$coupon->id}}" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel">{{trans('dashboard.Coupon_Delete')}} </h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('admin.coupons.destroy')}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="coupon_id" value="{{$coupon->id}}">

                                                            <h4>{{trans('dashboard.are_sure_of_the_deleting_process')}} </h4>

                                                            <h5><span class="text-danger">{{$coupon->code}}</span></h5>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect"
                                                                        data-bs-dismiss="modal">{{trans('dashboard.Close')}}
                                                                </button>
                                                                <button type="submit"
                                                                        class="btn btn-danger waves-effect waves-light">{{trans('dashboard.Delete')}}
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    @empty

                                        <tr>
                                            <td colspan="8" class="text-center">{{trans('dashboard.No_coupons_found')}}</td>
                                        </tr>
                                    @endforelse


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="8">
                                            <div class="float-right pagination-rounded">


                                                {{$coupons->links()}}

                                            </div>

                                        </td>
                                    </tr>

                                    </tfoot>
                                </table>
                            </div>

                            <!--  Add Coupon Modal -->
                            <div class="modal fade" tabindex="-1" role="dialog" id="add"
                                 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myExtraLargeModalLabel">{{trans('dashboard.Add_New_Coupon')}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{route('admin.coupons.store')}}" method="post">
                                                @csrf
                                                @method('POST')
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="code" class=" col-form-label">{{trans('dashboard.Code')}} :</label>
                                                        <input type="text" name="code" id="codeCreate" class="form-control"
                                                               value="{{old('code')}}">

                                                        @error('code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-3">

                                                        <label for="type" class=" col-form-label">{{trans('dashboard.Type')}} : </label>

                                                        <select class="form-control" name="type">
                                                            <option selected > {{trans('dashboard.Choose')}}...</option>


                                                            <option
                                                                value="fixed" {{old('type') == 'fixed' ?'selected' : null}}>
                                                                {{trans('dashboard.Fixed')}}
                                                            </option>
                                                            <option
                                                                value="percentage" {{old('type') == 'percentage' ?'selected' : null}}>
                                                                {{trans('dashboard.Percentage')}}
                                                            </option>


                                                        </select>
                                                        @error('type')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="value" class=" col-form-label">{{trans('dashboard.Value')}} :</label>
                                                        <input type="number" name="value" class="form-control"
                                                               value="{{old('value')}}">

                                                        @error('value')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-3">
                                                        <div class=" col-form-label">
                                                            <label for="use_times">{{trans('dashboard.Used_time')}} :</label>
                                                            <input type="number" name="use_times"
                                                                   value="{{ old('use_times') }}" class="form-control">
                                                            @error('use_times')<span
                                                                class="text-danger">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label> {{trans('dashboard.Start_date')}} :</label>

                                                            <input type="text" name="start_date" id="start_date"
                                                                   class="form-control"
                                                                   value="{{old('start_date')}}">

                                                            @error('start_date')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label> {{trans('dashboard.Expired_date')}} :</label>

                                                            <input type="text" name="expire_date" id="expire_date"
                                                                   class="form-control"
                                                                   value="{{old('expire_date')}}">

                                                            @error('expire_date')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="status">{{trans('dashboard.Status')}} :</label>
                                                            <br>
                                                            <select class="form-control"
                                                                    name="status">

                                                                <option selected > {{trans('dashboard.Choose')}}...</option>
                                                                <option
                                                                    value="1" {{old('status') == '1' ? 'selected' : null}}>
                                                                    {{trans('dashboard.Active')}}
                                                                </option>
                                                                <option
                                                                    value="0" {{old('status') == '0' ? 'selected' : null}}>
                                                                    {{trans('dashboard.InActive')}}
                                                                </option>

                                                            </select>
                                                            @error('status')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label> {{trans('dashboard.Description')}} :</label>

                                                            <textarea name="description" rows="3" id="description"
                                                                      class="form-control">

                                                                     {{old('description')}}
                                                          </textarea>

                                                            @error('description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn ripple btn-secondary m-lg-2" type="submit"
                                                    > {{trans('dashboard.Save')}}<i
                                                            class="fe fe-plus"></i></button>
                                                    <button class="btn ripple btn-danger" data-bs-dismiss="modal"
                                                            type="button">
                                                        {{trans('dashboard.Close')}}
                                                    </button>
                                                </div>
                                            </form>

                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

    <script src="{{asset('assets/admin/vendor/datepick/picker.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/datepick/picker.date.js')}}"></script>

    <script>
        $(function () {

            $('#codeCreate').keyup(function () {

                this.value = this.value.toUpperCase();

            });

            $('#codeUpdate').keyup(function () {

                this.value = this.value.toUpperCase();

            });

            $('#start_date').pickadate({

                format: 'yyyy-mm-dd ',
                selectMonths: true,
                selectYears: true,
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: true,
            });
            var startdate = $('#start_date').pickadate('picker');
            var enddate = $('#expire_date').pickadate('picker');

            $('#start_date').change(function () {


                selected_ci_date = "";
                selected_ci_date = $('#start_date').val();
                if (selected_ci_date != null) {

                    var cidate = new Date(selected_ci_date);
                    min_codate = "";
                    min_codate = new Data();
                    min_codate.setData(cidate.getDate() + 1);
                    enddate.set('min', min_codate);
                }

            });


            $('#expire_date').pickadate({

                format: 'yyyy-mm-dd',
                min: new Date(),
                selectMonths: true,
                selectYears: true,
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: true,
            });



            $('#start_dateUpdate').pickadate({

                format: 'yyyy-mm-dd',
                selectMonths: true,
                selectYears: true,
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: true,
            });
            var startdate = $('#start_dateUpdate').pickadate('picker');
            var enddate = $('#start_dateUpdate').pickadate('picker');

            $('#start_dateUpdate').change(function () {


                selected_ci_date = "";
                selected_ci_date = $('#start_dateUpdate').val();
                if (selected_ci_date != null) {

                    var cidate = new Date(selected_ci_date);
                    min_codate = "";
                    min_codate = new Data();
                    min_codate.setData(cidate.getDate() + 1);
                    enddate.set('min', min_codate);
                }

            });


            $('#expire_dateUpdate').pickadate({

                format: 'yyyy-mm-dd',
                min: new Date(),
                selectMonths: true,
                selectYears: true,
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: true,
            });


        });


    </script>

@endsection

