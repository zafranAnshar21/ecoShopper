<?php
    // Koneksi ke database
    $conn = new mysqli("localhost", "root", "", "ecoshopper");

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil product_id dari URL
    $product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Query untuk mengambil data produk berdasarkan product_id
    $product_query = "SELECT * FROM products WHERE product_id = $product_id";
    $product_result = $conn->query($product_query);

    // Jika produk ditemukan
    if ($product_result->num_rows > 0) {
        $product = $product_result->fetch_assoc();
        $rating = $product['rating'];  // Rating produk (misal 4.8)
    } else {
        die("Produk tidak ditemukan!");
    }

    // Query untuk mengambil ukuran produk berdasarkan product_id
    $size_query = "SELECT size_name FROM product_sizes WHERE product_id = $product_id";
    $size_result = $conn->query($size_query);

    // Simpan ukuran dalam array
    $sizes = [];
    while ($size = $size_result->fetch_assoc()) {
        $sizes[] = $size['size_name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <style>
        /* Tetap menggunakan style yang ada */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .product-images {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .thumbnail-container {
            display: flex;
            gap: 10px;
            overflow-x: auto;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .thumbnail.active {
            border: 2px solid #ee4d2d;
        }

        .product-info h1 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .mall-badge {
            background: #ee4d2d;
            color: white;
            padding: 2px 6px;
            border-radius: 2px;
            font-size: 12px;
            margin-right: 5px;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 10px 0;
            color: #666;
        }

        .stars {
            color: #ee4d2d;
        }

        .price {
            margin: 20px 0;
        }

        .current-price {
            color: #ee4d2d;
            font-size: 30px;
            font-weight: bold;
        }

        .original-price {
            color: #666;
            text-decoration: line-through;
            margin-left: 10px;
        }

        .discount {
            background: #ffeee8;
            color: #ee4d2d;
            padding: 2px 6px;
            border-radius: 2px;
        }

        .voucher {
            background: #ffeee8;
            border: 1px dashed #ee4d2d;
            padding: 10px;
            margin: 10px 0;
        }

        .size-container {
            margin: 20px 0;
        }

        .size-options {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .size-option {
            border: 1px solid #ddd;
            padding: 10px 20px;
            cursor: pointer;
        }

        .size-option.selected {
            border-color: #ee4d2d;
            color: #ee4d2d;
        }

        .quantity {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
        }

        .quantity button {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            background: white;
            cursor: pointer;
        }

        .quantity input {
            width: 50px;
            height: 30px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .add-to-cart {
            flex: 1;
            padding: 15px;
            border: 1px solid #ee4d2d;
            background: white;
            color: #ee4d2d;
            cursor: pointer;
        }

        .buy-now {
            flex: 1;
            padding: 15px;
            border: none;
            background: #ee4d2d;
            color: white;
            cursor: pointer;
        }

        .shipping {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-container">
            <!-- Gambar Produk -->
            <div class="product-images">
                <img src="<?php echo $product['image_urls']; ?>" alt="<?php echo $product['name']; ?>" class="main-image" id="mainImage">
                <div class="thumbnail-container">
                    <img src="<?php echo $product['image_urls']; ?>" class="thumbnail active" onclick="changeImage(this)">
                    <!-- Tambahkan thumbnail lainnya jika ada -->
                </div>
            </div>

            <!-- Informasi Produk -->
            <div class="product-info">
                <h1><?php echo $product['name']; ?></h1>
            <!-- Bagian Rating -->
            <div class="rating">
                <span class="stars">
                    <?php
                        $fullStars = floor($rating); // Bintang penuh
                        $halfStars = ($rating - $fullStars) >= 0.5 ? 1 : 0; // Bintang setengah
                        $emptyStars = 5 - ($fullStars + $halfStars); // Bintang kosong

                        // Menampilkan bintang penuh
                        for ($i = 0; $i < $fullStars; $i++) {
                            echo "★";
                        }

                        // Menampilkan bintang setengah
                        if ($halfStars) {
                            echo "☆";
                        }

                        // Menampilkan bintang kosong
                        for ($i = 0; $i < $emptyStars; $i++) {
                            echo "☆";
                        }
                    ?>
                </span>
                <span><?php echo number_format($rating, 1); ?></span>
            </div>

                <div class="price">
                    <span class="current-price">Rp<?php echo number_format($product['price'], 0, ',', '.'); ?></span>
                </div>

                <!-- Ukuran Produk -->
                <div class="size-container">
                    <h3>SIZE</h3>
                    <div class="size-options">
                        <?php foreach ($sizes as $size): ?>
                            <div class="size-option" onclick="selectSize(this)"><?php echo $size; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Tombol -->
                <div class="buttons">
                    <button class="add-to-cart">Masukkan Keranjang</button>
                    <button class="buy-now">Beli Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi tetap sama seperti sebelumnya
        function changeImage(element) {
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            element.classList.add('active');
            document.getElementById('mainImage').src = element.src;
        }

        function selectSize(element) {
            document.querySelectorAll('.size-option').forEach(option => {
                option.classList.remove('selected');
            });
            element.classList.add('selected');
        }
    </script>
</body>
</html>
