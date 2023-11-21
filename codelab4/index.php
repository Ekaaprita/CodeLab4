<?php
include "Controller/ProductController.php";

use Controller\ProductController;

// Deklarasi objek class
$productController = new ProductController();

// Tamppilkan hasil kembalian dari method getAllProduct menggunakan menggunakan echo
echo $productController->getAllProduct();