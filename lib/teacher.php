<?php
/**
* Teacher role helper functions
*
* @package Ychange
*/

/**
 * Determines if logged in user is a teacher or admin
 * @return boolean
 */
function ychange_is_teacher_or_admin_logged_in()
{
    return elgg_is_admin_logged_in() || ( elgg_is_logged_in() && ychange_is_teacher(elgg_get_logged_in_user_entity()) );
}

/**
 * Determines if user has a teacher role
 * @param  \ElggUser $user User object
 * @return boolean
 */
function ychange_is_teacher(\ElggUser &$user)
{
    return $user->teacher && $user->teacher === 'yes';
}

/**
 * Tries to set teacher role to a user
 * @param  \ElggUser $user User object
 * @return boolean
 */
function ychange_make_teacher(\ElggUser &$user)
{
    if ( !elgg_is_admin_logged_in() )
    {
        return false;
    }

    $user->teacher = 'yes';

    return $user->save();
}

/**
 * Tries to remove teacher role from a user
 * @param  \ElggUser $user User object
 * @return boolean
 */
function ychange_remove_teacher(\ElggUser &$user)
{
    if ( !elgg_is_admin_logged_in() )
    {
        return false;
    }

    $user->teacher = 'no';

    return $user->save();
}

/**
 * Determines if user is allowed to create groups
 * @param  \ElggUser $user User object
 * @return boolean
 */
function ychange_can_create_groups(\ElggUser $user)
{
    return elgg_is_admin_logged_in() || ychange_is_teacher($user);
}