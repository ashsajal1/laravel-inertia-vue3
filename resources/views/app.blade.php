<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    <section class='h-screen'>
    @inertia
    </section>
  </body>
</html>