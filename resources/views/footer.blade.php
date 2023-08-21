
@if($errors->any())
    <script>
        var error = '{{$errors->first()}}'
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('success'))
    <script>
        var success = '{{\Illuminate\Support\Facades\Session::get('success')}}'
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('success_ok'))
    <script>
        var success_ok = '{{\Illuminate\Support\Facades\Session::get('success_ok')}}'
    </script>
@endif
<script>
    var now = '{{\Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s')}}'
</script>
</body>
</html>
