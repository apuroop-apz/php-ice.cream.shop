<?php 
define('TITLE', "Ice Cream Cones | Ice Cream Palace"); 
include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/header.php');
?>

    <form action="checkout.php?item=ice-cream-cones" method="post">
        <h3>How many scoops?<br /><br /></h3>

            <p>
                    <input type="radio" name="scoop" value="1" <?php if (isset($scoopVal) && $scoopVal=='1') echo "checked";?>>
                    <label for="scoop"> One</label> &nbsp; &nbsp;

                    <input type="radio" name="scoop" value="2" <?php if (isset($scoopVal) && $scoopVal=='2') echo "checked";?>>
                    <label for="scoop"> Two</label>
                
            </p> 
        <hr>
        <h3>Types of Cones.</h3>
            <table>
                <tr><th>Cone</th> <th>Price</th></tr>
                    <?php 
                        foreach($cones as $key => $value){ ?>
                <tr><td><?php echo $key; ?></td><td><strong>$ </strong><?php echo $value['price']; ?><sup>00</sup></td></tr>
                    <?php } ?>
            </table>
                <p>
                    <select name="cones" style="font-size: 20px;font-family:monospace;border-radius: 3px;">
                        <option value="" disabled selected>Select...</option>
                        <?php foreach($cones as $key => $value){ ?>
                        
                            <option value="<?php echo $key; ?>"> <?php echo $value['title']; ?> 

                        <?php } ?>

                            </option>
                    </select>
                </p>
        <hr>
        <h3>Choose your flavor:</h3>
            <table>
                <tr><th>Flavor</th> <th>Price</th></tr>
                    <?php 
                        foreach($flavors as $key => $value){ ?>
                <tr><td><?php echo $key; ?></td><td><strong>$ </strong><?php echo $value['price']; ?><sup>00</sup></td></tr>
                    <?php } ?>
            </table>
        
            <h4> Use Ctrl key to select multiple flavors.</h4>
                    <p>
                    <select name="flavors[]" multiple="multiple" required size="10" style="width: 200px;height: 180px;font-size: 20px;font-family:monospace;border-radius: 3px;">
                        <option value="" disabled selected>Select...</option>
                        <?php foreach($flavors as $value => $flavor){ ?>

                            <option value="<?php echo $value; ?>"> <?php echo $flavor['title']; ?> 

                        <?php } ?>

        </option></select> </p>

        <input type="submit" class="button next" name="ice-cream-cones" value="Submit" style="width: 150px;">
    </form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/footer.php'); ?>