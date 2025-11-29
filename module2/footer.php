<!-- Promo Section using variables and operators -->
    <div style="background: linear-gradient(135deg, #fff8e1 0%, #ffe0b2 100%); padding: 25px; border-radius: 10px; margin-top: 30px; border: 2px solid #c41e3a;">
        <h3 style="text-align: center; color: #1a472a; margin-top: 0;">🎄 Pamasko Special 🎄</h3>
        <p style="text-align: center; font-size: 1.1em;">
            <strong>Buy <?php echo $minimumOrder; ?> items or more</strong> and get 
            <strong style="color: #c41e3a;"><?php echo ($discountRate * 100); ?>% discount!</strong>
        </p>
        <p style="text-align: center;"><strong>Average Price:</strong> ₱<?php echo number_format($averagePrice, 2); ?></p>
        <p style="text-align: center;"><strong>📞 Para mag-order:</strong> Tawagan si Mang Gusting - <strong><?php echo $contactNumber; ?></strong></p>
        <p style="text-align: center;"><strong>🏠 Address:</strong> <?php echo $address; ?></p>
    </div>

    <!-- Footer with dynamic year -->
    <footer>
        🎄 &copy; <?php echo date('Y'); ?> <?php echo $storeName; ?> — Masayang Pasko! 🎅<br>
        <small>PHP Module 2</small> 
    </footer>
