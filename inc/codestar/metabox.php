<?php
if ( class_exists( 'CSF' ) ) {

    // Create a metabox
    $prefix = 'your_meta_field_prefix';

    CSF::createMetabox( $prefix, array(
        'title'     => 'Custom Meta Box',
        'post_type' => 'post', // Post types where the meta box will appear
    ));

    // Add fields
    CSF::createSection( $prefix, array(
        'fields' => array(
            array(
                'id'    => 'custom_text', // Field ID
                'type'  => 'text',       // Field type
                'title' => 'Custom Text', // Field title
            ),
            array(
                'id'    => 'custom_checkbox',
                'type'  => 'checkbox',
                'title' => 'Custom Checkbox',
                'label' => 'Enable this option',
            ),
            array(
                'id'      => 'custom_select',
                'type'    => 'select',
                'title'   => 'Custom Select',
                'options' => array(
                    'option-1' => 'Option 1',
                    'option-2' => 'Option 2',
                    'option-3' => 'Option 3',
                ),
                'default' => 'option-1',
            ),
        ),
    ));
}
?>
