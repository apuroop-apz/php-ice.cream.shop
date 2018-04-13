<?php
    define("TITLE", "Floats | Ice Cream Palace"); 
    include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/header.php');
    session_start() ?>

<form action="checkout.php?item=floats" method="post">
    <h1>How many scoops?</h1>
        <p>
            <input type="number" name="scoops" value="" placeholder="Choose a number." style="font-size: 20px;font-family:monospace;border-radius: 3px;">
        </p>
            
<!--If the scoops present here are in an array, we could provide a working 'price' variable and do the math for later. 
I first used a range function to get a list of numbers since the requirements were 'Floats can be made with any number of scoops'.
Later changed it to a simple input type.-->
            <table>
                <tr><th>Scoops</th><th>Price</th></tr>
                <tr><td>One</td><td><strong>$ </strong>1<sup>00</sup></td></tr>
                <tr><td>Two</td><td><strong>$ </strong>2<sup>00</sup></td></tr>
                <tr><td>Three</td><td><strong>$ </strong>3<sup>00</sup></td></tr>
                <tr><td>...</td><td><strong> </strong>...<sup></sup></td></tr>
                <tr><td>Twenty Five</td><td><strong>$ </strong>25<sup>00</sup></td></tr>
                <tr><td>...</td><td><strong> </strong>...<sup></sup></td></tr>
            </table>
    
    <h1>Choose your flavor.</h1>
        <h4> Use Ctrl key to select multiple flavors.</h4>
            <p>
                <select name="flavors[]" multiple="multiple" size="5" style="width: 200px;height: 180px;font-size: 20px;font-family:monospace;border-radius: 3px;">
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
    
    <h1>Choose your Soda.</h1>
        <p>
            <select name="sodas" style="font-size: 20px;font-family:monospace;border-radius: 3px;">
                <option value="" disabled selected>Select...</option>
                    <?php foreach($sodas as $value => $soda){ ?>
                <option value="<?php echo $value; ?>"> <?php echo $soda['title']; ?> 
                    <?php } ?>
                </option>
            </select>
        </p>
            <table>
                <tr><th>Sodas</th> <th>Price</th></tr>
                    <?php 
                        foreach($sodas as $key => $value){ ?>
                <tr><td><?php echo $key; ?></td><td><strong>$ </strong><?php echo $value['price']; ?><sup>00</sup></td></tr>
                    <?php } ?>
            </table>
    <input type="submit" class="button next" name="floats" value="Submit" style="width: 150px;">
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/footer.php'); ?>