<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="halamanUtama.css">
    <script>
        // Fungsi untuk meminta izin lokasi
        function requestLocationPermission() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            alert("Latitude: " + position.coords.latitude + "\nLongitude: " + position.coords.longitude);
        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
            }
        }

        // Meminta izin lokasi saat halaman dimuat
        window.onload = requestLocationPermission;
    </script>
</head>
<body>
    <div class="container">
        <div class="header">
            <button onclick="history.back()">&larr;</button>
            <h1>ANTAR - JEMPUT LEBIH MUDAH!</h1>
            <button class="menu">&#9776;</button>
        </div>
        <div class="banner">
            <img src="/OMAH/img/omah_42.png" alt="Logo">
            <h2>ANTAR - JEMPUT LEBIH MUDAH!</h2>
        </div>
        <h3>Pilih driver mu</h3>
        <div class="drivers">
            <div class="driver-card">
                <img src="/OMAH/img/ellipse_152.jpeg" alt="Driver 1">
                <h4>ABDILLAH</h4>
                <p class="status">Online <span class="online"></span></p>
                <p class="rating">4/5 <span class="stars">★★★★☆</span></p>
                <button class="message">Kirim Pesan</button>
                <button class="select">Pilih</button>
            </div>
            <div class="driver-card">
                <img src="/OMAH/img/ellipse_152.jpeg" alt="Driver 2">
                <h4>TOKYO</h4>
                <p class="status">Online <span class="online"></span></p>
                <p class="rating">4/5 <span class="stars">★★★★☆</span></p>
                <button class="message">Kirim Pesan</button>
                <button class="select">Pilih</button>
            </div>
            <!-- Tambahkan driver-card lainnya sesuai kebutuhan -->
        </div>
    </div>
</body>
</html>