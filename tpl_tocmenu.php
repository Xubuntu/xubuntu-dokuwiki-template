<?php
	ob_start( ); 
	tpl_toc( );
	$toc = ob_get_clean( );

	if( strlen( $toc ) > 0 ) {
		echo '<div class="action menu" href="#">Table of Contents ' . $toc . '</div>';
	}
?>
