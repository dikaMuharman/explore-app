<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png" />

    <!--=============== CSS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/client/styles.css')}}" />

    <title>{{config('app.name')}}</title>
  </head>
  <body>
    <main class="main">
      <section class="section error">
        <div class="error__container">
          <h1 class="section__title error__title" data-text="404">404</h1>
          <p>It looks like you found a glitch in the matrix...</p>
          <a href="{{route('home')}}" class="error__link">
            <i class="ri-arrow-left-line error__icon"></i>
            Go to home
          </a>
        </div>
      </section>
    </main>
  </body>
</html>
