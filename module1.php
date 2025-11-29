<!DOCTYPE html>
<html>
<head>
    <title>Rodriguez</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f5f5f5;
            margin: 0; padding: 20px;
            color: #222;
        }

        .container {
            width: 90%; max-width: 1100px;
            margin: auto; background: #fff;
            padding: 25px; border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        }

        h1, h2, .subtitle { 
            text-align: center;
            margin: 10px 0;
        }

        table {
            width: 100%; 
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td { padding: 12px;
                border-bottom: 1px solid #e0e0e0;
                text-align: center;
               }
        tr:nth-child(even) { background: #fcfcfc; }

        .available { color: #2e7d32;
                    background: #e8f5e9;
                    padding: 5px 10px;
                    border-radius: 4px;
                   }
        .low { color: #8a6d3b;
              background: #fff8e1;
              padding: 5px 10px;
              border-radius: 4px;
             }
        .out { color: #c62828;
              background: #ffebee;
              padding: 5px 10px;
              border-radius: 4px;
             }

        footer { text-align: center;
                margin-top: 30px;
                padding: 12px; 
                background: #333; 
                color: #fff; 
                border-radius: 8px;
               }
    </style>
</head>
<body>
<div class="container">
    
    <?php
    // Variables and Comments
    $storeName = "Rodriguez Store";
    $storeSubtitle = "Masarap na Kakanin at Pastries para sa Pasko!";
    $currentYear = date("Y");
    
    // Product 1 - Using variables
    $product1_name = "Bibingka";
    $product1_price = 70;
    $product1_stock = 30;
    $product1_category = "🍚 Kakanin";
    $product1_desc = "Soft rice cake cooked in clay pots, topped with butter, sugar, and cheese";
    
    // Product 2
    $product2_name = "Puto Bumbong";
    $product2_price = 70;
    $product2_stock = 15;
    $product2_category = "🍚 Kakanin";
    $product2_desc = "Purple rice cake steamed in bamboo tubes, served with butter, sugar, and coconut";
    
    // Product 3
    $product3_name = "Biko";
    $product3_price = 80;
    $product3_stock = 28;
    $product3_category = "🍚 Kakanin";
    $product3_desc = "Sweet sticky rice cake with coconut milk and brown sugar, topped with latik";
    
    // Product 4
    $product4_name = "Leche Flan";
    $product4_price = 150;
    $product4_stock = 12;
    $product4_category = "🍰 Minatamis";
    $product4_desc = "Creamy caramel custard made with egg yolks, condensed milk, and evaporated milk";
    
    // Product 5
    $product5_name = "Tibok-Tibok";
    $product5_price = 120;
    $product5_stock = 8;
    $product5_category = "🍰 Minatamis";
    $product5_desc = "Carabao milk pudding from Pampanga, smooth and creamy with a delicate sweetness";
    
    // Product 6
    $product6_name = "Puto";
    $product6_price = 50;
    $product6_stock = 40;
    $product6_category = "🍚 Kakanin";
    $product6_desc = "Fluffy steamed rice cake, perfect with butter or paired with dinuguan";
    
    // Product 7
    $product7_name = "Fruit Salad";
    $product7_price = 180;
    $product7_stock = 0;
    $product7_category = "🍰 Minatamis";
    $product7_desc = "Creamy mix of tropical fruits, condensed milk, and cream - a Noche Buena favorite";
    
    // Product 8
    $product8_name = "Buko Pandan";
    $product8_price = 160;
    $product8_stock = 10;
    $product8_category = "🍰 Minatamis";
    $product8_desc = "Refreshing dessert with young coconut, pandan jelly, and sweetened cream";
    
    // Using operators and expressions
    $totalProducts = 8;
    $totalValue = $product1_price + $product2_price + $product3_price + $product4_price + $product5_price + $product6_price + $product7_price + $product8_price;
    $averagePrice = $totalValue / $totalProducts;
    
    // Calculations
    $discountRate = 0.10;
    $minimumOrder = 5;
    $contactNumber = "0917-123-4567";
    $address = "123 Pasko Street, Manila";
    ?>
    
    <h1>🎄 <?php echo $storeName; ?> - Paskong Pinoy 🎄</h1>
    <p class="subtitle"><?php echo $storeSubtitle; ?></p>
    
    <h2>🎅 Menu ng Pasko 🎅</h2>
    
    <table>
        <tr>
            <th>#</th>
            <th>Pangalan</th>
            <th>Presyo (PHP)</th>
            <th>Stock</th>
            <th>Uri ng Pagkain</th>
            <th>Description</th>
        </tr>
        
        <!-- Product 1 -->
        <tr>
            <td>1</td>
            <td><strong><?php echo $product1_name; ?></strong></td>
            <td>₱<?php echo number_format($product1_price, 2); ?></td>
            <td><span class="available"><?php echo $product1_stock; ?> pcs</span></td>
            <td><?php echo $product1_category; ?></td>
            <td class="desc"><?php echo $product1_desc; ?></td>
        </tr>
        
        <!-- Product 2 -->
        <tr>
            <td>2</td>
            <td><strong><?php echo $product2_name; ?></strong></td>
            <td>₱<?php echo number_format($product2_price, 2); ?></td>
            <td><span class="low"><?php echo $product2_stock; ?> pcs</span></td>
            <td><?php echo $product2_category; ?></td>
            <td class="desc"><?php echo $product2_desc; ?></td>
        </tr>
        
        <!-- Product 3 -->
        <tr>
            <td>3</td>
            <td><strong><?php echo $product3_name; ?></strong></td>
            <td>₱<?php echo number_format($product3_price, 2); ?></td>
            <td><span class="available"><?php echo $product3_stock; ?> pcs</span></td>
            <td><?php echo $product3_category; ?></td>
            <td class="desc"><?php echo $product3_desc; ?></td>
        </tr>
        
        <!-- Product 4 -->
        <tr>
            <td>4</td>
            <td><strong><?php echo $product4_name; ?></strong></td>
            <td>₱<?php echo number_format($product4_price, 2); ?></td>
            <td><span class="low"><?php echo $product4_stock; ?> pcs</span></td>
            <td><?php echo $product4_category; ?></td>
            <td class="desc"><?php echo $product4_desc; ?></td>
        </tr>
        
        <!-- Product 5 -->
        <tr>
            <td>5</td>
            <td><strong><?php echo $product5_name; ?></strong></td>
            <td>₱<?php echo number_format($product5_price, 2); ?></td>
            <td><span class="low"><?php echo $product5_stock; ?> pcs</span></td>
            <td><?php echo $product5_category; ?></td>
            <td class="desc"><?php echo $product5_desc; ?></td>
        </tr>
        
        <!-- Product 6 -->
        <tr>
            <td>6</td>
            <td><strong><?php echo $product6_name; ?></strong></td>
            <td>₱<?php echo number_format($product6_price, 2); ?></td>
            <td><span class="available"><?php echo $product6_stock; ?> pcs</span></td>
            <td><?php echo $product6_category; ?></td>
            <td class="desc"><?php echo $product6_desc; ?></td>
        </tr>
        
        <!-- Product 7 -->
        <tr>
            <td>7</td>
            <td><strong><?php echo $product7_name; ?></strong></td>
            <td>₱<?php echo number_format($product7_price, 2); ?></td>
            <td><span class="out"><?php echo $product7_stock; ?> - Ubos na</span></td>
            <td><?php echo $product7_category; ?></td>
            <td class="desc"><?php echo $product7_desc; ?></td>
        </tr>
        
        <!-- Product 8 -->
        <tr>
            <td>8</td>
            <td><strong><?php echo $product8_name; ?></strong></td>
            <td>₱<?php echo number_format($product8_price, 2); ?></td>
            <td><span class="low"><?php echo $product8_stock; ?> pcs</span></td>
            <td><?php echo $product8_category; ?></td>
            <td class="desc"><?php echo $product8_desc; ?></td>
        </tr>
    </table>
    
    <!-- Promo Section using variables -->
    <div class="promo">
        <h3>🎄 Pamasko Special 🎄</h3>
        <p><strong>Buy <?php echo $minimumOrder; ?> items or more</strong> and get <strong><?php echo ($discountRate * 100); ?>% discount!</strong></p>
        <p><strong>Average Price:</strong> ₱<?php echo number_format($averagePrice, 2); ?></p>
        <p><strong>📞 Para mag-order:</strong> Tawagan si Aling Rodriguez - <strong><?php echo $contactNumber; ?></strong></p>
        <p><strong>🏠 Address:</strong> <?php echo $address; ?></p>
    </div>
    
    <!-- Footer with dynamic year -->
    <footer>
        🎄 &copy; <?php echo $currentYear; ?> <?php echo $storeName; ?> — Masayang Pasko! 🎅<br>
        <small>PHP Module 1</small>
    </footer>
    
</div>
</body>

</html>
