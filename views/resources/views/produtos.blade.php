<html>
<head> 
<link href="{{URL::to('css/app.css')}}" rel="stylesheet">
</head>
<body> 

          @if(isset($produtos))

                @if(count($produtos) == 0)
                        <h1>Nenhum produto!</h1>
                      @elseif(count($produtos) === 1)
                           <h1>1 produto</h1>
                      @else
                           <h1>Temos vários produtos</h1>
                      @endif

                 @foreach($produtos as $p)
                           <p>Nome: {{$p}}</p>
                 @endforeach            
               
          @else
                <h2>Variavel produto não foi passada como parámetro.
          @endif

          @empty($produtoss)
          <h1>Nada em produtos.</h1>
          @endempty


<script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
</body>
</html>