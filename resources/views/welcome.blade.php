<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataFromApi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
   <body>
        <div class="container mt-5">
            <div class="row col-md-12 "> 
                  @foreach($categories as $category)
                      <div class="card col-md-3 px-2 mx-1 mb-2">
                          <img src="pic/well.JPG" class="card-img-top pt-1" alt="...">
                          <div class="card-body">
                          <h5 class="card-title"> <strong>category name:</strong> {{$category['name']}}</h5>
                          <p class="card-text"><strong> slug:</strong> {{$category['slug']}}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                         </div>
                    </div>
                 @endforeach
            </div>
      
        </div>


    </body>
</html>
