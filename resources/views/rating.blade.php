<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berikan Rating kepada Porter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <style>

    body{
        font-family: 'Montserrat', sans-serif;
    }
    
    .modal-title{
            text-align: center;
            position: relative;
            left: 100px;
    }

    .modal-body{
        padding: 5px;
    }

    .btn-primary{
        position: relative;
        bottom: -500px;
        right: -750px;
        width: 10%;
        padding: 5px;
        font-size: 18px;
        font-weight: 100px;
        letter-spacing: 1px;
        cursor: pointer;
        border-radius: 10px;
        margin-left: 30px;
    }

    .modal-content{
        position:relative;
        width: 800px;
        height: 300px;
        left: -150px;
        bottom: -50px;
    }

    .modal-footer{
        position: relative;
        top: -30px;
}

.star{
    position: relative;
    left: 250px;
    bottom: -10px;
}

  </style>
</head>

    </nav>

    <div class="modal fade" id="demoModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Berikan Rating kepada Porter!</h1>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="star">
                <body>
                <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font-size:60px;cursor:pointer;"  class="fa fa-star checked"></span>
                <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font-size:60px;cursor:pointer;" class="fa fa-star "></span>
                <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font-size:60px;cursor:pointer;" class="fa fa-star "></span>
                <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font-size:60px;cursor:pointer;" class="fa fa-star"></span>
                <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font-size:60px;cursor:pointer;" class="fa fa-star"></span>
                </div>

                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button  onclick="result()" type="button" style="margin-top:10px;margin-left:5px;" class="btn btn-lg btn-success text-center">Kembali</button>
                </div>
            </div>
        </div>
    </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal">Beri Rating</button>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script>
            var count;
            
            function starmark(item)
            {
            count=item.id[0];
            sessionStorage.starRating = count;
            var subid= item.id.substring(1);
            for(var i=0;i<5;i++)
            {
            if(i<count)
            {
            document.getElementById((i+1)+subid).style.color="orange";
            }
            else
            {
            document.getElementById((i+1)+subid).style.color="black";
            }
            
            
            }
            
            }
            </script>
</body>

</html>