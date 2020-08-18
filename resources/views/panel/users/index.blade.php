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
            Pagina principal
            <small>Panel de control</small>
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Pagina principal</li>
          </ol>

        </section>

        @yield('content')

      </div>

      @includeIf('Panel.Layout.footer')

    </div>
    @includeIf('Panel.Layout.javascript')
  </body>
</html>
