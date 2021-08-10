<script src="{{asset('backend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/lib/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('backend/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('backend/lib/highlightjs/highlight.pack.min.js')}}"></script>

    <script src="{{asset('backend/js/bracket.js')}}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <script>
      $(function(){

        // showing modal with effect
        $('.modal-effect').on('click', function(e){
          e.preventDefault();

          var effect = $(this).attr('data-effect');
          $('#modaldemo8').addClass(effect);
          $('#modaldemo8').modal('show');
        });

        // hide modal with effect
        $('#modaldemo8').on('hidden.bs.modal', function (e) {
          $(this).removeClass (function (index, className) {
              return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
          });
        });
      });

  
    </script>

<script>
  $('#datepicker').datepicker({
      uiLibrary: 'bootstrap4',
      format: 'dd-mm-yyyy' , 

  });
</script>


<script>
  $(document).ready( function () {
    $('#table1').DataTable(
      {
        pageLength : 5,
      }
    );

  } );
  </script>