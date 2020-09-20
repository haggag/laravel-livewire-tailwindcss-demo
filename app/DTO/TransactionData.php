<?php


namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class TransactionData extends DataTransferObject
{
    public string $id;
    public TimestampData $timestamp;
    public string $sender;
    public string $recipient;
    public string $amount;
    public string $fee;
}
