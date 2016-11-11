<?php

add_action('after_switch_theme', 'admin_role');

function admin_role() {

  $role = get_role( 'administrator');

  	// MEETINGS ROLES
    $role->add_cap('delete_meeting');
    $role->add_cap('edit_meeting');
    $role->add_cap('edit_meetings');
    $role->add_cap('publish_meetings');    

    // PROPOSITIONS ROLES
    $role->add_cap('delete_proposition');
    $role->add_cap('edit_proposition');
    $role->add_cap('edit_propositions');
    $role->add_cap('publish_propositions');    

    // PROPOSITIONS ROLES
    $role->add_cap('delete_new');
    $role->add_cap('edit_new');
    $role->add_cap('edit_news');
    $role->add_cap('publish_news');

}