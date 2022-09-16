@extends('layouts.admin')

@section('title')
    {{trans('dashboard.Packages')}}
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
                                <li class="breadcrumb-item active">{{trans('dashboard.Packages')}}</li>
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
                                    <h5 class="card-title pb-0 border-0"> {{trans('dashboard.Packages')}}</h5>
                                </div>

                                <div class="d-block d-md-flex justify-content-between">
                                    <div class="d-block">
                                        <a href="{{route('admin.packages.create')}}" class="btn btn-secondary waves-effect waves-light btn-rounded"


                                        > {{trans('dashboard.Add_New_Package')}}  <i class="fa fa-plus"></i>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{trans('dashboard.Package_title')}}</th>
                                        <th>{{trans('dashboard.Price')}}</th>
                                        <th>{{trans('dashboard.Time_period')}}</th>
                                        <th>{{trans('dashboard.Features')}}</th>
                                        <th>{{trans('dashboard.Actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($packages as $package)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td><strong>{{$package->title}}</strong><br>
                                                <small>{{$package->created_at->format('Y-m-d h:i a') }}</small>
                                            </td>
                                            <td>{{$package->price }} $</td>
                                            <td>{{$package->time_period }}</td>
                                            <td>  {!! \Illuminate\Support\Str::limit($package->features ?? '',30,'...')  !!}  </td>

                                            <td>
                                                <div class="btn-list btn-list-icon">


                                                    <a href="{{route('admin.packages.edit',$package->id)}}"
                                                            class="btn btn-info waves-effect waves-light btn-rounded"

                                                            title="{{trans('dashboard.Edit')}}">
                                                        <i class="ri-edit-2-fill align-middle me-2"></i>{{trans('dashboard.Edit')}}
                                                    </a>
                                                    <button type="button"
                                                            class="btn btn-danger waves-effect waves-light btn-rounded"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete{{$package->id}}" title="{{trans('dashboard.Delete')}}">
                                                        <i class="ri-delete-bin-2-line align-middle me-2"></i>{{trans('dashboard.Delete')}}
                                                    </button>

                                                </div>
                                            </td>
                                        </tr>






                                        <!-- Delete Mail Modal -->
                                        <div  class="modal fade" tabindex="-1" role="dialog"
                                              id="delete{{$package->id}}" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel">{{trans('dashboard.Delete')}} </h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('admin.packages.destroy')}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="package_id" value="{{$package->id}}">

                                                            <h4>{{trans('dashboard.are_sure_of_the_deleting_process')}} </h4>

                                                            <h5><span class="text-danger">{{$package->title}}</span></h5>
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
                                            <td colspan="6" class="text-center">{{trans('dashboard.No_packages_found')}}</td>
                                        </tr>
                                    @endforelse


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="6">
                                            <div class="float-right pagination-rounded">


                                                {{$packages->links()}}

                                            </div>

                                        </td>
                                    </tr>

                                    </tfoot>
                                </table>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>








@endsection
