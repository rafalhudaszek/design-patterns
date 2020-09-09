<?php
class Subject  {
    private $observers;

    public function __construct()
    {
        $this->observers = array();
    }

    public function add($observer)
    {
        array_push($this->observers, $observer);
    }


    public function updatePrices()
    {
        $this->notify();
    }

    public function notify() {
        foreach($this->observers as $obs)
        {
            $obs->update(rand(0,100));
        }
    }
}