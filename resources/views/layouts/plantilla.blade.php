<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('titulo')
    </title>
<link rel="stylesheet" href="{{asset('css/plantilla.css')}}">
</head>
<body>
  <header class="clearfix">

    <div id="logo">
      @yield('logo')
    </div>

    <h3 class="encabezado">
    @yield('encabezado')
    </h3>

    <div id="project">
        @yield('info-izquierda')
    </div>

    <div id="project-2">
        @yield('info-derecha')
    </div>
  </header>

  <main>
    <table>
      <thead>
        @yield('thead')
      </thead>
      <tbody>
        @yield('tr')
      </tbody>
    </table>
    {{-- <div id="notices">
        @yield('nota')
    </div> --}}
  </main>
  {{-- <footer>
    @yield('footer')
  </footer> --}}
  <script type="text/php">
      if ( isset($pdf) ) {
          $pdf->page_script('
              $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
              $pdf->text(270, 780, "Pag $PAGE_NUM de $PAGE_COUNT", $font, 10);
          ');
      }
  </script>
</body>
</html>

  {{-- //PDF VERTICAL SIN FOOTER --}}

{{-- //PDF VERTICAL
<script type="text/php">
    if ( isset($pdf) ) {
        $pdf->page_script('
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
            $pdf->text(270, 820, "Pag $PAGE_NUM de $PAGE_COUNT", $font, 10);
        ');
    }
</script> --}}
    {{-- PDF HORIZONTAL

    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(370, 570, "Pag $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
    </script> --}}
    {{-- <footer>
        <p><strong>SUSCRIBETE - COMENTA - COMPARTE</strong></p>
    </footer> --}}
