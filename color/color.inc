<?php

// Put the logo path into JavaScript for the live preview.
drupal_add_js(array('color' => array('logo' => theme_get_setting('logo', 'bartik'))), 'setting');

$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'top' => t('Header top'),
    'bottom' => t('Header bottom'),
    'bg' => t('Main background'),
    'sidebar' => t('Sidebar background'),
    'sidebarborders' => t('Sidebar borders'),
    'footer' => t('Footer background'),
    'titleslogan' => t('Title and slogan'),
    'text' => t('Text color'),
    'link' => t('Link color'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Blue Lagoon (default)'),
      'colors' => array(
        'top' => '#0779bf',
        'bottom' => '#48a9e4',
        'bg' => '#ffffff',
        'sidebar' => '#f6f6f2',
        'sidebarborders' => '#f9f9f9',
        'footer' => '#292929',
        'titleslogan' => '#fffeff',
        'text' => '#3b3b3b',
        'link' => '#0071B3',
      ),
    ),
    'firehouse' => array(
      'title' => t('Firehouse'),
      'colors' => array(
        'top' => '#cd2d2d',
        'bottom' => '#cf3535',
        'bg' => '#ffffff',
        'sidebar' => '#f1f4f0',
        'sidebarborders' => '#ededed',
        'footer' => '#1f1d1c',
        'titleslogan' => '#fffeff',
        'text' => '#3b3b3b',
        'link' => '#d6121f',
      ),
    ),
    'ice' => array(
      'title' => t('Ice'),
      'colors' => array(
        'top' => '#d0d0d0',
        'bottom' => '#c2c4c5',
        'bg' => '#ffffff',
        'sidebar' => '#ffffff',
        'sidebarborders' => '#cccccc',
        'footer' => '#24272c',
        'titleslogan' => '#000000',
        'text' => '#4a4a4a',
        'link' => '#019dbf',
      ),
    ),
    'plum' => array(
      'title' => t('Plum'),
      'colors' => array(
        'top' => '#4c1c58',
        'bottom' => '#593662',
        'bg' => '#fffdf7',
        'sidebar' => '#edede7',
        'sidebarborders' => '#e7e7e7',
        'footer' => '#2c2c28',
        'titleslogan' => '#ffffff',
        'text' => '#301313',
        'link' => '#9d408d',
      ),
    ),
    'slate' => array(
      'title' => t('Slate'),
      'colors' => array(
        'top' => '#4a4a4a',
        'bottom' => '#4e4e4e',
        'bg' => '#ffffff',
        'sidebar' => '#ffffff',
        'sidebarborders' => '#d0d0d0',
        'footer' => '#161617',
        'titleslogan' => '#ffffff',
        'text' => '#3b3b3b',
        'link' => '#0073b6',
      ),
    ),
  ),
  'schemes' => array(
    'default' => array(
      'title' => t('Blue Lagoon (Default)'),
      'colors' => array(
        'base' => '#0072b9',
        'link' => '#027ac6',
        'top' => '#2385c2',
        'bottom' => '#5ab5ee',
        'text' => '#494949',
      ),
    ),
    'ash' => array(
      'title' => t('Ash'),
      'colors' => array(
        'base' => '#464849',
        'link' => '#2f416f',
        'top' => '#2a2b2d',
        'bottom' => '#5d6779',
      ),
    ),
    'aquamarine' => array(
      'title' => t('Aquamarine'),
      'colors' => array(
        'base' => '#55c0e2',
        'link' => '#000000',
        'text' => '#696969',
        'top' => '#085360',
        'bottom' => '#007e94',
      ),
    ),
    'chocolate' => array(
      'title' => t('Belgian Chocolate'),
      'colors' => array(
        'base' => '#d5b048',
        'link' => '#6c420e',
        'top' => '#331900',
        'bottom' => '#971702',
      ),
    ),
    'bluemarine' => array(
      'title' => t('Bluemarine'),
      'colors' => array(
        'base' => '#3f3f3f',
        'link' => '#336699',
        'text' => '#000000',
        'top' => '#6598cb',
        'bottom' => '#6598cb',
      ),
    ),
    'citrus' => array(
      'title' => t('Citrus Blast'),
      'colors' => array(
        'base' => '#d0cb9a',
        'link' => '#917803',
        'top' => '#efde01',
        'bottom' => '#e6fb2d',
      ),
    ),
    'cold' => array(
      'title' => t('Cold Day'),
      'colors' => array(
        'base' => '#0f005c',
        'link' => '#434f8c',
        'text' => '#000000',
        'top' => '#4d91ff',
        'bottom' => '#1a1575',
      ),
    ),
    'greenbeam' => array(
      'title' => t('Greenbeam'),
      'colors' => array(
        'base' => '#c9c497',
        'link' => '#0c7a00',
        'top' => '#03961e',
        'bottom' => '#7be000',
      ),
    ),
    'mediterrano' => array(
      'title' => t('Mediterrano'),
      'colors' => array(
        'base' => '#ffe23d',
        'link' => '#a9290a',
        'top' => '#fc6d1d',
        'bottom' => '#a30f42',
      ),
    ),
    'mercury' => array(
      'title' => t('Mercury'),
      'colors' => array(
        'base' => '#788597',
        'link' => '#3f728d',
        'top' => '#a9adbc',
        'bottom' => '#d4d4d4',
        'text' => '#707070',
      ),
    ),
    'nocturnal' => array(
      'title' => t('Nocturnal'),
      'colors' => array(
        'base' => '#5b5fa9',
        'link' => '#5b5faa',
        'top' => '#0a2352',
        'bottom' => '#9fa8d5',
      ),
    ),
    'olivia' => array(
      'title' => t('Olivia'),
      'colors' => array(
        'base' => '#7db323',
        'link' => '#6a9915',
        'top' => '#b5d52a',
        'bottom' => '#7db323',
        'text' => '#191a19',
      ),
    ),
    'pink_plastic' => array(
      'title' => t('Pink Plastic'),
      'colors' => array(
        'base' => '#12020b',
        'link' => '#1b1a13',
        'top' => '#f391c6',
        'bottom' => '#f41063',
        'text' => '#898080',
      ),
    ),
    'shiny_tomato' => array(
      'title' => t('Shiny Tomato'),
      'colors' => array(
        'base' => '#b7a0ba',
        'link' => '#c70000',
        'top' => '#a1443a',
        'bottom' => '#f21107',
        'text' => '#515d52',
      ),
    ),
    'teal_top' => array(
      'title' => t('Teal Top'),
      'colors' => array(
        'base' => '#18583d',
        'link' => '#1b5f42',
        'top' => '#34775a',
        'bottom' => '#52bf90',
        'text' => '#2d2d2d',
      ),
    ),
  ),
  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),

  // Files to copy.
  'copy' => array(
    'logo.png',
  ),

  // Gradient definitions.
  'gradients' => array(
    array(
      // (x, y, width, height).
      'dimension' => array(0, 0, 0, 0),
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => array('top', 'bottom'),
    ),
  ),

  // Color areas to fill (x, y, width, height).
  'fill' => array(),

  // Coordinates of all the theme slices (x, y, width, height)
  // with their filename as used in the stylesheet.
  'slices' => array(),

  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files.
  'preview_css' => 'color/preview.css',
  'preview_js' => 'color/preview.js',
  'preview_html' => 'color/preview.html',

  // Base file for image generation.
  'base_image' => 'color/base.png',
);
