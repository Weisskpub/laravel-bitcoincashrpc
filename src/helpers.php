<?php

if (! function_exists('bitcoincashd')) {
    /**
     * Get bitcoincashd client instance.
     *
     * @return \Weisskpub\Bitcoincash\Client
     */
    function bitcoincashd()
    {
        return app('bitcoincashd');
    }
}
