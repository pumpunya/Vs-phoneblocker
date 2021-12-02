<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phoneblocker</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      
       
    </head>
    <body >
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">PHONEBLOCKER</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="register" class="nav-link">register</a>
                    </li>
 <!-- การสร้าง Slider -->
 <section id="slider">
         <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
             <ol class="carousel-indicators">
                 <button data-bs-target="#mySlider" data-bs-slide-to="0" class="active"></button>
                 <button data-bs-target="#mySlider" data-bs-slide-to="1"></button>
                 <button data-bs-target="#mySlider" data-bs-slide-to="2"></button>
             </ol>
             <div class="carousel-inner">
                 <div class="carousel-item carousel-image-1 active">
                     <div class="container">
                         <div class="carousel-caption d-none d-sm-block">
                             <h1 class="display-3">พระอาทิตย์ตกดิน</h1>
                             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni asperiores impedit iste velit. Tenetur nostrum voluptatum quod obcaecati quisquam animi?</p>
                         </div>
                     </div>
                 </div>
                 <div class="carousel-item carousel-image-2 ">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ดอกทานตะวัน</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni asperiores impedit iste velit. Tenetur nostrum voluptatum quod obcaecati quisquam animi?</p>
                        </div>
                    </div>
                 </div>
                 <div class="carousel-item carousel-image-3 ">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ทะเล</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni asperiores impedit iste velit. Tenetur nostrum voluptatum quod obcaecati quisquam animi?</p>
                        </div>
                    </div>
                 </div>
                 <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </button>
                 <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
             </div>
         </div>
    </section>
    
        </div>
    </body>
  <!--  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                </div>
            </div>
-->
</html>
