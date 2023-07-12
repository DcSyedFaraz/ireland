@extends('layouts.admin')
@section('content')


    @include('partials.backend.admin-breadcrum')


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-9">

                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"> {{ \Illuminate\Support\Str::limit(strip_tags($order->packageOrder->name), 35) }} </h3>
                            <span class="float-sm-right">
                                <strong>Status:</strong>

                                @switch($order->status_id)
                                    @case(1)
                                        <span class="badge {{$order->status->css_class}}">{{$order->status->name}}</span>
                                        @break
                                    @case(2)
                                        <span class="badge {{$order->status->css_class}}">{{$order->status->name}}</span>
                                        @break
                                    @case(3)
                                        <span class="badge {{$order->status->css_class}}">{{$order->status->name}}</span>
                                        @break
                                    @default
                                        <span class="badge badge-default"> Default </span>
                                @endswitch

                            </span>
                        </div>
                        <div class="card-body">

                            <dl class="row text-muted mb-0">
                                <dt class="col-sm-3 text-right mb-0">Package:</dt>
                                <dd class="col-sm-9 mb-0">{{$order->packageOrder->name}}</dd>
                                <dt class="col-sm-3 text-right mb-0">Deadline:</dt>
                                <dd class="col-sm-9 mb-0">{{$order->deadline}}</dd>
                                <dt class="col-sm-3 text-right mb-0">Career Level:</dt>
                                <dd class="col-sm-9 mb-0">{{$order->academic_level ?? ''}}</dd>
                                <dt class="col-sm-3 text-right mb-0">Date:</dt>
                                <dd class="col-sm-9 mb-0">{{ showDate($order->created_at) }}</dd>
                            </dl>

                            <hr>

                            <dl class="row text-muted mb-0">
                                <dt class="col-sm-3 text-right mb-0">Details:</dt>
                                <dd class="col-sm-9 mb-0">{!! $order->detail !!}</dd>
                            </dl>

                        </div>
                    </div>

                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Invoices</h3>
                        </div>
                        <div class="card-body table-responsive p-0">

                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Reference No.</th>
                                        <th>Gateway</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="{{route('customer.invoices.show', $order->invoice->ref_no)}}">
                                                <strong>{{ \Illuminate\Support\Str::limit(strip_tags($order->invoice->ref_no), 15) }}</strong>
                                            </a>
                                        </td>
                                        <td>{{ $order->invoice->gateway }}</td>
                                        <td>{{ addCurrency($order->invoice->amount) }}</td>
                                        <td>{{ $order->invoice->currency ?? '--' }}</td>
                                        <td>{{ showDate($order->invoice->created_at) }}</td>
                                        <td>

                                            @if ($order->invoice->status_id == 4)
                                                <a href="{{route('invoice', ['reference' => $order->invoice->ref_no, 'gatway' => 'stripe', 'source'=>'cheap-cv-writer'] )}}"
                                                    class="btn btn-primary btn-sm" target="_blank">
                                                    Pay with Debit / Credit Card
                                                </a>
                                            @else
                                                @switch($order->invoice->status_id)
                                                    @case(4)
                                                        <span class="badge {{$order->invoice->status->css_class}}">{{$order->invoice->status->name}}</span>
                                                        @break
                                                    @case(5)
                                                        <span class="badge {{$order->invoice->status->css_class}}">{{$order->invoice->status->name}}</span>
                                                        @break
                                                    @default
                                                        <span class="badge badge-default"> Default </span>
                                                @endswitch
                                            @endif

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Profile</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <strong>
                                        <a href="{{route('customer.profile.index')}}">
                                            Edit Profile
                                        </a>
                                    </strong>
                                </li>
                                <li>{{ auth()->user()->name }}</li>
                                <li>{{ auth()->user()->email }}</li>
                                {{-- <li>{{ auth()->user()->phone ?? '-' }}</li> --}}
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Attachments</h3>
                        </div>
                        <div class="card-body">
                            <div style="margin-left: 10px">
                                <div><strong>files</strong>
                                    <br>
                                @if ($files)

                                    @foreach ( $files as $file )
                                    <a href="{{ asset('storage/'.$file->file_path) }}"  target="_blank">{{ trim($file->file_path,'uploads/') }}</a>
                                    <br>

                                    @endforeach

                                @else
                                    <p>No files Attached</p>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- /.content -->
@endsection
