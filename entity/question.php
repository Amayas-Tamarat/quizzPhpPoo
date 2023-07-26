<?php 
class Question
{
    private string $question;
    private array $questionAnswers;
    
    public function __construct($question)
    {
        $this->question = $question;
        $this->questionAnswers = array();
    }

    public function getQuestion()
    {
        return $this->question;
    }


    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }



    // Getter and setter for the answers of the question
    public function getAnswers()
    {
        return $this->questionAnswers;
    }

    public function setAnswers(array $questionAnswers)
    {
        $this->questionAnswers = $questionAnswers;
        return $this;
    }

    public function addAnswers(Answer $answer)
    {
        $this->questionAnswers[] = $answer;
    }

}
?>