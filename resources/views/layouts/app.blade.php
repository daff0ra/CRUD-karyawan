<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
            position: fixed;
            background: #343a40;
            color: #fff;
        }
        .sidebar .nav-link {
            color: #fff;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
        .sidebar-header {
            padding: 15px;
            background: #495057;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar bg-dark">
        <div class="sidebar-header text-center py-4">
            <h4 class="text-white">Sidebar</h4>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Halaman Utama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('karyawans.index') }}">Daftar Karyawan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('karyawans.create') }}">Tambah Karyawan</a>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
