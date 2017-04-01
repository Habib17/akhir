<!-- jQuery 2.1.4 -->
    <script src="{{ URL::asset('assets/admin/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ URL::asset('assets/admin/bootstrap/js/bootstrap.min.js') }}
    "></script>
    <!-- DataTables -->
    <script src="{{ URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ URL::asset('assets/admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('assets/admin/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('assets/admin/dist/js/app.min.js') }}
    "></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ URL::asset('assets/admin/dist/js/demo.js') }}"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <script type="text/javascript">
    function changeCity()
    {
        $('#city_id').html('');
        $.getJSON('{{ url("service/city") }}' + '?province_id=' + $('#province_id').val(), function(v){
            $.each(v, function(i, e){
                $('#city_id').append('<option value="'+ e.id +'">'+ e.name +'</option>')
            });
        });
    }

</script>
  <script type="text/javascript">
    function changeDistrict()
    {
        $('#district_id').html('');
        $.getJSON('{{ url("service/district") }}' + '?city_id=' + $('#city_id').val(), function(v){
            $.each(v, function(i, e){
                $('#district_id').append('<option value="'+ e.id +'">'+ e.name +'</option>')
            });
        });
    }
    </script>
<script>
    function loadFile(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('image_pic');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>


