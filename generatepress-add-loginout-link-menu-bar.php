<?php
add_action('generate_menu_bar_items','add_loginout_link', 15);
function add_loginout_link() {
   $item = '<span class="menu-bar-item wc-menu-item has-items"><a class="my-account-link" href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '"> <span class="gp-icon"><svg width="1em" height="1em" viewBox="0 0 900 900" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M288 320a224 224 0 1 0 448 0 224 224 0 1 0-448 0zm544 608H160a32 32 0 0 1-32-32v-96a160 160 0 0 1 160-160h448a160 160 0 0 1 160 160v96a32 32 0 0 1-32 32z"/></svg></span> </a></span>';
   echo $item;
}
