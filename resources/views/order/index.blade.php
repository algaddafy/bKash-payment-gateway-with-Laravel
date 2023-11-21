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
  
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Currency</th>
                    <th>Amount</th>
                    <th>Invoice</th>
                    <th>trxID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($orders as $order)
                        
                    <tr class="table-primary" >
                        <td scope="row">{{ $order->id }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->currency }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ $order->invoice }}</td>
                        <td>{{ $order->trxID }}</td>
                        <td>{{ $order->status }}</td>
                        <td><a href="{{ route('order.show',$order->id) }}" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    
                    @endforeach
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
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