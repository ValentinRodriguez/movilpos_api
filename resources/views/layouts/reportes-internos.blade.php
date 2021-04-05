<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('titulo')
    </title>
<link rel="stylesheet" href="{{asset('css/entradas_diario.css')}}">
</head>
  <body>

    <header>
      @yield('company-info')
    </header>
    
    <main id="container">
      <div class="right-invoice">
        <div class="title-info">
          @yield('title-info')
        </div>
    
        <div class="clearfix"></div>
        
        <section id="invoice-info2">
          @yield('invoice-info2')
        </section>

        <section id="items">
          @yield('items')        
        </section>

        <section id="invoice-info2">
          @yield('totales')
        </section>

      </div>

    </main>
    
    <footer>
      @yield('footer')    
    </footer>

    <div class="firma">
      @yield('firma')  
    </div>
    
    <script type="text/php">
      if ( isset($pdf) ) {
          $pdf->page_script('
              $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
              $pdf->text(260, 790, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 10);
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
            $pdf->text(270, 820, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 10);
        ');
    }
</script> --}}
    {{-- PDF HORIZONTAL

    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(370, 570, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
    </script> --}}
