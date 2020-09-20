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

    public static function newObj($height=0, $id='', $supply='', $timestamp=''): self
    {
         return new self(["block" => ["height" => $height, "id" => $id],
             "supply" => $supply, "timestamp" => $timestamp]);
    }

    public BlockData $block;
    public string $supply;
    public string $timestamp = '';

    public function empty() : bool
    {
        return empty($this->supply);
    }

    public function touch($timestamp)
    {
        $this->timestamp = $timestamp;
    }
}
