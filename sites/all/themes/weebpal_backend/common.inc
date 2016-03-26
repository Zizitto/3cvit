<?php

function weebpal_backend_preprocess_html(&$variables)
{
    $variables['classes_array'][] = 'page-admin';
}