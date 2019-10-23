<?php
/**
 * Share QuoteId Across Multiple Websites
 * Copyright (C) 2019 Daniel Rafique
 *
 * This file is part of Rafique/CheckoutSession.
 *
 * Rafique/SharedCart is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Rafique\SharedCart\Rewrite\Magento\Checkout\Model;

class Session extends \Magento\Checkout\Model\Session
{

  const CHECKOUT_QUOTE_ID = 'quote_id_1';

  /**
   * Return the quote's key
   *
   * @return string
   * @codeCoverageIgnore
   */
  protected function _getQuoteIdKey()
  {
    return self::CHECKOUT_QUOTE_ID;
  }

}
