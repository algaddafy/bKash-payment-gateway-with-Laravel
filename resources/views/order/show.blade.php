<!doctype html>
<html lang="en">

<head>
  <title>Bkash Payment Gateway</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
    <div class="card" style="width: 200px; padding: 15px 15px; margin: 15px 15px; text-align: center;">
        <div class="card-body">
            <h4 class="card-title">{{ $order->product_name }}</h4>
            <p class="card-text amount">Amount: {{ $order->amount }}</p>
            <p class="card-text invoice">Invoice: {{ $order->invoice }}</p>
            <p class="card-text">Status: {{ $order->status }}</p>
            @if ($order->status == 'Pending')
            <button type="submit" id="bKash_button" class="btn btn-sm btn-danger">Pay with Bkash</button>
            @else
            <h4><span class="badge badge-success" style="background: #0b8303;">Paid</span></h4>
            @endif
            
        </div>
    </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>