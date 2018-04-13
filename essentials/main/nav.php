<ul>
    <?php
        foreach($navLinks as $item){
            echo "<li><a href=\"/icecreamshop/$item[myLink]\">$item[myHeading]</a></li>";
        }
    ?>
</ul> 