<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Users page 2</title>

    <style>
        * {box-sizing: border-box;}
        
        body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .header {
          overflow: hidden;
          background-color: #7fa9e9;
          padding: 10px 10px;
          text-align: center;
          color: white;
        }
     </style>   

</head>
<body>

<div class="header" >
    <h1>USERS PROFILES</h1>
</div>
<div class="container">
    <div class="row">
        @foreach ($collection as $item)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card border-primary mb-3">
                        <div class="card text-center">
                            <div class="card-body text-primary">
                                <img class="card-img-top" src="{{ $item['avatar'] }}" alt="Card image cap">
                                <p class="card-text">Name : {{ $item['first_name'] }}</p>
                                <p class="card-text">Email : {{ $item['email'] }}</p>
                            <div class="card-footer">
                                <a href="/details" class="btn btn-primary">View Details</a>
                            </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link" href="/">Previous</a></li>
      <li class="page-item"><a class="page-link" href="/">1</a></li>
      <li class="page-item"><a class="page-link" href="/users2">2</a></li>
      <li class="page-item"><a class="page-link" href="/users2">Next</a></li> 
    </ul>
  </nav>
   
</body>
</html>

