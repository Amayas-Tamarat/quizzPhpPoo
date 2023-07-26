<?php 
require_once('./connect/loadClass.php');

$qcm1 = new Qcm('test');
$answer1 = new Answer('poo', 'ui', true);
$answer2 = new Answer('test','yu',false);
$question1 = new Question('PDO signifie ?');

$question1->addAnswers($answer1); 
$question1->addAnswers($answer2);

$qcm1->addQuestions($question1);

foreach ($qcm1->getQuestions() as $question) {
    echo "Question: " . $question->getQuestion() . "<br>";
    foreach ($question->getAnswers() as $answer) {
        echo '------------------------------------------ <br>';
        echo "Answer: " . $answer->getAnswer() . "<br>";
        echo "Explanation: " . $answer->getExplanation() . "<br>";
        echo "Status: " . ($answer->getStatus() ? "Correct" : "Incorrect") . "<br>";
        
    }

}

?>