<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_neogym_theme_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => __('NeoGym Options', 'neogym'),
  'menu_slug'  => 'neogym-options',
  'menu_icon'   => 'dashicons-admin-plugins',
  'menu_position' => 20,
) ); 

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => __('Contact', 'neogym'),
  'icon'   => 'fas fa-envelope',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'phone_no',
      'type'  => 'text',
      'title' => __('Phone No', 'neogym'),
      'placeholder' => esc_attr( 'Enter Phone no' ),
    ),

    array(
      'id'    => 'email',
      'type'  => 'text',
      'title' => __('Email', 'neogym'),
      'placeholder' => esc_attr('Enter your email'),
    ),

    array(
      'id'    => 'addresses',
      'type'  => 'textarea',
      'title' => __('Address', 'neogym'),
      'placeholder' => 'Enter address',
    ),
  )
) );

//
// Copyrights
//
CSF::createSection( $prefix, array(
  'title' => 'Copyrights',
  'icon'  => 'fas fa-copyright',
  'fields' => array(
      array(
        'id'    => 'copy_right',
        'type'  => 'textarea',
        'title' => __('Copyrights Text', 'neogym'),
        'subtitle' => __('without year(year is automatically generated)', 'neogym'),
        'placeholder' => 'Enter Copyrights text',
      ),

      array(
        'id'    => 'dev_name',
        'type'  => 'text',
        'title' => __('Developer Name', 'neogym'),
        'placeholder' => 'Enter developer name',
      ),
      array(
        'id'    => 'dev_url',
        'type'  => 'text',
        'title' => __('Developer Link', 'neogym'),
        'placeholder' => 'Enter developer social link',
      ),


    ),
 ));

//
//Repeater Practice section
//

CSF::createSection($prefix, [
  'title'     => 'Repeater Practice',
  'icon'      => 'fas fa-pen',
  'fields'    => [

          [

              'id'      => 'social_links',
              'type'    => 'repeater',
              'title'   => __('Socials Links', 'neogym'),
              'fields'  => [
                      [
                        'id'    => 'social_name',
                        'type'  => 'text',
                        'title' => __('Social Platform name', 'neogym'),
                        'placeholder' => 'Enter social name',
                      ],

                      [
                        'id'    => 'social_url',
                        'type'  => 'text',
                        'title' => __('Social Platform Link', 'neogym'),
                        'placeholder' => 'Enter social link',
                      ],


              ],
          ],

  ],


]);


//
//Group Practice section
//


CSF::createSection($prefix, [
  'title'     => __('Group field practice', 'neogym'),
  'icon'      => 'fas fa-edit',
  'fields'    =>[

        [
          'id'       => 'person_info',
          'title'    => 'Person Info',
          'type'     => 'group',
          'fields'   => [

                [
                  'id'       => 'p_name',
                  'title'    => __('Person Name', 'neogym'),
                  'type'     => 'text',
                  'placeholder' => 'Enter name',
                ],

                 [
                  'id'       => 'p_phone',
                  'title'    => __('Person Phone', 'neogym'),
                  'type'     => 'text',
                  'placeholder' => 'Enter pnone number',
                ],

                 [
                  'id'       => 'p_email',
                  'title'    => __('Person Email', 'neogym'),
                  'type'     => 'text',
                  'placeholder' => 'Enter email',
                ],
          ]


        ]


  ],

]);

//file section practice
CSF::createSection($prefix, [
  'title'     => __('Upload field Practice', 'neogym'),
  'icon'      => 'fas fa-image',
  'fields'    => [

      [
        'id'          => 'image_upload',
        'title'       => __('Image upload', 'neogym'),
        'type'        => 'upload',
        'preview'     => true,
      ],

      [
        'id'          => 'gallery_image',
        'title'       => __('Gallery Image upload', 'neogym'),
        'type'        => 'gallery',
        'preview'     => true,
      ],

  ],


]);


//file section practice
CSF::createSection($prefix, [
  'title'     => __('Media field Practice', 'neogym'),
  'icon'      => 'fas fa-image',
  'fields'    => [

      [
        'id'          => 'media_image',
        'title'       => __('Media Image upload', 'neogym'),
        'type'        => 'media',
        'preview'     => true,
      ],

      [
        'id'          => 'media_img',
        'title'       => __('Image upload', 'neogym'),
        'type'        => 'media',
        'preview'     => true,
        'url'         => false,
      ],

  ],


]);
