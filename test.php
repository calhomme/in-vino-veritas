<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <title>In Vino Veritas</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="quiz-content">
        <div class="header-wrapper">
            <h1>In Vino Veritas</h1>
        </div>
        <form action="thanks.php" method="post" id="quiz">
            <ul id="quiz_whole">
                
                <li>
                    <div class="quiz-overlay"></div>
                    <div class="question-box">
                        <h3 class="question_text">Quel serait votre lieu de vacances rêvé ?</h3>
                    </div>
                    <div class="answers">
                        <div class="questions">
                            <input type="radio" name="answer1" id="answer1_A" value="A" />
                            <label for="answer1" class="answer_text">Un chalet à la montagne</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer1" id="answer1_B" value="B"/>
                            <label for="answer1" class="answer_text">Un château historique</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer1" id="answer1_C" value="C"/>
                            <label for="answer1" class="answer_text">Une chambre d'hôtes à la campagne</label>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <div class="question-box">
                        <h3 class="question_text">Quelle est selon vous une activité de week-end idéale ?</h3>
                    </div>
                    <div class="answers">
                        <div class="questions">
                            <input type="radio" name="answer2" id="answer2_A" value="A"/>
                            <label for="answer2" class="answer_text">Une promenade en forêt</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer2" id="answer2_B" value="B"/>
                            <label for="answer2" class="answer_text">Lézarder</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer2" id="answer2_C" value="C"/>
                            <label for="answer2" class="answer_text">Visiter un lieu historique</label>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <div class="question-box">
                        <h3 class="question_text">Quelle est votre boisson de prédilection ?</h3>
                    </div>
                    <div class="answers">
                        <div class="questions">
                            <input type="radio" name="answer3" id="answer3_A" value="A"/>
                            <label for="answer3" class="answer_text">Un jus de fruits</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer3" id="answer3_B" value="B"/>
                            <label for="answer3" class="answer_text">Un soda</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer3" id="answer3_C" value="C"/>
                            <label for="answer3" class="answer_text">Un café</label>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <div class="question-box">
                        <h3 class="question_text">Au choix, que préfèreriez-vous manger :</h3>
                    </div>
                    <div class="answers">
                        <div class="questions">
                            <input type="radio" name="answer4" id="answer4_A" value="A"/>
                            <label for="answer4" class="answer_text">Un bon steak</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer4" id="answer4_B" value="B"/>
                            <label for="answer4" class="answer_text">Un bon plateau de fruits de mer</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer4" id="answer4_C" value="C"/>
                            <label for="answer4" class="answer_text">Une bonne poêlée de légumes</label>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <div class="question-box">
                        <h3 class="question_text">Quel est votre dessert préféré ?</h3>
                    </div>
                    <div class="answers">
                        <div class="questions">
                            <input type="radio" name="answer5" id="answer5_A" value="A"/>
                            <label for="answer5" class="answer_text">Une tarte au citron</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer5" id="answer5_B" value="B"/>
                            <label for="answer5" class="answer_text">Un crumble aux fruits rouges</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer5" id="answer5_C" value="C"/>
                            <label for="answer5" class="answer_text">Un tiramisu</label>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <div class="question-box">
                        <h3 class="question_text">Quel sport choisiriez-vous ?</h3>
                    </div>
                    <div class="answers">
                        <div class="questions">
                            <input type="radio" name="answer6" id="answer6_A" value="A"/>
                            <label for="answer6" class="answer_text">Yoga</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer6" id="answer6_B" value="B"/>
                            <label for="answer6" class="answer_text">Escalade</label>
                        </div>
                        <div class="questions">
                            <input type="radio" name="answer6" id="answer6_C" value="C"/>
                            <label for="answer6" class="answer_text">Badmington</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <div id="sendAnswer">
                        <input type="submit" value="Envoyer" id="sendAnswers">
                    </div>
                </li>                
            </ul>
        </form>
    </div>
</body>
</html>
