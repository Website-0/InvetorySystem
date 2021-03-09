

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            font-size: 14px;
            font-family: Helvetica, sans-serif;
        }

    </style>
</head>
  <body>
      <center>
        <h2>Equipment's List</h2>
        <p>The .table-borderless class removes borders from the table:</p>

      </center>
       <table class="table table-sm">
          <thead>
            <tr>
                <th scope="col" class="border-0">#</th>
                <th scope="col" class="border-0">Name</th>
                <th scope="col" class="border-0">Control Number</th>
                <th scope="col" class="border-0">Category</th>
                <th scope="col" class="border-0">Brand</th>
                <th scope="col" class="border-0">Model</th>
                <th scope="col" class="border-0">Location</th>
                <th scope="col" class="border-0">Purchase Price</th>
                <th scope="col" class="border-0">Year of Purchase</th>
                <th scope="col" class="border-0">Retire Date</th>
                <th scope="col" class="border-0">Remarks</th>
                <th scope="col" class="border-0">Accesories</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($equipments as $equipment)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$equipment->name}}</td>
                    <td>{{$equipment->controlnumber}}</td>
                    <td>{{$equipment->categoryname}}</td>
                    <td>{{$equipment->brand}}</td>
                    <td>{{$equipment->model}}</td>
                    <td>{{$equipment->location}}</td>
                    <td>{{$equipment->purchaseprice}}</td>
                    <td>{{$equipment->yearofpurchase->format('Y-m-d')}}</td>
                    <td>{{$equipment->retiredate}}</td>
                    <td>{{$equipment->remarks}}</td>
                    <td>{{$equipment->accesories}}</td>
                </tr>
              @endforeach
          </tbody>
        </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
