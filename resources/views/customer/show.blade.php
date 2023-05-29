<x-app-layout>
    @section('breadcrumb')
        {{ Breadcrumbs::render('customer.show', $customer) }}
    @endsection

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">

                            <h3 class="profile-username text-center">{{ $customer->name }}</h3>
                            <h5 class="text-muted text-center">{{ $customer->card }}</h5>
                            <h4 class="text-center">Reward Point : <span
                                    class="text-success">{{ $customer->purchases->sum('reward') }}</span></h4>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Phone</b> <a class="float-right">{{ $customer->phone }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Vehicle Number</b> <a class="float-right">{{ $customer->vehicle_number }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Paymnt Method</b> <a class="float-right">{{ $customer->payment_type }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Payment Detail</b> <a class="float-right">{{ $customer->payment_detail }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Address</b> <a class="float-right">{{ $customer->address }},
                                        {{ $customer->city }}, {{ $customer->state }}</a>
                                </li>
                            </ul>

                            <a href="{{ route('customer.edit', $customer) }}" class="btn btn-info">Edit</a>
                            <a href="" class="btn btn-success">Create Payment</a>
                            <a href="{{ route('purchase.create', ['customer' =>$customer]) }}" class="btn btn-primary">Add Purchase</a>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#purchase"
                                        data-toggle="tab">Purchase</a></li>
                                <li class="nav-item"><a class="nav-link" href="#payment" data-toggle="tab">Payment
                                        History</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!--Begin::activity panel-->
                                <div class="active tab-pane table-responsive" id="purchase">
                                    <table class="table table-sm">

                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Trean. ID</th>
                                                <th>Product</th>
                                                <th>Volume</th>
                                                <th>Sale AMT</th>
                                                <th>Reward</th>
                                                <th>Is Redeem</th>
                                                <th style="width: 40px">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if (count($purchase_history) > 0)
                                                @foreach ($purchase_history as $key => $purchase)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        {{-- <td>{{ $purchase->id }}</td> --}}
                                                        <td>{{ $purchase->trans_id }}</td>
                                                        <td>{{ $purchase->product }}</td>
                                                        <td>{{ $purchase->volume }}</td>
                                                        <td>{{ $purchase->amt }}</td>
                                                        <td><span
                                                                class="badge bg-info px-3 py-2">{{ $purchase->reward }}</span>
                                                        </td>
                                                        <td>{!! $purchase->isredeem
                                                            ? '<span class="badge bg-danger px-3 py-2">redeem</span> '
                                                            : '<span class="badge bg-success px-3 py-2">Valid</span>' !!}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                {{-- <a href="{{ route('purchase.show', $purchase) }}" class="btn btn-warning" title="View"><i class="fas fa-eye"></i></a> --}}
                                                                <a href="{{ route('purchase.edit', $purchase) }}"
                                                                    class="btn btn-info" title="Edit"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <button type="button"
                                                                    data-attr="{{ route('purchase.delete', $purchase) }}"
                                                                    class="btn btn-danger d3l3t3btn" title="Delete"><i
                                                                        class="fas fa-trash-alt"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="8">No Purchase History..</td>
                                                </tr>

                                            @endif


                                        </tbody>

                                    </table>
                                </div>
                                <!--end::activity panel-->
                                <!--Begin::purchase panel-->
                                <div class="active tab-pane" id="payment">
                                </div>
                                <!--end::purchase panel-->

                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

</x-app-layout>
