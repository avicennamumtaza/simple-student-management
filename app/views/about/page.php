    <h1>page</h1>
    <p>Saya <?= $data['nama'] ?>, bekerja sebagai <?= $data['job'] ?></p>
    <!-- Tombol yang memicu SweetAlert -->
    <button onclick="showAlert()">Say Hi</button>
    <script>
        // Fungsi untuk memicu SweetAlert
        function showAlert() {
            swal('Hello <?= $data['nama'] ?>!');
        }
    </script>