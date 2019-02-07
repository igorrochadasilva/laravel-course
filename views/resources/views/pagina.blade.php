<html>
<head> <!--maneiras de se importar outros arquivos-->
<!--<link href="{{asset('css/app.css')}}" rel="stylesheet">-->
<link href="{{URL::to('css/app.css')}}" rel="stylesheet">
</head>
<body>

   @component('components.meucomponente',['tipo'=>'danger','titulo' => 'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro.
   @endcomponent

   @component('components.meucomponente',['tipo'=>'primary','titulo' => 'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro.
    @endcomponent

   @component('components.meucomponente',['tipo'=>'success','titulo' => 'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro.
    @endcomponent
     
   @component('components.meucomponente',['tipo'=>'warning','titulo' => 'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro.
   @endcomponent

      <script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
 <!-- <script src="{{asset('js/app.js')}}" type="text/javascript"></script>-->
</body>
</html>