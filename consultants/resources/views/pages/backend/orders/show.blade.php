@extends('layouts.admin')

@section('title')
    {{trans('dashboard.Order_Details')}}
@endsection

@section('content')







    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{trans('dashboard.Order_Details')}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">{{trans('dashboard.Order_Details')}}</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('dashboard.Home')}}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            @include('partials.alert.alert')


            <div class="card  mb-4">

                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{trans('dashboard.Order')}} ({{ $order->ref_id }})</h6>
                    <div class="ml-auto">
                        <form action="{{ route('admin.orders.update') }}" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{$order->id}}">
                            <div class="form-row align-items-center">
                                <label class="sr-only" for="inlineFormInputGroupUsername">{{trans('dashboard.User')}}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">{{trans('dashboard.Status')}}</div>
                                    </div>
                                    <select class="form-control" name="order_status" style="outline-style: none;" onchange="this.form.submit()">
                                        <option value=""> {{trans('dashboard.Choose_Status')}}... </option>
                                        @foreach($order_status_array as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-8">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>{{trans('dashboard.Ref_id')}}</th>
                                    <td>{{ $order->ref_id }}</td>
                                    <th>{{trans('dashboard.User')}}</th>
                                    <td><a href="">{{ $order->user->name }}</a></td>
                                </tr>

                                <tr>
                                    <th>{{trans('dashboard.Date')}}</th>
                                    <td>{{ $order->created_at->format('d-m-Y h:i a') }}</td>
                                    <th>{{trans('dashboard.Order_Status')}}</th>
                                    <td>{!! $order->statusWithLabel() !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>{{trans('dashboard.Subtotal')}}</th>
                                    <td>{{ $order->currency . $order->subtotal }}</td>
                                </tr>
                                <tr>
                                    <th>{{trans('dashboard.Discount_code')}}</th>
                                    <td>{{ $order->discount_code }}</td>
                                </tr>
                                <tr>
                                    <th>{{trans('dashboard.Discount')}}</th>
                                    <td>{{ $order->currency . $order->discount }}</td>
                                </tr>

                                <tr>
                                    <th>{{trans('dashboard.Tax')}}</th>
                                    <td>{{ $order->currency . $order->tax }}</td>
                                </tr>
                                <tr>
                                    <th>{{trans('dashboard.Amount')}}</th>
                                    <td>{{ $order->currency . $order->total }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card  mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{trans('dashboard.Transactions')}}</h6>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>{{trans('dashboard.Transaction')}}</th>
                            <th>{{trans('dashboard.Transaction_Number')}}</th>
                            <th>{{trans('dashboard.Transaction_Result')}}</th>
                            <th>{{trans('dashboard.Transaction_Date')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($order->transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->status($transaction->transaction) }}</td>
                                <td>{{ $transaction->transaction_number }}</td>
                                <td>{{ $transaction->payment_result }}</td>
                                <td>{{ $transaction->created_at->format('Y-m-d h:i a') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No transactions found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card  mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{trans('dashboard.Order_Details')}}</h6>
                </div>

                <div class="table-responsive d-flex">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>{{trans('dashboard.Packages')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($order->packages as $package)
                            <tr>
                                <td><a href="{{route('admin.orders.package-order-details',$package->id)}}">{{ $package->title }}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="1">{{trans('dashboard.No_packages_found')}}</td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>{{trans('dashboard.Domains')}}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($domain as $order)
                            @if($order->domain != '')
                                <tr>
                                    <td><a href="#">{{ $order->domain  }}</a><br><small>{{ $order->dns  }}</small></td>
                                </tr>
                            @endif

                        @empty
                            <tr>
                                <td colspan="1">{{trans('dashboard.No_packages_found')}}</td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>الألوان</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($domain as $order)
                            @if($order->domain != '')
                                <tr>
                                    <td><a href="#">{{ $order->color_one  }}</a><br><small>{{ $order->color_tow  }}</small><br><small>{{ $order->color_three  }}</small></td>
                                </tr>
                            @endif

                        @empty
                            <tr>
                                <td colspan="1">{{trans('dashboard.No_packages_found')}}</td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>الشعار</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($domain as $order)
                            @if($order->domain != '')
                                <tr>
                                    <td>
                                        @if($order->logo == "yes")
                                            <img
                                                src="{{asset('assets/images/packages/'.$order->logo_file)}}"
                                                width="60" height="60" alt="">
                                        @else
                                            <span>no logo</span>
                                        @endif
                                    </td>
                                </tr>
                            @endif

                        @empty
                            <tr>
                                <td colspan="1">{{trans('dashboard.No_packages_found')}}</td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>الضريبة</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($domain as $order)
                            @if($order->domain != '')
                                <tr>

                                    <td><a href="#">{{ $order->tax  }}</a></td>


                                </tr>
                            @endif

                        @empty
                            <tr>
                                <td colspan="1">{{trans('dashboard.No_packages_found')}}</td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>








@endsection
