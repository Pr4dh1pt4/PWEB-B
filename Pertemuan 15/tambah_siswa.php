<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nis        = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas      = $_POST['kelas'];
    $nomor      = $_POST['nomor'];

    $query = "INSERT INTO siswa (nis, nama_siswa, kelas, nomor) 
              VALUES ('$nis', '$nama_siswa', '$kelas', '$nomor')";

    if (mysqli_query($connect, $query)) {
        echo "<script>
                alert('Data berhasil disimpan!');
                window.location.href='tambah_siswa.php';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px 0;
        }
        
        .card { 
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            border: none;
            overflow: hidden;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 30px;
            border: none;
        }
        
        .card-header h4 {
            margin: 0;
            font-weight: 600;
            font-size: 1.8rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .card-header .subtitle {
            margin-top: 5px;
            opacity: 0.9;
            font-size: 0.9rem;
            font-weight: 300;
        }
        
        .card-body {
            padding: 40px;
        }
        
        .form-label {
            font-weight: 500;
            color: #2d3748;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }
        
        .form-label i {
            margin-right: 8px;
            color: #667eea;
        }
        
        .form-control, .form-select {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 12px 16px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }
        
        .btn {
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
        }
        
        .btn-success:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.6);
        }
        
        .btn-outline-danger {
            border: 2px solid #ef4444;
            color: #ef4444;
            background: transparent;
        }
        
        .btn-outline-danger:hover {
            background: #ef4444;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.4);
        }
        
        .footer-text {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .footer-text small {
            color: #64748b;
            font-weight: 500;
        }
        
        .input-icon {
            position: relative;
        }
        
        .mb-3 {
            margin-bottom: 1.5rem !important;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .card {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card">
                <div class="card-header text-white text-center">
                    <h4><i class="fas fa-user-plus"></i> Form Pendataan Siswa</h4>
                    <div class="subtitle">Sistem Informasi Akademik</div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        
                        <div class="mb-3">
                            <label for="nis" class="form-label">
                                <i class="fas fa-id-card"></i> NIS
                            </label>
                            <input type="number" name="nis" class="form-control" placeholder="Contoh: 21005" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_siswa" class="form-label">
                                <i class="fas fa-user"></i> Nama Lengkap
                            </label>
                            <input type="text" name="nama_siswa" class="form-control" placeholder="Contoh: Kevin Susanto" required>
                        </div>

                        <div class="mb-3">
                            <label for="kelas" class="form-label">
                                <i class="fas fa-chalkboard"></i> Kelas
                            </label>
                            <select name="kelas" class="form-select" required>
                                <option value="">-- Pilih Kelas --</option>
                                <option value="X MIPA 1">X MIPA 1</option>
                                <option value="X MIPA 2">X MIPA 2</option>
                                <option value="X MIPA 2">X MIPA 3</option>
                                <option value="X IPS 1">X IPS 1</option>
                                <option value="X IPS 2">X IPS 2</option>
                                <option value="XI MIPA 1">XI MIPA 1</option>
                                <option value="XI MIPA 2">XI MIPA 2</option>
                                <option value="XI MIPA 3">XI MIPA 3</option>
                                <option value="XI IPS 1">XI IPS 1</option>
                                <option value="XI IPS 2 3">XI IPS 2</option>
                                <option value="XII MIPA 1">XII MIPA 1</option>
                                <option value="XII MIPA 2">XII MIPA 2</option>
                                <option value="XII MIPA 3">XII MIPA 3</option>
                                <option value="XII IPS 3">XII IPS 1</option>
                                <option value="XII IPS 3">XII IPS 2</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nomor" class="form-label">
                                <i class="fas fa-phone"></i> Nomor HP
                            </label>
                            <input type="number" name="nomor" class="form-control" placeholder="Contoh: 0812..." required>
                        </div>

                        <div class="d-grid gap-3 mt-4">
                            <button type="submit" name="simpan" class="btn btn-success">
                                <i class="fas fa-save"></i> Simpan Data
                            </button>
                            <a href="cetak_siswa.php" target="_blank" class="btn btn-outline-danger">
                                <i class="fas fa-file-pdf"></i> Cetak Laporan PDF
                            </a>
                        </div>

                    </form>
                </div>
            </div>
            <div class="text-center mt-4 footer-text">
                <small><i class="fas fa-school"></i> SMA Negeri 1 Sukolilo - Sistem Informasi Akademik</small>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>