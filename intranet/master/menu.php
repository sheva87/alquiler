<?php

include '../cn/cn.php';
$cn = conectarse();

?>
<!--side bar-->
                    <aside class="side-left">
                        <ul class="sidebar">
                            <?php
                            
                            $rsmenu = "SELECT nidopcion,copcion,cruta,cimagen FROM opcion WHERE cpadre='0' AND nestado='1'";
                            $menu = mysql_query($rsmenu);
                            while ($rsmenu = mysql_fetch_array($menu)) { 
                            
                            $nidopcion =  $rsmenu['nidopcion'];
                            
                            $rscantidad = "SELECT COUNT(*) total FROM opcion WHERE cpadre='$nidopcion' AND nestado='1'";
                            $cantidad = mysql_query($rscantidad);
                            $rscantidad = mysql_fetch_array($cantidad);                            
                            $total = $rscantidad['total'];
                            
                            ?>                             
                                                        
                            <li>
                                <a href="<?php echo $rsmenu['cruta'] ?>">
                                    <?php if ($total>0) { ?>
                                    <div class="badge badge-important"><?php echo $total ?></div>
                                    <?php } ?>
                                    <div class="helper-font-24">
                                        <i class="<?php echo $rsmenu['cimagen'] ?>"></i>
                                    </div>
                                    <span class="sidebar-text"><?php echo $rsmenu['copcion'] ?></span>
                                </a>
                                <?php if ($total>0) { ?>
                                <ul class="sub-sidebar-form corner-top shadow-white">
                                    <?php
                                    $rsmenu2 = "SELECT nidopcion,copcion,cruta,cimagen FROM opcion WHERE cpadre='$nidopcion' AND nestado='1'";
                                    $menu2 = mysql_query($rsmenu2);
                                    while ($rsmenu2 = mysql_fetch_array($menu2)) { ?>
                                    <li>
                                        <a href="<?php echo $rsmenu2['cruta'] ?>" class="corner-all">                                            
                                            <span class="sidebar-text"><?php echo $rsmenu2['copcion'] ?></span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            
                            <?php } ?>
                            
                        </ul>
                    </aside><!--/side bar -->