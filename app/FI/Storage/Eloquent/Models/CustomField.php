<?php

/**
 * This file is part of FusionInvoice.
 *
 * (c) FusionInvoice, LLC <jessedterry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FI\Storage\Eloquent\Models;

class CustomField extends \Eloquent {
	
	protected $guarded = array('id');

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    public function scopeForTable($query, $table)
    {
    	return $query->where('table_name', '=', $table);
    }

}