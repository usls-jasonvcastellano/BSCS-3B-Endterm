<html>
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Laravel</title>
     </head>
     <body>
         <h1>Laravel</h1>
 
         <ul>
             @foreach ($laravelinfo as $laravelinfo)
                 <li>{{ $laravelinfo->name }} - ${{ $laravelinfo->price }}</li>
             @endforeach
         </ul>
     </body>
 </html>