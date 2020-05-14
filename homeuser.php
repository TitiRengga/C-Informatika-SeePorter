<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- MY CSS -->
    <style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');


.navbar-brand{
    font-family : 'Franklin Gothic Medium';
    font-size : 60px;
}

.jumbotron {
    margin-top: -200px;
}

.jarak{
  margin-left: 240px;
}

.jumbotron .display-4{
    text-align: center;
    margin-top: 200px;
    font-weight: 500;
    color: #179774;
    font-family: 'arial';
    font-size:30px;
}

.container{
    width: 90%;
    margin: auto;
    overflow: hidden;
    margin-top: 20px;
}

.container ul{
    padding: 0px;
    margin: 0px;
}


.container ul li{
    float:left;
    list-style: none;
    width:20%;
    height:100px;
    background: #179774;
    margin :20px 0px 20px 55px; 
    border:1px solid;
    box-sizing: border-box;
}
.container ul li:hover{
    opacity: 0.8;
}

.container ul li .bottom{
    width: 100%;
    height:50px;
    line-height: 30px;
    background: #179774;    
    text-align: center;
    color:white;
    font-size: 20px;
   
}

@media screen and (max-width:1250px){
    .container ul li{
        width:40%;
        margin-left: 40px;
         
    }

.tengah{
  display:flex;
  align-items:center;
  justify-content: center;
}

.Kotak{
  text-align: center;
  margin-left: 40px;
  margin-top: -300px;
  background-color : #179774;
  font-family : 'arial';
  width :400px;
  height: 200px;
  font-weight: 500;
}

.jumbotron .lead{
  text-align: center;
  font-weight: 500;
  color: #5c5c5c;
  font-family: 'arial';
}
.nav-link{
  text-transform: uppercase;
  text-align: center;
  margin-right: 20px;
  margin-top: -3px;
  border-radius: 10px;
  background-color : #179774;
  font-family : 'Franklin Gothic Medium';
  width :150px;
}

</style>

    <title>SeePorter</title>
  </head>
  <body>

      <?php include 'headeruser.php'; ?>   
    
      <div class="jumbotron jumbotron-fluid">
      <div class="container jarak">
        <h1 class="display-4">Rekomendasi Porter</h1>
      </div>
    
    <div class="container">
        <ul>
            <li> <div class="bottom"><b>Anton<br>42 Tahun<br>Pasar Peunayong<b></div> </li>
            <li> <div class="bottom"><b>Aceng<br>38 Tahun<br>Pasar Keutapang<b></div> </li>
            <li> <div class="bottom"><b>Rahmat<br>35 Tahun<br>Pasar Seutui<b></div> </li>
            <li> <div class="bottom"><b>Budi<br>37 Tahun<br>Pasar Rukoh<b></div> </li>
            <li> <div class="bottom"><b>Rudi<br>41 Tahun<br>Pasar Ulee Kareng<b></div> </li>
            <li> <div class="bottom"><b>Yandi<br>33 Tahun<br>Pasar Seutui<b></div> </li>
            <li> <div class="bottom"><b>Pandi<br>32 Tahun<br>Pasar Keutapang<b></div> </li>
            <li> <div class="bottom"><b>Mamat<br>30 Tahun<br>Pasar Rukoh<b></div> </li>
            
        </ul>
    </div>
       
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
