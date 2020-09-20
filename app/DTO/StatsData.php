<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\DataTransferObjectError;



class StatsData extends DataTransferObject
{
    public static function fromPayload(array $response): self
    {
        if (!isset($response['data'])) {
            throw new DataTransferObjectError('data property is missing');
        }

        return new self($response['data']);
    }

    public BlockData $block;
    public string $supply;

    public function supply() : string
    {
        return $this->supply;
    }
}
