<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Competentie Database</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-migrate-3.0.1.min.js" integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4=" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

        <script type='text/javascript' src="/js/bootstrap-slider.js"></script>

        <script  type='text/javascript'>

        $(function () {
          $('[data-toggle="popover"]').popover()
        });

      $(document).ready(function() {
        // With JQuery
          $('#ex1').slider({
        	formatter: function(value) {

            switch(value){
              case 1:
                label = 'Propedeuse - P1';
                break;
              case 2:
                label = 'Propedeuse - P2';
                break;
              case 3:
                label = 'Propedeuse - P3';
                break;
              case 4:
                label = 'Propedeuse - P4';
                break;
              case 5:
                label = 'Jaar 2 - P1';
                break;
              case 6:
                label = 'Jaar 2 - P2';
                break;
              case 7:
                label = 'Jaar 2 - P3';
                break;
              case 8:
                label = 'Jaar 2 - P4';
                break;
              case 9:
                label = 'Jaar 3 - P1';
                break;
              case 10:
                label = 'Jaar 3 - P2';
                break;
              default:
                label = 'Periode ' + value;
            }

            return label;
        	}
        });
      });

      $(document).ready(function() {
          $('#modules').DataTable();
      } );
      $(document).ready(function() {
          $('#modulematrices').DataTable();
      } );

      </script>

      <link href="/css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/css/bootstrap-slider.min.css">
      <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/css/custom.css">


    </head>
    <body>
      <div class="content_wrapper">
        @include('partials.header')
        @yield('content')
      </div>
    </body>
</html>
