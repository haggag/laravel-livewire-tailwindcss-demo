<?php


namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class BlockData extends DataTransferObject
{
    public int $height;
    public string $id;
}
