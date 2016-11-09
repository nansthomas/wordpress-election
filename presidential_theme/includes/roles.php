<?php

add_action('after_switch_theme', 'admin_role');

function admin_role() {

  $role = get_role( 'administrator');
    $role->add_cap('delete_meeting');
    $role->add_cap('edit_meeting');
    $role->add_cap('edit_meetings');
    $role->add_cap('publish_meetings');

}