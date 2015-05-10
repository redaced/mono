<?php 
	include 'layout/header.php';
	include('php/dbHandler.php');
    $as = search();
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                	<?php if($as):?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php foreach ($as as $a):?> 
                                        <tr class="odd gradeX">
                                            <td><a rel="facebox" href="#info"><p onclick="popup"><?php echo $a['title']?></p></a></td>
                                            
                                            <div id="info" style="display:none;">
                                                <p class="headeee"><?php echo $a['title']."<br>"?></p>
                                                <p class="bodyyy">
                                                <?php 
                                                    mb_internal_encoding("UTF-8"); 
                                                    $pos = strpos($a['content'], $a['name']);
                                                    $asd = $a['content'];
                                                    // echo gettype($asd);
                                                    echo $asd;
                                                ?>
                                                </p>
                                                <a href="<?php echo $a['site'].$a['url']; ?>" target="_blank"> Дэлгэрэнгүй</a> 
                                            </div>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <?php else:?>
                    <a href="/monitor/index.php">Back</a>
                    <p>Олдсонгүй</p>
                	<?php endif;?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
