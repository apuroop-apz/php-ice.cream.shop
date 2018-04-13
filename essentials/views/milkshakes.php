<?php
    define("TITLE", "MilkShakes | Ice Cream Palace"); 
    include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/header.php');
?>

<form action="checkout.php?item=milkshakes" method="post">
        <h1>Choose your flavor:</h1>
                <p>
                    <select name="flavors" style="font-size: 20px;font-family:monospace;border-radius: 3px;">
                        <option value="" disabled selected>Select...</option>
                        <?php foreach($flavors as $value => $flavor){ ?>
                        
                            <option value="<?php echo $value; ?>"> <?php echo $flavor['title']; ?> 

                        <?php } ?>

                            </option>
                    </select>
                </p>
            <table>
                <tr><th>Flavor</th> <th>Price</th></tr>
                    <?php 
                        foreach($flavors as $key => $value){ ?>
                <tr><td><?php echo $key; ?></td><td><strong>$ </strong><?php echo $value['price']; ?><sup>00</sup></td></tr>
                    <?php } ?>
            </table>
    
        <h1>Choose your favorite type of milk.</h1>
                <p>
                    <select name="milkType" style="font-size: 20px;font-family:monospace;border-radius: 3px;">
                        <option value="" disabled selected>Select...</option>
                        
                        <?php foreach($type as $value => $milkType){ ?> 
                        
                            <option value="<?php echo $value; ?>"> <?php echo $milkType['title']; ?> 

                        <?php } ?>

                            </option>
                    </select>
                </p>
            <table>
                <tr><th>Type of Milk</th> <th>Price</th></tr>
                    <?php 
                        foreach($type as $key => $value){ ?>
                <tr><td><?php echo $key; ?></td><td><strong>$ </strong><?php echo $value['price']; ?><sup>00</sup></td></tr>
                    <?php } ?>
            </table>
    <input type="submit" class="button next" name="milkshakes" value="Submit" style="width: 150px;">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/footer.php'); ?>