<div class="bp-st-transform-text-wrapper">

    <div class="bp-st-transform-text">
        <?php
            $split_text_string  =  '<%1$s class="bp-st-transform-text-title">%2$s</%1$s>';
        ?>

		<?php if ( $settings->split_mode == 'letter' ) { ?>

			<?php if ( $settings->split_count <= 0 ) {

		        $split_text  =  "<div class='bp-st-rest-text' >" . substr( $settings->text, 0 ) . "</div>";

		        echo sprintf( $split_text_string, $settings->html_tag, $split_text  );

			} else {
			    $split_text  =  substr( $settings->text, 0, $settings->split_count );

			    $split_text  =  str_replace(" ","&nbsp;", $split_text);

		        $split_text  =  "<div class='bp-st-split-text'>" . $split_text . "</div> ";

		        $rest_text   =  substr( $settings->text, $settings->split_count, strlen( $settings->text ) - $settings->split_count );

		        $rest_text   =  str_replace(" ","&nbsp;", $rest_text);

		        $rest_text   =  "<div class='bp-st-rest-text'>" . $rest_text . "</div>";

				echo sprintf( $split_text_string, $settings->html_tag,$split_text . $rest_text );

			} ?>

		<?php } else { ?>

			<?php
			$arr = explode( " ", $settings->text );

			if ( count( $arr ) <= $settings->split_count || $settings->split_count <= 0 ) {

				$split_text = "<div class='bp-st-split-text'>" . $settings->text . "</div>";

				echo sprintf( $split_text_string, $settings->html_tag, $split_text );

			} else {

				$split_text = "<div class= 'bp-st-split-text'>" . implode( " ", array_slice( $arr, 0, $settings->split_count ) ) . "&nbsp;</div>";

				$rest_text  = "<div class= 'bp-st-rest-text'>" . implode( " ", array_slice( $arr, $settings->split_count, count( $arr ) ) ) . "</div>";

				echo sprintf( $split_text_string, $settings->html_tag, $split_text . $rest_text );
			}
			?>

		<?php } ?>
    </div>

</div>
