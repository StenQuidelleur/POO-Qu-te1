<?php


interface LightableInterface
{
    public function switchOn(int $percentage) :int;
    public function switchOff(int $percentage) :int;
}