<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Users</title>

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
        .center {
          margin: auto;
          width: 50%;
          padding: 10px;
        }
     </style>   

</head>
<body>
<div class="header" >
    <h1>USERS DETAILS</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="center">
                <div class="card">
                    <div class="card-body">
                        <div class="card border-primary mb-3">
                            <div class="card text-center">
                                <div class="card-body text-primary">
                                    <p class="card-text">User ID : {{ $posts['id'] }}</p>
                                    <img class="card-img-top" src="{{ $posts['avatar'] }}" alt="Card image cap">
                                    <p class="card-text">Name : {{ $posts['first_name'] }}</p>
                                    <p class="card-text">Last Name : {{ $posts['last_name'] }}</p>
                                    <p class="card-text">Email : {{ $posts['email'] }}</p>
                                    <div class="card-footer">
                                        <a href="/details" class="btn btn-primary">Edit Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
    