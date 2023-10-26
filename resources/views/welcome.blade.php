<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataFromApi</title>
    <style>
        .show{
            display: -webkit-box;
            -webkit-line-clamp:3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .name{
            height: 30%;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
   
</head>
   <body>
    

       <div class="container mt-5">

        <div class="mb-3 px-5 mt-5" >
            <div class="input-group ">
                <div class="input-group-prepend">
                <input type="search" class="form-control" id="search_product" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  <span class="input-group-text" id="basic-addon1">search</span>
                </div>
                
              </div>
         </div>

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
        {{-- <div class="container mt-5">
           <div class="row col-lg-12 col-md-12 "> 
                @foreach($products as $product)
                    <div class="card col-md-3 px-2 mx-1 mb-2 ">
                        <img src="{{$product['image']}}" class="card-img-top py-3 px-3" alt="..." height="300px" width="200px">
                        <div class="card-body">
                            <div class="name">
                                <p><strong> Title:</strong> {{$product['title']}}</p>
                            </div>
                            <div class="" >
                                <p class="card-text"><strong> category name:</strong> {{$product['category']}}</p>
                                <p class="card-text"><strong> price:</strong> {{$product['price']}}</p>
                                <p class= "show"><strong> description:</strong> {{$product['description']}}</p>
                                <p class="text-center"><a href="#" class="btn btn-primary ">Go somewhere</a> </p>
                            </div>
                        </div>
                    </div>  
                 @endforeach
            </div> --}}
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
  
    var availableTags = [
    
    ];
    $.ajax({
        method:"GET",
        url:"{{url('/category-name')}}",
        success: function (response){
            // console.log(response);
            startAutocomplete(response);
        }
    });
    function startAutocomplete(availableTags)
    {
     $( "#search_product" ).autocomplete({
      source: availableTags
    });
    }
   

  </script>
       

    </body>
</html>
