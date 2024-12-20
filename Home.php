<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoShopper</title>
    <link rel="stylesheet" href="desaincss/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
    .search-box{
        width: fit-content;
        height: fit-content;
        position: relative;
    }
    .input-search{
        height: 50px;
        width: 50px;
        border-style: none;
        padding: 10px;
        font-size: 18px;
        letter-spacing: 2px;
        outline: none;
        border-radius: 25px;
        transition: all .5s ease-in-out;
        background-color: #3cb815;
        padding-right: 40px;
        color:#222020;
    }
    .input-search::placeholder{
        color: rgba(25, 24, 24, 0.852);
        font-size: 18px;
        letter-spacing: 2px;
        font-weight: 100;
    }
    .btn-search{
        width: 50px;
        height: 50px;
        border-style: none;
        font-size: 20px;
        font-weight: bold;
        outline: none;
        cursor: pointer;
        border-radius: 50%;
        position: absolute;
        right: 0px;
        color:#ffffff ;
        background-color:transparent;
        pointer-events: painted;  
    }
    .btn-search:focus ~ .input-search{
        width: 300px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom:1px solid rgba(11, 10, 10, 0.5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }
    .input-search:focus{
        width: 300px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom:1px solid rgba(23, 22, 22, 0.5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }
    
    </style>
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <!--navbar-->
    <header>
        <a href="#" class="logo"><i class='bx bxs-basket'></i>Eco shopper</a>
        <!--menu icon-->
        <div class="bx bx-menu" id="menu-icon"></div>
        <!--nav list-->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="home.html#categories">Kategori</a></li>
            <li><a href="product.html">Produk</a></li>
            <li><a href="home.html#about">Tentang Kami</a></li>
            <li><a href="home.html#customer">Customer</a></li>
        </ul>
    
        
    
        <!--profil-->
        <div class="profile">
            <img src="img/profile.jpg" alt="">
            <span>Jon Robert</span>
            <i class='bx bx-caret-down'></i>
        </div>
    </header>
    
    
    <!--home-->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!-- Slide1 -   ->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are delicacy</span>
                    <h1>Choose Delicacy <br> the best healthy <br>chicken salad</h1>
                    <a href="#" class="btn">Belanja<i class='bx bxs-right-arrow-alt' ></i></a>
                </div>
                <img src="img/home1.png" alt="">
            
            </div>
            <!--slide2-->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are delicacy</span>
                    <h1>Choose Delicacy <br> the best healthy <br>chicken salad</h1>
                    <a href="#" class="btn">Belanja<i class='bx bxs-right-arrow-alt' ></i></a>
                </div>
                <img src="img/home2.png" alt="">
            
            </div>
            <!--slide3-->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are delicacy</span>
                    <h1>Choose Delicacy <br> the best healthy <br>chicken salad</h1>
                    <a href="#" class="btn">Belanja<i class='bx bxs-right-arrow-alt' ></i></a>
                </div>
                <img src="img/home3.png" alt="">
            
            </div>
        
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </section>
    <!--category-->
    <section class="categories" id="categories">
        <div class="heading">
            <h1>Browse our product <br><span>categories</span></h1>
            <a href="#" class="btn">Belanja<i class='bx bxs-right-arrow-alt' ></i></a>
        </div>
        <!--container content-->
        <div class="categories-container">
            <!--box-->
            <div class="box box1">
                <img src="img2/hitam.png" alt="">
                <h2>Fashion</h2>
                <span>22 items</span>
                <i class='bx bxs-right-arrow-alt' ></i>

            </div>
             <!--box2-->
             <div class="box box2">
                <img src="img2/light-green-5-removebg-preview.png" alt="">
                <h2>Acessories</h2>
                <span>22 items</span>
                <i class='bx bxs-right-arrow-alt' ></i>

            </div>
             <!--box3-->
             <div class="box box3">
                <img src="img2/furniture_cate1-removebg-preview.png" alt="">
                <h2>Furniture</h2>
                <span>5 items</span>
                <i class='bx bxs-right-arrow-alt' ></i>

            </div>
             <!--box4-->
             <div class="box box4">
                <img src="img2/—Pngtree—mock up cosmetic products for_15619191.png" alt="">
                <h2>Skin care</h2>
                <span>50 items</span>
                <i class='bx bxs-right-arrow-alt' ></i>
            </div>
            <!--box5-->
            <div class="box box5">
                <img src="img2/black-16.png" alt="">
                <h2>Electronic</h2>
                <span>50 items</span>
                <i class='bx bxs-right-arrow-alt' ></i>
            </div>
        </div>
    </section>
    <!--product-->
    <!--product content-->
    <section class="products" id="products">
        <div class="heading">
            <h1>Our Popular <br><span>Products</span></h1>
            <div class="search-box">
            <button class="btn-search"><i class="bx bx-search"></i></button>
            <input type="text" class="input-search" id="search-input" placeholder="Type to Search...">
        </div>
        <a href="product.html" class="btn">Belanja<i class='bx bxs-right-arrow-alt' ></i></a>
        </div>
        <!-- Search Section -->
        <div class="products-container" id="product-container">
            <?php 
                // Koneksi ke database
                $conn = new mysqli("localhost", "root", "", "ecoshopper");

                // Periksa koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Query untuk mengambil data produk
                $sql = isset($_GET['query']) && !empty($_GET['query']) 
                       ? "SELECT * FROM products WHERE name LIKE ?" 
                       : "SELECT * FROM products";
                
                if (isset($_GET['query']) && !empty($_GET['query'])) {
                    $stmt = $conn->prepare($sql);
                    $search = '%' . $_GET['query'] . '%';
                    $stmt->bind_param("s", $search);
                    $stmt->execute();
                    $result = $stmt->get_result();
                } else {
                    $result = $conn->query($sql);
                }

                // Loop melalui data produk
                while ($row = $result->fetch_assoc()): ?>
                    <div class="box">
                        <a href="product-detail2.php?id=<?php echo $row['product_id']; ?>">
                            <img src="<?php echo $row['image_urls']; ?>" alt="<?php echo $row['name']; ?>">
                        </a>
                        <span>Fresh Item</span>
                        <h2><?php echo $row['name']; ?></h2>
                        <h3 class="price">Rp <?php echo number_format($row['price'], 0, ',', '.'); ?></h3>
                        <i class='bx bx-cart-alt'></i>
                        <i class='bx bx-heart'></i>
                        <span class="discount">70%</span>
                    </div>
            <?php endwhile; ?>
        </div>
    </section>
    <!--about-->
    <section class="about" id="about">
        <img src="img/about.png" alt="">
        <div class="about-text">
            <span>About Us</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam assumenda quaerat, architecto totam, eius voluptates doloribus provident illo eligendi maxime adipisci voluptatum. Voluptatum velit et id placeat! Praesentium, impedit similique?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, non veniam?</p>
            <a href="#" class="btn">Learn more<i class='bx bxs-right-arrow-alt' ></i></a>
        </div>
    </section>
    <!--customer-->
    <section class="customer" id="customer">
        <h2>Kenapa customer menyukai aplikasi ini?</h2>
        <!--customer content-->
        <div class="customer-container">
            <!---review1-->
            <div class="box">
                <i class='bx bxs-quote-alt-left' ></i>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum ex qui dolor expedita deleniti! Officia similique nesciunt numquam eius enim!</p>
                <div class="review-profile">
                    <img src="img/c1.jpg" alt="">
                    <h3>angelina smith</h3>
                </div>
            </div>

             <!---review2-->
             <div class="box">
                <i class='bx bxs-quote-alt-left' ></i>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum ex qui dolor expedita deleniti! Officia similique nesciunt numquam eius enim!</p>
                <div class="review-profile">
                    <img src="img/c2.jpg" alt="">
                    <h3>angelina smith</h3>
                </div>
            </div>
             <!---review3-->
             <div class="box">
                <i class='bx bxs-quote-alt-left' ></i>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum ex qui dolor expedita deleniti! Officia similique nesciunt numquam eius enim!</p>
                <div class="review-profile">
                    <img src="img/c3.jpg" alt="">
                    <h3>angelina smith</h3>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <section class="footer" id="footer">
        <div class="footer-box">
            <a href="#" class="logo"><i class='bx bxs-basket'></i>Eco Shopper</a>
            <p>Jalan kaliurang, KM 12, Kelurahan Beringharjo <br>desa Lama, RT12</p>
            <div class="social">
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Product</h3>
            <a href="#">Short Shirt</a>
            <a href="#">Jacket</a>
            <a href="#">Elegant Chair</a>
            <a href="#">Headphone</a>
        </div>
        <div class="footer-box">
            <h3>FAQ!</h3>
            <a href="#">privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact Us</a>
        </div>
    </section>
    <!--copyright-->
    <div class="copy-right">
        <p>&copy; EcoShopper. All right reserved.</p>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--link to js-->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search-input');

            searchInput.addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    const query = searchInput.value;
                    if (query) {
                        window.location.href = `?query=${query}`;
                    }
                }
            });
        });
    </script>

    
</body>
</html>