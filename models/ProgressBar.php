<?php
class ProgressBar
{
    public $quantity;
    public $goal;
    public function setQuantity($quatity)
    {
        $this->quantity= $quatity;
    }
    public function setGoal($goal)
    {
        $this->goal= $goal;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getGoal()
    {
        return $this->goal;
    }
    public function getProgress()
    {
        $progress=($this->getQuantity()/$this->getGoal())*100;
        return $progress;
    }
}
