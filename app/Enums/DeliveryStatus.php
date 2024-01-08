<?php

namespace App\Enums;

enum DeliveryStatus: string
{
    case CREATED = '1';
    case PICKED_UP = '2';
    case IN_TRANSIT = '3';
    case OUT_FOR_DELIVERY = '4';
    case DELIVERED = '5';
    case FAILED_DELIVERY = '6';
    case RETURNED = '7';
}