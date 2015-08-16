<?php
class bla_fixfileurl_oxarticle extends bla_fixfileurl_oxarticle_parent
{
    public function getFileUrl()
    {
        return $this->getConfig()->getPictureUrl( 'media/' );
    }
    
}