<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Salsabiela 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url('uas/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('uas/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('uas/js/jqBootstrapValidation.js') ?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url('uas/js/clean-blog.min.js') ?>"></script>
    
    <!-- Data Tables -->
    <script src="<?=base_url()?>bower_components/DataTables/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "processing":true,
            "serverSide":true,
            "lenghtMenu":[[1,3,6,-1],[1,3,6,"All"]],
            "ajax":{
                url : "<?php echo site_url('Ekstra/data_server') ?>",
                type : "POST"
            },
            "columnDefs":
            [
                {
                    "targets":0,
                    "data":"name",
                },
                {
                    "targets":1,
                    "data":"address",
                },
                {
                    "targets":2,
                    "data":"email",
                },
                {
                    "targets":3,
                    "data":"telephone",
                },
                {
                    "targets":4,
                    "data":"class",
                },
                {
                    "targets":5,
                    "data":"ekstra",
                },
                {
                    "targets":6,
                    "data":null,
                    "searchable":false,
                    "render":function(data,type,full,meta){
                        return '<a href="<?site_url()?>/Ekstra/update/'+data["id"]+'">Update</a>'
                    }
                },
                                {
                    "targets":7,
                    "data":null,
                    "searchable":false,
                    "render":function(data,type,full,meta){
                        return '<a href="<?site_url()?>/Ekstra/delete/'+data["id"]+'">Delete</a>'
                    }
                },

            ]
        });
    });
    </script>
</body>
</html>