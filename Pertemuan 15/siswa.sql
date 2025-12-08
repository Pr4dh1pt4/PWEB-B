CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(64) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `nomor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_siswa`, `kelas`, `nomor`) VALUES
(2, '21034', 'Berwyn Rafif', 'XII MIPA 3', '08123456789'),
(3, '21035', 'Rais Pandya', 'XII MIPA 1', '08123456987'),
(4, '20136', 'Rudi Mahendra', 'XI MIPA 2', '08123459876');
