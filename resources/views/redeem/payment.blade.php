<x-app-layout>
    @section('breadcrumb')
        {{ Breadcrumbs::render('redeem.payment', $redeem) }}
    @endsection

    <div class="card">
        <div class="card-header">
            <h3>Create Payment</h3>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>Card</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Vehicle Number</th>
                                <th>City</th>
                                <th>State</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $customer->card }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->vehicle_number }}</td>
                                <td>{{ $customer->city }}</td>
                                <td>{{ $customer->state }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>



            <form action="{{ route('redeem.payment.store', $redeem) }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Amount</label>
                            <input type="text" name="amt" class="form-control" placeholder="Amount" value="{{ old('amt',$redeem->amt) }}" disabled>
                            @error('amt')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Pay Amt</label>
                            <input type="text" name="pay_amt" class="form-control" placeholder="Pay amount"
                                value="{{ old('pay_amt') }}">
                            @error('pay_amt')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Trans. ID</label>
                            <input type="text" name="trans_id" class="form-control" placeholder="Enter trans. id"
                                value="{{ old('trans_id') }}">
                            @error('trans_id')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="payment_method" class="form-label">Payment Method</label>
                            <select class="form-control" name="payment_method">
                                <option value="">-- select --</option>
                                <option value="Cash" {{ old('payment_method') == 'Cash' ? 'selected' : '' }}>Cash
                                </option>
                                <option value="Google Pay"
                                    {{ old('payment_method') == 'Google Pay' ? 'selected' : '' }}>Google pay</option>
                                <option value="Phone Pay" {{ old('payment_method') == 'Phone Pay' ? 'selected' : '' }}>
                                    Phone Pay</option>
                                <option value="UPI" {{ old('payment_method') == 'UPI' ? 'selected' : '' }}>UPI
                                </option>
                                <option value="AC" {{ old('payment_method') == 'AC' ? 'selected' : '' }}>AC
                                </option>
                            </select>
                            @error('payment_method')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="payment_detail" class="form-label">Payment Detail</label>
                            <input type="text" class="form-control" name="payment_detail"
                                placeholder="Enter payment detail" value="{{ old('payment_detail') }}">
                            @error('payment_detail')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-block btn-primary">Save</button>
                    </div>
                    <div class="col-md-3">
                        <input type="reset" class="btn btn-block btn-secondary" value="Reset" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
