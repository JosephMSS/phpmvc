<?php
class PageController{
     public $progress=0;
    public function index()
    {
        $progress=$this->progress;
        require_once 'views/index.php';
    }
    public function progressBar()
    {
        require_once 'models/progressBar.php';
        $progressBar=new ProgressBar();
        $quantity=$_POST['quantity'];
        $goal=$_POST['goal'];
        $progressBar->setQuantity($quantity);
        $progressBar->setGoal($goal);
        $progress=$progressBar->getProgress();
        # show 
        require_once 'views/index.php';
    }
}
