@can('isAdmin')
<html lang="en" class="h-100">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>زيت</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
      <link href="/bootstrap.min.css" rel="stylesheet">
      <link href="css/cover.css" rel="stylesheet">
    </head>
    
    <body class="d-flex h-100 text-center text-white" style="background-color: #095f45">
     
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    
  
    <main class="px-3">
      <div style="height: 150px"></div>
      <h1> مرحبا بك فى موقعنا زيت </h1>
      <div style="height: 50px"></div>
      <p class="lead">
        
        <a href="/admin" class="btn btn-lg btn-secondary fw-bold border-white bg-white" style="color: #095f45">الانتقال الي قسم الادارة</a>
      </p>
    </main>
  
    
  </div>
    </body>
  </html>
  @elsecan('isUser')
  <html lang="en" class="h-100">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>زيت</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
      <link href="/bootstrap.min.css" rel="stylesheet">
      <link href="css/cover.css" rel="stylesheet">
    </head>
    
    <body class="d-flex h-100 text-center text-white" style="background-color: #095f45">
     
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    
  
    <main class="px-3">
      <div style="height: 150px"></div>
      <h1> مرحبا بك فى موقعنا زيت</h1>
      <div style="height: 20px"></div>

      <p class="lead">
        
        <a href="Asks/create" class="btn btn-lg btn-secondary fw-bold border-white bg-white " style="color: #095f45">الانتقال الي طلب مندوب  </a>
        <a href="{{ route('Asks.store') }}" class="btn btn-lg btn-secondary fw-bold border-white bg-white " style="color: #095f45"> للدخول لحسابك </a>

      </p>
    </main>
  
    
  </div>
    </body>
  </html>
  @endcan