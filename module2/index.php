<?php
// INCLUDING AND REQUIRING FILES
// Using require to ensure products.php is loaded (will cause fatal error if missing)
require "products.php";

// Using include for header (will only show warning if missing)
include "header.php";
?>

<h2 style="color: #1a472a;">🎅 Menu ng Pasko 🎅</h2>

<table>
    <tr>
        <th>#</th>
        <th>Pagkain</th>
        <th>Presyo (PHP)</th>
        <th>Stock</th>
        <th>Uri ng Pagkain</th>
        <th>Description</th>
    </tr>

    <?php
    // LOOP AND VARIABLES
    // Using while loop with counter variable
    $i = 0;  
    $total = count($products);

    while ($i < $total):
        // Accessing array elements and storing in variables
        $name = $products[$i]["name"];
        $price = $products[$i]["price"];
        $stock = $products[$i]["stock"];
        $category = $products[$i]["category"];
        $description = $products[$i]["description"];
        
        // Using operators: increment for row number
        $rowNumber = $i + 1;
    ?>

    <tr>
        <!-- Display row number using variable -->
        <td><?= $rowNumber ?></td>
        
        <td><strong><?= $name ?></strong></td>
        
        <!-- Using PHP function with variable -->
        <td>₱<?= number_format($price, 2) ?></td>

        <!-- IF-ELSE CONDITIONAL STATEMENTS -->
        <td>
            <?php
                // Comparison operators: >=, >, &&, ==
                if ($stock >= 20) {
                    // String concatenation
                    echo "<span class='available'>" . $stock . " pcs</span>";
                } elseif ($stock > 0 && $stock < 20) {
                    // Alternative concatenation
                    echo "<span class='low'>{$stock} pcs</span>";
                } elseif ($stock == 0) {
                    echo "<span class='out'>0 - Ubos na</span>";
                }
            ?>
        </td>

        <!-- Display category using variable -->
        <td>
            <?= $category ?>
        </td>

        <!-- DESCRIPTION with inline styling -->
        <td style="text-align: left; font-size: 0.9em;">
            <?= $description ?>
        </td>
    </tr>

    <?php
        // INCREMENT OPERATOR
        $i++;  
    endwhile; // End while loop
    ?>

</table>

<?php 
// INCLUDING FOOTER
include "footer.php";
?>