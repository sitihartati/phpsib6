<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Produk</title>
    <style>
        .product-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .product {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            width: 200px;
            text-align: center;
        }

        .product img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .product h3 {
            margin-bottom: 10px;
        }

        .product p {
            color: #888;
        }
    </style>
</head>

<body>
    <h1 align="center">Our Product</h1>
    <div class="product-container">
        <div class="product">
            <img src="https://tse1.mm.bing.net/th?id=OIP.0QrPcHR-NEljgNFmDjZ52gHaHa&pid=Api&P=0&h=220" alt="">
            <h3>Sepatu</h3>
            <p>Rp 500.000</p>
            <button>Beli</button>
        </div>
        <div class="product">
            <img src="https://tse2.mm.bing.net/th?id=OIP.pAHR9SjpySwD72oXtI4lQQHaHO&pid=Api&P=0&h=220" alt="">
            <h3>Baju</h3>
            <p>Rp 150.000</p>
            <button>Beli</button>
        </div>
        <div class="product">
            <img src="https://tse1.mm.bing.net/th?id=OIP.X05RK09iV38gxLqqY_eEugHaHa&pid=Api&P=0&h=220" alt="">
            <h3>Sandals</h3>
            <p>Rp 200.000</p>
            <button>Beli</button>
        </div>
       
    </div>
</body>

</html>
