<?php


namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class BlockchainData extends DataTransferObject
{
    public int $height;
    public string $id;
}
