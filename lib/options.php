<?php
/**
 * Options functions
 *
 * @package Ychange
 */

/**
 * Return gender options
 * @param  boolean $flip Should the keys and values be exchanged
 * @return array         An array of options
 */
function ychange_get_gender_options($flip = false)
{
    $options = [
        'male' => elgg_echo('ychange:gender:male'),
        'female' => elgg_echo('ychange:gender:female'),
        'other' => elgg_echo('ychange:gender:other'),
    ];

    return $flip ? array_flip($options) : $options;
}

/**
 * Return partner options
 * @param  boolean $flip Should the keys and values be exchanged
 * @return array         An array of options
 */
function ychange_get_partner_options($flip = false)
{
    $options = [
        'germany' => elgg_echo('ychange:location:germany'),
        'czech' => elgg_echo('ychange:location:czech'),
        'estonia' => elgg_echo('ychange:location:estonia'),
        'switzerland' => elgg_echo('ychange:location:switzerland'),
    ];

    return $flip ? array_flip($options) : $options;
}

/**
 * Return class grade options
 * @param  boolean $flip Should the keys and values be exchanged
 * @return array         An array of options
 */
function ychange_get_class_grade_options($flip = false)
{
    $options = [];

    foreach ( range(1, 12) as $grade )
    {
        $options[$grade] = $grade;
    }

    $options['other'] = elgg_echo('ychange:class_grade:other');

    return $flip ? array_flip($options) : $options;
}

/**
 * Return language options
 * @param  boolean $flip Should the keys and values be exchanged
 * @return array        An array of options
 */
function ychange_get_language_options($flip = false)
{
    $options = [
        'en' => 'English',
        'de' => 'Deutsch',
        'fr' => 'Français',
        'it' => 'Italiano',
        'cs' => 'Čeština',
        'et' => 'Eesti',
    ];

    return $flip ? array_flip($options) : $options;
}
