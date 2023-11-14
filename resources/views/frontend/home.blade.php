 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobFinder</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
   <link rel="icon" type="image/png" sizes="16x16" href="/images/logo-i.png">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@600&family=Rubik+Mono+One&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="css/frontend.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
 <body>
   <div class="background">
      <div class="overlay container-fluid h-100">
         <nav class="navbar">
            <div class="brand">JobFinder <img src="images/logo-i.png" width="24px" alt="Logo"></div>
            <div class="nav-link">
               <ul>
                  <li><a href="#">ABOUT US</a></li>
                  <li><a href="/lowongan-explore">LOWONGAN</a></li>
                  <li><a href="/perusahaan">PERUSAHAAN</a></li>
                  <li><a href="#">CONTACT</a></li>
               </ul>
            </div>
          </nav>
          <div class="container container-fluid">
            <h1>Job<br>Finder</h1>
            <p>Vivamus ullamcorper metus eu mauris tristique commodo.
               Nam finibus est nec ipsum semper, a pretium nisl rutrum.
               Etiam auctor condimentum facilisis. Pellentesque tellus sapien,
               molestie at sapien vel, congue elementum ligula. Nam sed bibendum
               felis, in luctus nulla. Aenean vel sagittis velit.</p>
            <form action="" class="button-group">
               <ul>
                  <li class="btn-1"><a href="{{ route('login') }}">PELAMAR</a></li>
                  <li class="btn-2"><a href="/login-perusahaan">PERUSAHAAN</a></li>
               </ul>
            </form>
          </div>
      </div>
   </div>
 </body>
 </html>