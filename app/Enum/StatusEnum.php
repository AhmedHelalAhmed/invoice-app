<?php


namespace App\Enum;

/**
 * Class StatusEnum
 * @package App\Enum
 * @author Ahmed Helal Ahmed
 */
class StatusEnum
{
    const UNPAID = 0;
    const PAID = 1;

    const CLASS_FOR_STATUS=[
      self::UNPAID=>'text-danger',
      self::PAID=>'text-success',
    ];

    const TEXT_FOR_STATUS=[
        self::UNPAID=>'unpaid',
        self::PAID=>'paid',
    ];
}
