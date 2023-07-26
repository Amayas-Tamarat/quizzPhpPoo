<?php
class Qcm
{
    private string $theme;
    private array $questions;


    public function __construct($theme)
    {
        $this->theme = $theme;
        $this->questions = array(); 
    }

    

    //getter and setter for theme 
    public function getTheme()
    {
        return $this->theme;
    }

 
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }



    //getter and setter for questions 
    public function getQuestions()
    {
        return $this->questions;
    }

    public function setQuestions(array $questions)
    {
        $this->questions = $questions;
        return $this;
    }

    //add a single question to a qcm
    public function addQuestions(Question $question)
    {
        $this->questions[] = $question;
    }
}



?>