<?php
include '../../../../wp-load.php';
//$wpdb	=	new WP_Query();
global $wpdb;
//print_r($_POST);

$data	=	get_term_by( 'id',$_POST['name'], 'dish' );
//echo ;
/*$query = "
        SELECT      $wpdb->posts.post_content
        FROM        $wpdb->posts
		left join on $wpdb->posts.
        WHERE       $wpdb->posts.post_title ='".$_POST['name']."'
        AND         $wpdb->posts.post_type = 'dishes'
		AND         $wpdb->posts.post_status = 'publish'
        ORDER BY    $wpdb->posts.post_title
";
*/
//$data	=	$wpdb->get_results($query);
echo $json_str =  '{"cont":"'.htmlentities($data->description).'"}';
?>