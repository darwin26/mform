<?php

if (!function_exists('add_parsley'))
{
  function add_parsley($params) {
    global $REX;
    
    $out = $params['subject'];
    
    $js = '<script type="text/javascript" src="'.$REX['HTDOCS_PATH'].'files/addons/mform/parsley/i18n/messages.de.js"></script><script type="text/javascript" src="'.$REX['HTDOCS_PATH'].'files/addons/mform/parsley/parsley.js"></script></head>';
    
    $init = 'data-validate="parsley" id="REX_FORM">';
    
    if($REX['VERSION'].$REX['SUBVERSION'] <= "44")
    {
      $jquery = '<script src="'.$REX['HTDOCS_PATH'].'files/addons/mform/jquery-1.8.3.min.js"';
      $out = str_replace('<script src="media/jquery.min.js"', $jquery, $out);
    }
    
    $out = str_replace('id="REX_FORM">', $init, $out);
    $out = str_replace('</head>', $js, $out);
    
    return $out;
  }
}
