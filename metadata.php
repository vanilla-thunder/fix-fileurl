<?php
$sMetadataVersion = '1.1';
$aModule          = array(
    'id'          => 'fix-fileurl',
    'title'       => '<b>fix:</b> oxArticle->getFileUrl()',
    'description' => 'brings back forgotten function getFileUrl()',
    'thumbnail'   => 'bestlife.png',
    'version'     => '0.1.0',
    'author'      => 'Marat Bedoev, Bestlife AG',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'http://www.bestlife.ag',
    'extend'      => array('oxarticle' => 'fix-fileurl/bla_fixfileurl_oxarticle')
);
