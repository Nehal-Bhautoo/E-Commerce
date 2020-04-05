<?php
    include('common.php');
    outputHeader();
?>
<link rel="stylesheet" href="css/orders.css">
    <main class="orderMain">
        <?php
            include('php/viewOrders.php');
            listOrders();
       ?>
    </main>
<?php
    outputFooter();
?>
