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

use FI\Classes\CurrencyFormatter;

class InvoiceItemAmount extends \Eloquent {

	protected $guarded = array('id');

	public function getFormattedSubtotalAttribute()
	{
		return CurrencyFormatter::format($this->attributes['subtotal']);
	}

	public function getFormattedTaxTotalAttribute()
	{
		return CurrencyFormatter::format($this->attributes['tax_total']);
	}

	public function getFormattedTotalAttribute()
	{
		return CurrencyFormatter::format($this->attributes['total']);
	}

}