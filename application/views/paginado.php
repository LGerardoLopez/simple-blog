<nav>
    <ul class="pager">
        <?php 
           for ($i=1; $i <= $totalPaginas; $i++) { 
        ?>            
            <li><a href="#up" class="btn btn-default btn-lg page"  data-page="<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php
           }
        ?>                    
    </ul>
</nav>