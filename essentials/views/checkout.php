<?php
    define('TITLE', "Checkout | Ice Cream Palace");
    include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/header.php');

    $errMessage = "<h4 class='error'>All fields are required.</h4>";
    $scoopVal = $flavorVal = $coneVal = $totalPrice = '';
    $sum = $sum1 = $sum2 = $discount = $count1 = 0;

    function discountOffered($data, $discount){
        $output = $data - ($data * ($discount / 100));
        return number_format((float)$output, 2, '.', '');
    }
?>

<!-----------------------------------------------------ICE-CREAM-CONES--------------------------------------------------------------------->

<form action = "final.php" method="post"> 
    <?php
        if(isset($_POST['ice-cream-cones'])){
            if(isset($_POST['scoop']) && isset($_POST['flavors']) && isset($_POST['cones'])){
                $scoopVal = $_POST['scoop']; 
                $flavorVal = $_POST['flavors']; 
                $coneVal = $_POST['cones']; 
        ?>
        <table>
            <tr><th>Flavors</th> <th>Price</th></tr>
    <?php
                foreach($flavorVal as $key => $value){ ?>
                        <tr><td><?php echo $value; ?></td><td><strong>$ </strong><?php echo $flavors[$value]['price']; ?><sup>00</sup></td></tr>
    <?php
                    $sum += (int)$flavors[$value]['price'];
                    $count1 += count((array)$flavorVal[$key]);
                }
                foreach((array)$coneVal as $key => $value){ 
                    $coneVal = $cones[$value]['price'];  
                }
    ?>
        </table>
        <table>
            <th style="text-align:center;" colspan="2">Final Items</th>
                <tr><td><?php echo "Type of Cone: "; ?></td><td><?php echo "$value"; ?></td></tr>
                <tr><td><?php echo "No. of Scoops: "; ?></td><td><?php echo "$scoopVal Scoop(s)"; ?></td></tr>
                <tr><td><?php echo "No. of Flavors: "; ?></td><td><?php echo "$count1 Flavor(s)"; ?></td></tr>

                <tfoot>
                    <th>Total Price:</th><th><strong>$ </strong><?php 
                        $avg = $sum / $count1;
                        $totalPrice = ($avg * $scoopVal) + $coneVal;
                        echo round($totalPrice, 2);
                    ?></th>
                </tfoot>	
        </table>
    <?php
            }
            if(empty($_POST['scoop']) || empty($_POST['flavors']) || empty($_POST['cones'])){
                die("$errMessage <br /><br /><a href='ice-cream-cones.php' class='button block'>Try again!</a>");
            }
    ?>
        <h4 class='error'>Sorry, there is NO Discount available for this product</h4>

        <input type="submit" class="button next" value="Purchase" name="final">
    <?php
    }
                
//-----------------------------------------------------MILKSHAKES--------------------------------------------------------------------->
    
    if(isset($_POST['milkshakes'])){
        if(isset($_POST['flavors']) && isset($_POST['milkType'])){
            $flavorVal = $_POST['flavors'];
            $milkTypeVal = $_POST['milkType'];
    ?>
        <table>
            <tr><th>Items</th> <th>Price</th></tr>
    <?php
            foreach((array) $flavorVal as $key => $value) { ?>
                <tr><td><?php echo $value; ?></td><td><strong>$ </strong><?php echo $flavors[$value]['price']; ?><sup>00</sup></td></tr>
    <?php
                $sum1 += (int)$flavors[$value]['price'];
            }
            foreach((array) $milkTypeVal as $key => $value){ ?>
                <tr><td><?php echo $value; ?></td><td><strong>$ </strong><?php echo $type[$value]['price']; ?><sup>00</sup></td></tr>
    <?php
                $sum2 += (int)$type[$value]['price'];
            }
    ?>
        		<tfoot><th>Total Price:</th><th><strong>$ </strong><?php $totalPrice = $sum1 + $sum2; echo $totalPrice;?><sup>00</sup></th></tfoot>         
        </table>	
    <?php   }
        if(empty($_POST['flavors']) || empty($_POST['milkType'])){
            die("$errMessage <br /><br /><a href='milkshakes.php' class='button block'>Try again!</a>");
        }
    ?>
        <h5>20% Discount on the delicious Milkshakes!!!</h5>
        <table>
            <tfoot><th style="text-align:center;">After Discount, Price:</th><th style="text-align:center;"><strong>$ </strong><?php echo discountOffered($totalPrice, 20); ?></tfoot>	
        </table>
        <input type="submit" class="button next" value="Purchase" name="final">
    <?php 
    }
    
//--------------------------------------------------FLOATS------------------------------------------------------------------->
    
    if(isset($_POST['floats'])){
        if(isset($_POST['scoops']) && isset($_POST['flavors']) && isset($_POST['sodas']) && $_POST['scoops'] != 0){
            $scoopVal = $_POST['scoops'];
            $flavorVal = $_POST['flavors'];
            $sodaVal = $_POST['sodas'];
    ?>
        <table>
            <tr><th>Flavors</th> <th>Price</th></tr>
    <?php
            foreach((array) $flavorVal as $key => $value) { ?>
                <tr><td><?php echo $value; ?></td><td><strong>$ </strong><?php echo $flavors[$value]['price']; ?><sup>00</sup></td></tr>
    <?php
                $sum1 += (int)$flavors[$value]['price'];
                $count1 += count((array)$flavorVal[$key]);
            }?>
        </table>
        <table>
            <tr><th>Soda</th> <th>Price</th></tr>
    <?php
            foreach((array) $sodaVal as $key => $value) { ?>
                <tr><td><?php echo $value; ?></td><td><strong>$ </strong><?php echo $sodas[$value]['price']; ?><sup>00</sup></td></tr>
    <?php
                $sum2 += (int)$sodas[$value]['price'];
                $sodaVal = $value;
            }
    ?>
        </table>
        <table>
            <th style="text-align:center;" colspan="2">Final Items</th>
                <tr><td><?php echo "No. of Scoops: "; ?></td><td><?php echo "$scoopVal Scoop(s)"; ?></td></tr>
                <tr><td><?php echo "No. of Flavors: "; ?></td><td><?php echo "$count1 Flavor(s)"; ?></td></tr>
                <tr><td><?php echo "Soda:  "; ?></td><td><?php echo $sodaVal; ?></td></tr>
            <tfoot><th>Total Price:</th><th><strong>$ </strong><?php 
                $avg = $sum1 / $count1;
                $totalPrice = ($avg * $scoopVal) + $sum2;
                echo round($totalPrice, 2); ?></th>
            </tfoot>	
        </table>
    <?php   }
        if(empty($_POST['scoops']) || empty($_POST['flavors']) || empty($_POST['sodas'])){
            die("$errMessage <br /><br /><a href='floats.php' class='button block'>Try again!</a>");
        }
    ?>
        <h5>35% Discount on all Floats!!!</h5>
        <table>
            <tfoot><th>After Discount, Price:</th><th><strong>$ </strong><?php echo discountOffered($totalPrice, 35); ?></th></tfoot>	
        </table>
        <input type="submit" class="button next" value="Purchase" name="final">
    <?php   }   ?>

</form>
<?php include($_SERVER['DOCUMENT_ROOT'].'/icecreamshop/essentials/main/footer.php'); ?>