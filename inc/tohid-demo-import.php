<?php
function tohid_import_files() {
	return array(
		array(
			'import_file_name'             => __('Tohid Demo Data Import', 'tohid'),
			// 'categories'                   => array( 'Category 1', 'Category 2' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . '/demodata/tohid-content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demodata/tohid-widgets.wie',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demodata/acf-data.json',
			'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
			'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
		),
		
	);
}
add_filter( 'ocdi/import_files', 'tohid_import_files' );