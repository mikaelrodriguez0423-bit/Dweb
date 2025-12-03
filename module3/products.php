<?php
// Associative Arrays - Product Data for Rodriguez Store
// Using arrays to organize product information

$products = [
    [
        "name" => "Bibingka",
        "price" => 70,
        "stock" => 30,
        "category" => "🍚 Kakanin",
        "description" => "Soft rice cake cooked in clay pots, topped with butter, sugar, and cheese"
    ],
    [
        "name" => "Puto Bumbong",
        "price" => 70,
        "stock" => 15,
        "category" => "🍚 Kakanin",
        "description" => "Purple rice cake steamed in bamboo tubes, served with butter, sugar, and coconut"
    ],
    [
        "name" => "Biko",
        "price" => 80,
        "stock" => 28,
        "category" => "🍚 Kakanin",
        "description" => "Sweet sticky rice cake with coconut milk and brown sugar, topped with latik"
    ],
    [
        "name" => "Leche Flan",
        "price" => 150,
        "stock" => 12,
        "category" => "🍰 Minatamis",
        "description" => "Creamy caramel custard made with egg yolks, condensed milk, and evaporated milk"
    ],
    [
        "name" => "Tibok-Tibok",
        "price" => 120,
        "stock" => 8,
        "category" => "🍰 Minatamis",
        "description" => "Carabao milk pudding from Pampanga, smooth and creamy with a delicate sweetness"
    ],
    [
        "name" => "Puto",
        "price" => 50,
        "stock" => 40,
        "category" => "🍚 Kakanin",
        "description" => "Fluffy steamed rice cake, perfect with butter or paired with dinuguan"
    ],
    [
        "name" => "Fruit Salad",
        "price" => 180,
        "stock" => 0,
        "category" => "🍰 Minatamis",
        "description" => "Creamy mix of tropical fruits, condensed milk, and cream - a Noche Buena favorite"
    ],
    [
        "name" => "Buko Pandan",
        "price" => 160,
        "stock" => 10,
        "category" => "🍰 Minatamis",
        "description" => "Refreshing dessert with young coconut, pandan jelly, and sweetened cream"
    ]
];

// Store Information Variables
$storeName = "Mang Gusting";
$storeSubtitle = "Masarap na Kakanin at Minatamis para sa Pasko!";

// Promo and Contact Variables
$discountRate = 0.10;
$minimumOrder = 5;
$contactNumber = "0962-786-4567";
$address = "0423 Pasko Nanaman Street, Pampanga";

// Calculate total products and average price using operators
$totalProducts = count($products);
$totalValue = 0;

// Loop to calculate total value
foreach ($products as $product) {
    $totalValue += $product["price"];
}

// Expression to calculate average
$averagePrice = $totalValue / $totalProducts;
?>