<?php
    define("TITLE", "Menu | My Famous Restaurant");
    include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/header.php');
?>
    <div id="menu-items">
        <h1>Our Tasty Menu</h1>
        <p>Bacon ipsum dolor amet shankle leberkas venison picanha rump buffalo tail. Salami ground round strip steak</p>
        <p><em>Click on any menu item to learn more.</em></p>
        
        <hr>
        <br>
        <br>
        <br>

        <ul>
            <?php 
            
            foreach($menuItems as $dish => $item){ ?>
                <li class="menuList">
                    <a href="<?php echo $dish; ?>.php"><?php echo $item['title']; ?></a>
                          
                </li>
            <?php } ?>

        </ul>
    </div>

        <br>
        <br>
        <br>
        <hr>

<?php include $_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/footer.php' ;?>