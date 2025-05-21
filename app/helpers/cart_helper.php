<?php

/**
 * @return int
 */
function get_cart_total(): int
{
    $total = 0;
    if (! empty($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $price    = isset($item['price'])    ? (int)$item['price']    : 0;
            $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 0;
            $total   += $price * $quantity;
        }
    }
    return $total;
}
