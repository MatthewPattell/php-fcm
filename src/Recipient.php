<?php
namespace paragraph1\phpFCM;

class Recipient
{
    private $to;

    public function setTo($to)
    {
        $this->to = $to;
        return this;
    }

    public function toJson()
    {
        return $to;
    }
}