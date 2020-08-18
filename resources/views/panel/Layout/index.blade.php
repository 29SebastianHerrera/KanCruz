<!DOCTYPE html>
<html>

  @includeIf('Panel.Layout.head')

  <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

      @includeIf('Panel.Layout.header')

      @includeIf('Panel.Layout.leftcolumn')

      <div class="content-wrapper">

        <section class="content-header">

          <h1>
            Panel de control

            @if(isset($urlActual))
              <small>{{$urlActual}}</small>
            @endif
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
            @if(isset($urlActual))
              <li class="active">{{$urlActual}}</li>
            @else
              <li class="active">Pagina principal</li>
            @endif

          </ol>



        </section>

        @yield('content')

      </div>

      @includeIf('Panel.Layout.footer')

    </div>
    @includeIf('Panel.Layout.javascript')
  </body>
</html>
