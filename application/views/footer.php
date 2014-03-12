	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>libs/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>libs/bootstrap/js/bootstrap.min.js"></script>
    <?php
    if( isset( $libs ) ){
        foreach( $lib_js as $value ){
            echo $value;
        }
    }
    if( isset( $debug ) ){
        if( $debug ){
        	echo $this->output->enable_profiler( TRUE );
        }
    }
    ?>
  </body>
</html>