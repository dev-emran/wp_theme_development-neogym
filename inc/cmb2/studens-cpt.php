<?php


if(!function_exists('neogym_register_students_cpt_metabox')){

/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function neogym_register_students_cpt_metabox() {
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_student = new_cmb2_box( array(
		'id'            => 'student_info',
		'title'         => esc_html__( 'Student Information', 'neogym' ),
		'object_types'  => array( 'students' ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.

		/*
		 * The following parameter is any additional arguments passed as $callback_args
		 * to add_meta_box, if/when applicable.
		 *
		 * CMB2 does not use these arguments in the add_meta_box callback, however, these args
		 * are parsed for certain special properties, like determining Gutenberg/block-editor
		 * compatibility.
		 *
		 * Examples:
		 *
		 * - Make sure default editor is used as metabox is not compatible with block editor
		 *      [ '__block_editor_compatible_meta_box' => false/true ]
		 *
		 * - Or declare this box exists for backwards compatibility
		 *      [ '__back_compat_meta_box' => false ]
		 *
		 * More: https://wordpress.org/gutenberg/handbook/extensibility/meta-box/
		 */
		// 'mb_callback_args' => array( '__block_editor_compatible_meta_box' => false ),
	) );


	$cmb_student->add_field( array(
		'name' => esc_html__( 'Student ID', 'cmb2' ),
		'id'   => 'student_id',
		'type' => 'text_medium',
		'attributes' => [
			'disabled'	=> true,
		],

		// 'repeatable' => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
	) );

	$cmb_student->add_field([
		'name'		=> __( "Gender",'neogym'),
		'id'		=> 'neogym_gender',
		'type'		=> 'radio',
		'options'	=> [
			'male' 		=> __( 'Male', 'neogym' ),
			'female' 	=> __( 'Female', 'neogym' ),
			'others' 	=> __( 'Others', 'neogym' ),
		],
	]);


	$cmb_student->add_field([
		'name'		=> __( 'Course Duration', 'neogym' ),
		'id'		=> 'duration',
		'type'		=> 'text',
		'attributes'	=> [
			'placeholder'		=> 'Enter Course duration',

		],


	]);


	$cmb_student->add_field([
		'name'		=> __( "Do you want add GPA?",'neogym'),
		'id'		=> 'do_you',
		'type'		=> 'checkbox',
	]);


	$cmb_student->add_field([
		'name'		=> __( 'GPA', 'neogym' ),
		'id'		=> 'student_gpa',
		'type'		=> 'text_medium',
		'attributes'	=> [
			'data-conditional-id'	=> 'do_you',
			'data-conditional-value' => 'on',
			'placeholder'		=> 'Enter GPA',

		],


	]);

	$cmb_student->add_field([
		'name'			=> __( 'Student Class', 'neogym' ),
		'id'			=> 'neogym_std_class',
		'type'			=> 'select',
		'options'		=> [

			'6' => __( 'Six', 'neogym' ),
			'7' => __( 'Seven', 'neogym' ),
			'8' => __( 'Eight', 'neogym' ),
			'9' => __( 'Nine', 'neogym' ),
			'10' => __( 'Ten', 'neogym' ),

		],


	]); 

	$group = $cmb_student->add_field([
		'name' => __( 'Subjects', 'neogym' ),
		'id' => 'neogym_std_subjects',
		'type' => 'group',
		'options' =>[
			'group_title' => 'subject name',
			'add_button' => 'add',
			'remove_button' => 'remove',
		],
	]);

	$cmb_student->add_group_field($group, [

		'name' => __('Subject Name'),
		'id'   => 'neogym_std_subject',
		'type' => 'text',
		'attributes'	=> [
			'placeholder'	=> 'Enter subject name',

		],

	]);

	$cmb_student->add_group_field($group, [

		'name' => __('Subject Teacher'),
		'id'   => 'neogym_subject_teacher',
		'type' => 'text',
		'attributes'	=> [
			'placeholder'	=> 'Enter teacher name',

		],

	]);

		$cmb_student->add_group_field($group, [

		'name' => __('Subject Grade'),
		'id'   => 'neogym_subject_grade',
		'type' => 'text',
		'attributes'	=> [
			'placeholder'	=> 'Enter grade',

		],

	]);


	$cmb_student->add_field([
		'name'		=> __( 'File Upload', 'neogym' ),
		'id'		=> 'sudent_file',
		'type'		=> 'file',
	]);


	$cmb_student->add_field([
		'name'		=> __( 'Student Admit', 'neogym' ),
		'id'		=> 'sudent_admit',
		'type'		=> 'file',
		'options'	=> [
			'url'	=> false,
		],
		'text'		=> [
			'add_upload_file_text'		=> __( 'Add or Upload Admit', 'neogym' ),
		],
		'query_args'	=> [
			// 'type'		=> 'application/pdf',
			'type'		=> [
				'image/png',
				'image/jpeg'
			],

		],
	]);

	$cmb_student->add_field([
		'name'		=> __( 'Student Gallery', 'neogym' ),
		'id'		=> 'student_gallery',
		'type'		=> 'file_list',

	]);



}
}



add_action( 'cmb2_admin_init', 'neogym_register_students_cpt_metabox' );