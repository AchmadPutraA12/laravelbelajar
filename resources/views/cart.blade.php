@extends('frontend.app')
@section('frontend')

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Cart</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <div style="margin-bottom:10rem">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Produk</th>
                    <th style="width:10%">Harga</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        @php $total += $details['harga'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs">
                                        @empty($details['foto'])
                                            <img src="{{ url('admin/img/nophoto.jpg') }}" width="100" height="100"
                                                class="img-responsive" />
                                        @else
                                            <img src="{{ asset('admin/img') }}/{{ $details['foto'] }}" width="100"
                                                height="100" class="img-responsive" />
                                        @endempty
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['nama_produk'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">Rp. {{ number_format($details['harga'], 0, ',', '.') }}</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}"
                                    class="form-control quantity update-cart" />
                            </td>
                            <td data-th="Subtotal" class="text-center">Rp.
                                {{ number_format($details['harga'] * $details['quantity'], 0, ',', '.') }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart"><i
                                        class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right">
                        <h3><strong>Total Rp. {{ number_format($total), 0, ',', '.' }}</strong></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <form action="{{ url('transaksi') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $total }}" name="total">
                            @foreach (session('cart') as $id => $details)
                                <input type="hidden" name="cart[{{ $id }}][harga]"
                                    value="{{ $details['harga'] }}">
                                <input type="hidden" name="cart[{{ $id }}][quantity]"
                                    value="{{ $details['quantity'] }}">
                                <!-- Add other necessary hidden inputs -->
                            @endforeach
                            <a href="{{ url('shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                                Shopping</a>
                            <button type="submit" class="btn btn-success" id="pay-button">Checkout</button>
                        </form>
                    </td>
                </tr>
                @endif
            </tfoot>
        </table>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(".update-cart").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
@endsection
