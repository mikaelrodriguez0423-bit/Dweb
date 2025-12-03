<?php
//Module 3 
//Mikael Sheeray Rodriguez
declare(strict_types=1);

require "products.php";
include "header.php";

$MangGustingProducts=[
    "Bibingka" => [
        "price" => 70,
        "stock" => 30,
    ],
    "Puto Bumbong" => [
        "price" => 70,
        "stock" => 15,
    ],
    "Biko" => [
        "price" => 80,
        "stock" => 28,
    ],
    "Leche Flan" => [
        "price" => 150,
        "stock" => 12,
    ],
    "Tibok-Tibok" => [
        "price" => 120,
        "stock" => 8,
    ],
    "Puto" => [
        "price" => 50,
        "stock" => 40,
    ],
    "Fruit Salad" => [
        "price" => 180,
        "stock" => 0,
    ],
    "Buko Pandan" => [
        "price" => 160,
        "stock" => 10,
    ],
];

$taxRate = 12;

function get_reorder_message(int $current_stock): string {
    return ($current_stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $taxRate = 0): float {
    $total_value = $price * $quantity;
    return $total_value * ($taxRate / 100);
}
?>

<h2>🎅 Stock Control 🎅</h2>
<table>
    <tr>
        <th>PRODUCT</th>
        <th>STOCK</th>
        <th>RE-ORDER</th>
        <th>TOTAL VALUE</th>
        <th>TAX DUE</th>
    </tr>
<img src="img/MangGusting.png" alt="Decor" class="floating-image">

    <?php foreach ($MangGustingProducts as $product_name => $data): ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= $data['stock'] ?></td>
            <td><?= get_reorder_message($data['stock']) ?></td>
            <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
            <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $taxRate), 2) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include "footer.php"?>