<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/carrusel.css">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bgnav">
  <div class="container">
    <a class="navbar-brand" href="#">Cyber</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </div>
      <div class="navbar-nav ms-auto">
          <a class="nav-link" href="./html/login.html">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 448 512">
              <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
            </svg>
          </a>
        </div>
    </div>
  </div>
</nav>
  <div class="hero">
    <div class="carrusel">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/kratos4k.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="titulo">
        <h5>God Of War</h5>
        <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/brujo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="titulo">
        <h5>The Witcher 3</h5>
        <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/dias.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="titulo">
          <h5>Days Gone</h5>
        <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div>
  <section class="grid grid-cols-1 gap-6 p-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:p-6">
        <div class="relative overflow-hidden rounded-lg group">
                <span class="sr-only">Ver producto</span>
            <img src="./img/kratos4k.jpg" alt="Producto 1" class="object-cover w-full h-60">
            <div class="p-4 bg-background">
                <h3 class="text-lg font-semibold md:text-xl">God of War</h3>
                <p class="text-sm text-muted-foreground">Aventura Fantasía</p>
                <div class="flex items-center justify-between">
                    <h4 class="text-base font-semibold md:text-lg">$59.99</h4>
                    <button class="btn btn-sm add-to-cart">Agregar al carrito</button>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-lg group">
                <span class="sr-only">Ver producto</span>
            <img src="./img/cyberpunk4k.jpg" alt="Producto 2" class="object-cover w-full h-60">
            <div class="p-4 bg-background">
                <h3 class="text-lg font-semibold md:text-xl">Cyberpunk 2077</h3>
                <p class="text-sm text-muted-foreground">Futurista Acción</p>
                <div class="flex items-center justify-between">
                    <h4 class="text-base font-semibold md:text-lg">$49.99</h4>
                    <button class="btn btn-sm add-to-cart">Agregar al carrito</button>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-lg group">
                <span class="sr-only">Ver producto</span>
            <img src="./img/muerto.jpeg" alt="Producto 3" class="object-cover w-full h-60">
            <div class="p-4 bg-background">
                <h3 class="text-lg font-semibold md:text-xl">Death Stranding</h3>
                <p class="text-sm text-muted-foreground">Acción apocaliptico</p>
                <div class="flex items-center justify-between">
                    <h4 class="text-base font-semibold md:text-lg">$59.99</h4>
                    <button class="btn btn-sm add-to-cart">Agregar al carrito</button>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-lg group">
                <span class="sr-only">Ver producto</span>
            <img src="./img/brujo.jpg" alt="Producto 4" class="object-cover w-full h-60">
            <div class="p-4 bg-background">
                <h3 class="text-lg font-semibold md:text-xl">The Witcher 3</h3>
                <p class="text-sm text-muted-foreground">Aventura Fantasía</p>
                <div class="flex items-center justify-between">
                    <h4 class="text-base font-semibold md:text-lg">$59.99</h4>
                    <button class="btn btn-sm add-to-cart">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="cart fixed bottom-0 right-0 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-xl font-semibold mb-4">Carrito de Compras</h2>
    <ul id="cart-items" class="mb-4"></ul>
    <div class="flex justify-between items-center">
        <span class="text-lg font-semibold">Total: $<span id="cart-total">0.00</span></span>
        <button class="btn btn-primary">Comprar</button>
    </div>
</div>



  </div>
  
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
  </div>
  <footer>
            <div class="contact">
              <img src="/public/view/img/contacto/lorenzo-herrera-p0j-mE6mGo4-unsplash.jpg" alt="">
             <div class="form">
              <h1>Contacto</h1>
              
              <div class="inputBx">
                  <p>Nombre</p>
              <input type="tel" name="" placeholder="Nombre Completo" id="">
              </div>
          
              <div class="inputBx">
                  <p>Gmail</p>
                  <input type="tel" name="" placeholder="Gmail Completo" id="">
                </div>
          
                  <div class="inputBx">
                      <p>Mensaje</p>
                       <textarea name="" id="" cols="30" rows="10"></textarea>
                  </div>
          
                  <div class="inputBx">
                    <input type="submit" value="Enviar">
                  </div>
             
              </div> 
          </div>
          
          </footer>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="./js/carrito.js"></script>
</body>
</html>