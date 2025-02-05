<?php
namespace Tmx;

class Tmx {
    private $expiryDate;

    public function __construct($expiryDate) {
        $this->expiryDate = new \DateTime($expiryDate);
    }

    public function isExpired() {
        return new \DateTime() > $this->expiryDate;
    }

    public function enforce() {
        if ($this->isExpired()) {
            die();
        }
    }
}
