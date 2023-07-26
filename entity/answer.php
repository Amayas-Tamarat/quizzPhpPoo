<?php
class answer
{
    private string $answer;
    private string $explanation;
    private bool $status;

    public function __construct($answer,$explanation,$status)
    {
        $this->answer = $answer;
        $this->explanation = $explanation;
        $this->status = $status;
    }


    //getter setter for Answer 
    public function getAnswer()
    {
        return $this->answer;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }


    //getter setter for explanation
    public function getExplanation()
    {
        return $this->explanation;
    }

    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;

        return $this;
    }



    //getter setter for status 
    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}


?>