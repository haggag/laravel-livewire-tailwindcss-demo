<?php


namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class TimestampData extends DataTransferObject
{
    public int $epoch;
    public int $unix;
    public string $human;
}
