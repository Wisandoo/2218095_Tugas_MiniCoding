<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter</title>
    <link href="{{ asset('red/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('red/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>
<body>
    <h1>Data Dokter</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>No_HP</th>
                <th>Email</th>
                <th>Kota</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokters as $dokter)
                <tr>
                    <td>{{ $dokter->nama }}</td>
                    <td>{{ $dokter->spesialis }}</td>
                    <td>{{ $dokter->nohp }}</td>
                    <td>{{ $dokter->email }}</td>
                    <td>{{ $dokter->nama }}</td>
                    <td>{{ $dokter->kota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('red/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('red/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('red/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('red/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('red/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('red/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('red/js/demo/chart-pie-demo.js')}}"></script>




</body>
</html>
