<?php
function bickleigh_css_alter(&$css) {
  unset($css['modules/system/system.base.css']);
  unset($css['modules/system/system.menus.css']);
  unset($css['modules/system/system.messages.css']);
  unset($css['modules/system/system.theme.css']);
  unset($css['sites/all/modules/civicrm/css/civicrm.css']);
}
