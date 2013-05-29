<?php

function contenido(){
?>

<!-- content -->
                    <div class="content">
                        <!-- content-header -->
                        <div class="content-header">
                                                        <h2><i class="icofont-home"></i> Banner </h2>
                        </div><!-- /content-header -->
                        
                        <!-- content-breadcrumb -->
                        <div class="content-breadcrumb">
                            
                            <!--breadcrumb-->
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="icofont-home"></i> Portal <span class="divider">›</span> Banner </a>
                            </ul><!--/breadcrumb-->
                        </div><!-- /content-breadcrumb -->
                        
                        <!-- content-body -->
                        <div class="content-body">
                            <!-- dashboar -->
                            
                            <!-- tab stat -->
                            <div class="box-tab corner-all">
                                <div class="box-header corner-top">
                                    <div class="header-control pull-right">
                                        <a data-box="collapse"><i class="icofont-caret-up"></i></a>
                                    </div>
                                    <ul class="nav nav-tabs" id="tab-stat">
                                        <li class="active"><a data-toggle="tab" href="#buscar">Buscar</a></li>
                                        <li><a data-toggle="tab" href="#nuevo">Nuevo</a></li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="buscar">
                                            <div class="row-fluid">
                                                
                                                Aqui va buscar
                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nuevo">
                                            <div class="row-fluid">
                                                
                                                <form class="form-horizontal" id="frmbanner" method="post" action="registro/ins_banner.php" enctype="multipart/form-data">
                                                        <fieldset>
                                                            <legend>Nuevo banner</legend>
                                                            <div class="control-group">
                                                                <label class="control-label" for="descripcion">Descripcion</label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="descripcion" id="descripcion" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="subirimagen">Subir Imagen</label>
                                                                <div class="controls">
                                                                    <input type="file" class="grd-white"  name="subirimagen" id="subirimagen" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="web">Direccion Web</label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white"  name="web" id="web" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="fini">Fecha Inicial</label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white"  name="fini" id="fini" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="ffin">Fecha Final</label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white"  name="ffin" id="ffin" />
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                                <button type="button" class="btn">Cancelar</button>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /tab stat -->

                            </div><!--/content-body -->
                    </div><!-- /content -->


<?php }
include './master/master.php';?>



