
<?php
$page = 'test.php'; // Set the current page

// Include your question data here
include 'question.php';
include 'inc/header.php';

// Shuffle the questions
shuffle($allQuestions);

// Initialize arrays to store answers and questions
$selectedAnswers = [];
$selectedQuestions = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCPT- Best Career Path Test</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <style>

        .error-message {
            color: red;
        }
        #sidebar {
            margin-top: 70px; /* Adjust the margin as needed */
        }
        #content {
            margin-top: 70px; /* Adjust the margin as needed */
        }
        .question-card {
    border: solid 2px #17a2b8;
    border-radius: 30px;
    padding: 10px;
    margin-bottom: 10px;
    width: 80%; /* Adjust the width as needed */
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    margin: 0 auto; /* Center the question card */
}

.choices {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    margin-top: 10px;
}

.choices div {
    flex: 0 0 50%; /* Adjust as needed, this will make choices appear in two columns */
    margin-bottom: 10px;
}

.choices input[type='checkbox'],
.choices input[type='radio'] {
    margin-right: 5px;
}


/* Media Query for smaller screens */
@media screen and (max-width: 768px) {
    .question-card {
        width: 90%; /* Adjust as needed for smaller screens */
    }

    .choices div {
        flex: 0 0 100%; /* Display choices in a single column on smaller screens */
    }
}


/* RADIO */
.choices li {
    list-style: none; /* Remove default list-style */
    display: flex; /* Each choice on its own line */
    /* margin-bottom: 5px; Add some space between choices */
     margin-right: 5px;
}
    </style>
    </style>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <?php include 'sidebar.php'; ?>
    <!-- Page Content  -->
    <div id="content">
        <!-- Navbar  -->
        <?php include 'navbar.php'; ?>
        <div class="container text-center">
            <div id="questions">
            <div class="progress">
                        <div id="p_bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 10%; background-color: #17a2b8;">10%</div>
                    </div>
                    <br>
                <!-- Section 1 -->
                <div id="section1">

                    <?php
                    // Display the first five questions with choices
                    for ($i = 0; $i < 5; $i++) {
                        $question = $allQuestions[$i];
                        $selectedQuestions[] = $question['question']; // Store the question
                        echo "<div class='card question-card'>";
                        echo "<p style='padding:10px'>{$question['question']}</p><hr>";
                        // Assuming $allChoices is a multidimensional array containing choices for each question
                        $choices = $question['choices'];
                        // echo ""; // Start the ordered list
                        // Generate radio buttons for choices
                        $labels = range('A', 'Z'); // Create an array with labels A, B, C, ...
                        foreach ($choices as $key => $choice) {
                            echo "<ol class='choices'><li><input type='radio' name='question{$i}' value='{$labels[$key]}' data-question='{$question['question']}'> {$labels[$key]}. {$choice}</li></ol>";
                        }
                        echo "</div><hr>";
                    }
                    ?>
                    <a id="nextSectionButton1" class="section-button btn-md btn-success p-1" style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'> Next <i class="fas fa-caret-right"></i></a>
                </div>
                <!-- Section 2 -->
                <div id="section2" style="display:none">
                    <?php
                    // Display the next five questions with choices
                    for ($i = 5; $i < 10; $i++) {
                        $question = $allQuestions[$i];
                        $selectedQuestions[] = $question['question']; // Store the question
                        echo "<div class='card question-card'>";
                        echo "<p style='padding:10px'>{$question['question']}</p><hr>";
                        // Assuming $allChoices is a multidimensional array containing choices for each question
                        $choices = $question['choices'];
                        // echo ""; // Start the ordered list
                        // Generate radio buttons for choices
                        $labels = range('A', 'Z'); // Create an array with labels A, B, C, ...
                        foreach ($choices as $key => $choice) {
                            echo "<ol class='choices'><li><input type='radio' name='question{$i}' value='{$labels[$key]}' data-question='{$question['question']}'> {$labels[$key]}. {$choice}</li></ol>";
                        }
                        echo "</div><hr>";
                    }
                    ?>
                    <!-- Display "Previous" and "Next" buttons -->

                    <a id="prevSectionButton2" class="section-button btn-md btn-success p-1" style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'><i class="fas fa-caret-left"></i> Previous</a>
                    <a id="nextSectionButton2" class="section-button btn-md btn-success p-1" style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'> Next <i class="fas fa-caret-right"></i></a>
                </div>
                <!-- Section 3 -->
                <div id="section3" style="display:none">
                    <?php
                    // Display the last five questions with choices
                    for ($i = 10; $i < 15; $i++) {
                        $question = $allQuestions[$i];
                        $selectedQuestions[] = $question['question']; // Store the question
                        echo "<div class='card question-card'>";
                        echo "<p style='padding:10px'>{$question['question']}</p><hr>";
                        // Assuming $allChoices is a multidimensional array containing choices for each question
                        $choices = $question['choices'];
                        // echo ""; // Start the ordered list
                        // Generate radio buttons for choices
                        $labels = range('A', 'Z'); // Create an array with labels A, B, C, ...
                        foreach ($choices as $key => $choice) {
                            echo "<ol class='choices'><li><input type='radio' name='question{$i}' value='{$labels[$key]}' data-question='{$question['question']}'> {$labels[$key]}. {$choice}</li></ol>";
                        }
                        echo "</div><hr>";
                    }
                    ?>
                    <!-- Display "Previous" and "Submit" buttons -->

                    <a id="prevSectionButton3" class="section-button btn-md btn-success p-1"  style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'><i class="fas fa-caret-left"></i> Previous</a>
                    <a id="nextSectionButton3" class="section-button btn-md btn-success p-1" style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'> Next <i class="fas fa-caret-right"></i></a>    </div>
                <!-- Section 4 -->
                <div id="section4" style="display:none">
                    <?php
                    // Display the last five questions with choices
                    for ($i = 15; $i < 20; $i++) {
                        $question = $allQuestions[$i];
                        $selectedQuestions[] = $question['question']; // Store the question
                        echo "<div class='card question-card'>";
                        echo "<p style='padding:10px'>{$question['question']}</p><hr>";
                        // Assuming $allChoices is a multidimensional array containing choices for each question
                        $choices = $question['choices'];
                        // echo ""; // Start the ordered list
                        // Generate radio buttons for choices
                        $labels = range('A', 'Z'); // Create an array with labels A, B, C, ...
                        foreach ($choices as $key => $choice) {
                            echo "<ol class='choices'><li><input type='radio' name='question{$i}' value='{$labels[$key]}' data-question='{$question['question']}'> {$labels[$key]}. {$choice}</li></ol>";
                        }
                        echo "</div><hr>";
                    }
                    ?>
                    <!-- Display "Previous" and "Submit" buttons -->

                    <a id="prevSectionButton4" class="section-button btn-md btn-success p-1"  style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'><i class="fas fa-caret-left"></i> Previous</a>
                    <a id="nextSectionButton4" class="section-button btn-md btn-success p-1" style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'> Next <i class="fas fa-caret-right"></i></a>  </div>
                <!-- Section 5 -->
                <div id="section5" style="display:none">
                    <?php
                    // Display the last five questions with choices
                    for ($i = 20; $i < 25; $i++) {
                        $question = $allQuestions[$i];
                        $selectedQuestions[] = $question['question']; // Store the question
                        echo "<div class='card question-card'>";
                        echo "<p style='padding:10px'>{$question['question']}</p><hr>";
                        // Assuming $allChoices is a multidimensional array containing choices for each question
                        $choices = $question['choices'];
                        // echo ""; // Start the ordered list
                        // Generate radio buttons for choices
                        $labels = range('A', 'Z'); // Create an array with labels A, B, C, ...
                        foreach ($choices as $key => $choice) {
                            echo "<ol class='choices'><li><input type='radio' name='question{$i}' value='{$labels[$key]}' data-question='{$question['question']}'> {$labels[$key]}. {$choice}</li></ol>";
                        }
                        echo "</div><hr>";
                    }
                    ?>
                    <!-- Display "Previous" and "Submit" buttons -->

                    <a id="prevSectionButton5" class="section-button btn-md btn-success p-1"  style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'><i class="fas fa-caret-left"></i> Previous</a>
                    <a id="nextSectionButton5" class="section-button btn-md btn-success p-1" style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'> Next <i class="fas fa-caret-right"></i></a>    </div>
                  <!-- Section 6 -->
                  <div id="section6" style="display:none">
                    <?php
                    // Display the last five questions with choices
                    for ($i = 25; $i < 30; $i++) {
                        $question = $allQuestions[$i];
                        $selectedQuestions[] = $question['question']; // Store the question
                        echo "<div class='card question-card'>";
                        echo "<p style='padding:10px'>{$question['question']}</p><hr>";
                        // Assuming $allChoices is a multidimensional array containing choices for each question
                        $choices = $question['choices'];
                        // echo ""; // Start the ordered list
                        // Generate radio buttons for choices
                        $labels = range('A', 'Z'); // Create an array with labels A, B, C, ...
                        foreach ($choices as $key => $choice) {
                            echo "<ol class='choices'><li><input type='radio' name='question{$i}' value='{$labels[$key]}' data-question='{$question['question']}'> {$labels[$key]}. {$choice}</li></ol>";
                        }
                        echo "</div><hr>";
                    }
                    ?>
                    <!-- Display "Previous" and "Submit" buttons -->

                    <a id="prevSectionButton6" class="section-button btn-md btn-success p-1"  style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'><i class="fas fa-caret-left"></i> Previous</a>
                    <button id="submitButton" type="submit" class="section-button btn-md btn-success p-1" style=' cursor: pointer;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'><i class="fas fa-check"></i>  Submit</button>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php';?>

<script>
    $(document).ready(function () {

        var bestCareer;

        $('#sidebar').removeClass('inactive');
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
        Swal.fire({
            title: "Friendly Reminder!",
            text: "Please answer truthfully and honestly to ensure accurate results and identify your best career path.",
            icon: "info"
        });
        $('input[type="radio"]').prop('disabled', false);
        // Your JavaScript code here
        // Initialize arrays to store selected answers and questions
        var selectedAnswers = [];
        var selectedQuestions = [];

        // Function to check if all questions in a section are answered
        function areQuestionsAnswered(sectionId, startIndex, endIndex) {
            var allAnswered = true;
            for (var i = startIndex; i <= endIndex; i++) {
                // Check if any radio button for the question is checked
                if (!$('input[name="question' + i + '"]:checked').length) {
                    allAnswered = false;
                    // Add an error message before the question
                    $(sectionId).find('input[name="question' + i + '"]').closest('.question-card').prepend('<span class="error-message">Please select an answer.</span>');
                } else {
                    var questionIndex = selectedQuestions.indexOf($('input[name="question' + i + '"]:checked').data('question'));

                    // If the question is found in the arrays, update its answer
                    if (questionIndex !== -1) {
                        selectedAnswers[questionIndex] = $('input[name="question' + i + '"]:checked').val();
                    } else {
                        // If the question is not found, add it to the arrays
                        selectedQuestions.push($('input[name="question' + i + '"]:checked').data('question'));
                        selectedAnswers.push($('input[name="question' + i + '"]:checked').val());
                    }
                }
            }
            return allAnswered;
        }

        $('#nextSectionButton1').on('click', function () {
            $('#section1').find('.error-message').remove();
            if (!areQuestionsAnswered('#section1', 0, 4)) {
                Swal.fire({
                    title: "Incomplete!",
                    text: "Please answer all questions before proceeding.",
                    icon: "error"
                });
                return; // Prevent further execution
            }
            $('#section1').hide();
            $('#section2').show();
            $('#p_bar').css('width','20%')
            $('#p_bar').html('20%')
        });

        $('#nextSectionButton2').on('click', function () {
            $('#section2').find('.error-message').remove();
            if (!areQuestionsAnswered('#section2', 5, 9)) {
                Swal.fire({
                    title: "Incomplete!",
                    text: "Please answer all questions before proceeding.",
                    icon: "error"
                });
                return; // Prevent further execution
            }
            $('#section2').hide();
            $('#section3').show();
            $('#p_bar').css('width','40%')
            $('#p_bar').html('40%')
        });
        $('#nextSectionButton3').on('click', function () {
            $('#section3').find('.error-message').remove();
            if (!areQuestionsAnswered('#section3', 10, 14)) {
                Swal.fire({
                    title: "Incomplete!",
                    text: "Please answer all questions before proceeding.",
                    icon: "error"
                });
                return; // Prevent further execution
            }
            $('#section3').hide();
            $('#section4').show();
            $('#p_bar').css('width','60%')
            $('#p_bar').html('60%')
        });
        $('#nextSectionButton4').on('click', function () {
            $('#section4').find('.error-message').remove();
            if (!areQuestionsAnswered('#section4', 15, 19)) {
                Swal.fire({
                    title: "Incomplete!",
                    text: "Please answer all questions before proceeding.",
                    icon: "error"
                });
                return; // Prevent further execution
            }
            $('#section4').hide();
            $('#section5').show();
            $('#p_bar').css('width','80%')
            $('#p_bar').html('80%')
        });
        $('#nextSectionButton5').on('click', function () {
            $('#section5').find('.error-message').remove();
            if (!areQuestionsAnswered('#section5', 20, 24)) {
                Swal.fire({
                    title: "Incomplete!",
                    text: "Please answer all questions before proceeding.",
                    icon: "error"
                });
                return; // Prevent further execution
            }
            $('#section5').hide();
            $('#section6').show();
            $('#p_bar').css('width','90%')
            $('#p_bar').html('90%')
        });

        // Apply validation to section 6
        $('#submitButton').on('click', function () {
            $('#section6').find('.error-message').remove();
            if (!areQuestionsAnswered('#section6', 25, 29)) {
                Swal.fire({
                    title: "Incomplete!",
                    text: "Please answer all questions before submitting.",
                    icon: "error"
                });
                return; // Prevent further execution
            }
            if ($('input[type="radio"]').is(':disabled')) {
                Swal.fire({
                                title: "Most suitable career pathway for you is",
                                html: "<h3>"+bestCareer+"</h3>",
                                icon: "success",
                                showCancelButton: true,
                                confirmButtonText: "Retake Exam",
                                cancelButtonText: "Okay"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                    // Handle "Retake Exam" button click
                                } else {
                                    // Handle "Okay" button click or close
                                }
                            });
            } else {
                    Swal.fire({
                    title: "Ready to submit your responses?",
                    text: "Proceeding is irreversible.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Submit!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $('#p_bar').css('width','100%')
                        $('#p_bar').html('100%')
                        $('input[type="radio"]').prop('disabled', true);

                                        // Retrieve correct answers and selected questions from question.php
                            var softwareEngineerQuestions = <?php echo json_encode($softwareEngineerQuestions); ?>;
                            var hardwareEngineerQuestions = <?php echo json_encode($hardwareEngineerQuestions); ?>;
                            var networkEngineerQuestions = <?php echo json_encode($networkEngineerQuestions); ?>;

                            var roboticsEngineerQuestions = <?php echo json_encode($roboticsEngineerQuestions); ?>;
                            var aiEngineerQuestions = <?php echo json_encode($aiEngineerQuestions); ?>;
                            var dataAnalystQuestions = <?php echo json_encode($dataAnalystQuestions); ?>;

                            // var selectedQuestions = <?php echo json_encode($selectedQuestions); ?>;
                            // var selectedAnswers = <?php echo json_encode($selectedAnswers); ?>;
                            //         console.log(selectedAnswers);
                            var totalSoftwareEngineerScore = 0;
                            var totalHardwareEngineerScore = 0;
                            var totalNetworkEngineerScore = 0;
                            var totalRoboticsScore = 0;
                            var totalAiScore = 0;
                            var totalDataAnalystScore = 0;

                            // Loop through selected questions and compute scores based on correct answers
                            for (var i = 0; i < selectedQuestions.length; i++) {
                                var question = selectedQuestions[i];
                                var answer = selectedAnswers[i]; // Adjust index to start from the third section (index 10)

                                // Check if the question is from software engineer category
                                if (softwareEngineerQuestions.find(q => q.question === question)) {
                                    var correctAnswer = softwareEngineerQuestions.find(q => q.question === question).answer;
                                    // console.log(correctAnswer);
                                    if (answer === correctAnswer) {
                                        totalSoftwareEngineerScore++;
                                    }
                                }
                                // Check if the question is from hardware engineer category
                                else if (hardwareEngineerQuestions.find(q => q.question === question)) {
                                    var correctAnswer = hardwareEngineerQuestions.find(q => q.question === question).answer;
                                    // console.log(correctAnswer);
                                    if (answer === correctAnswer) {
                                        totalHardwareEngineerScore++;
                                    }
                                }
                                // Check if the question is from network engineer category
                                else if (networkEngineerQuestions.find(q => q.question === question)) {
                                    var correctAnswer = networkEngineerQuestions.find(q => q.question === question).answer;
                                    // console.log(correctAnswer);
                                    if (answer === correctAnswer) {
                                        totalNetworkEngineerScore++;
                                    }
                                }

                                else if (roboticsEngineerQuestions.find(q => q.question === question)) {
                                    var correctAnswer = roboticsEngineerQuestions.find(q => q.question === question).answer;
                                    // console.log(correctAnswer);
                                    if (answer === correctAnswer) {
                                        totalRoboticsScore++;
                                    }
                                }
                                else if (aiEngineerQuestions.find(q => q.question === question)) {
                                    var correctAnswer = aiEngineerQuestions.find(q => q.question === question).answer;
                                    // console.log(correctAnswer);
                                    if (answer === correctAnswer) {
                                        totalAiScore++;
                                    }
                                }
                                else if (dataAnalystQuestions.find(q => q.question === question)) {
                                    var correctAnswer = dataAnalystQuestions.find(q => q.question === question).answer;
                                    // console.log(correctAnswer);
                                    if (answer === correctAnswer) {
                                        totalDataAnalystScore++;
                                    }
                                }
                            }

                            console.log("Total Score in Software Engineer Questions: " + totalSoftwareEngineerScore);
                            console.log("Total Score in Hardware Engineer Questions: " + totalHardwareEngineerScore);
                            console.log("Total Score in Network Engineer Questions: " + totalNetworkEngineerScore);

                            console.log("Total Score in Robotics Engineer Questions: " + totalRoboticsScore);
                            console.log("Total Score in AI Engineer Questions: " + totalAiScore);
                            console.log("Total Score in Data Analyst Engineer Questions: " + totalDataAnalystScore);


                           // Compare the total scores and select the best career
                            if (totalSoftwareEngineerScore >= totalHardwareEngineerScore && totalSoftwareEngineerScore >= totalNetworkEngineerScore && totalSoftwareEngineerScore >= totalRoboticsScore && totalSoftwareEngineerScore >= totalAiScore && totalSoftwareEngineerScore >= totalDataAnalystScore) {
                                bestCareer = "Software Engineer";
                            } else if (totalHardwareEngineerScore >= totalSoftwareEngineerScore && totalHardwareEngineerScore >= totalNetworkEngineerScore && totalHardwareEngineerScore >= totalRoboticsScore && totalHardwareEngineerScore >= totalAiScore && totalHardwareEngineerScore >= totalDataAnalystScore) {
                                bestCareer = "Hardware Engineer";
                            } else if (totalNetworkEngineerScore >= totalSoftwareEngineerScore && totalNetworkEngineerScore >= totalHardwareEngineerScore && totalNetworkEngineerScore >= totalRoboticsScore && totalNetworkEngineerScore >= totalAiScore && totalNetworkEngineerScore >= totalDataAnalystScore) {
                                bestCareer = "Network Engineer";
                            } else if (totalRoboticsScore >= totalSoftwareEngineerScore && totalRoboticsScore >= totalHardwareEngineerScore && totalRoboticsScore >= totalNetworkEngineerScore && totalRoboticsScore >= totalAiScore && totalRoboticsScore >= totalDataAnalystScore) {
                                bestCareer = "Robotics Engineer";
                            } else if (totalAiScore >= totalSoftwareEngineerScore && totalAiScore >= totalHardwareEngineerScore && totalAiScore >= totalNetworkEngineerScore && totalAiScore >= totalRoboticsScore && totalAiScore >= totalDataAnalystScore) {
                                bestCareer = "AI Engineer";
                            } else if (totalDataAnalystScore >= totalSoftwareEngineerScore && totalDataAnalystScore >= totalHardwareEngineerScore && totalDataAnalystScore >= totalNetworkEngineerScore && totalDataAnalystScore >= totalRoboticsScore && totalDataAnalystScore >= totalAiScore) {
                                bestCareer = "Data Analyst";
                            } else {
                                // Randomly select one if there's a tie
                                var careers = ["Software Engineer", "Hardware Engineer", "Network Engineer", "Robotics Engineer", "AI Engineer", "Data Analyst"];
                                bestCareer = careers[Math.floor(Math.random() * careers.length)];
                            }

                            console.log("Best Career: " + bestCareer);

                            Swal.fire({
                                title: "Most suitable career pathway for you is",

                                html: "<h3>"+bestCareer+"</h3>",
                                // imageUrl: "https://gifdb.com/images/high/apple-computers-brent-rambo-thumbs-up-kid-wwens69yae767u33.gif",
                                // imageWidth: 400,
                                // imageHeight: 200,
                                icon: "success",
                                showCancelButton: true,
                                confirmButtonText: "Retake Exam",
                                cancelButtonText: "Okay"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                    // Handle "Retake Exam" button click
                                } else {
                                    // Handle "Okay" button click or close
                                }
                            });
                    }
                });
            }
            // Store or process the collected answers and questions as needed
            // console.log(selectedAnswers);
            // console.log(selectedQuestions);






        });

        $('#prevSectionButton2').on('click', function () {
            $('#section2').hide();
            $('#section1').show();
        });

        $('#prevSectionButton3').on('click', function () {
            $('#section3').hide();
            $('#section2').show();
        });
        $('#prevSectionButton4').on('click', function () {
            $('#section4').hide();
            $('#section3').show();
        });
        $('#prevSectionButton5').on('click', function () {
            $('#section5').hide();
            $('#section4').show();
        });
        $('#prevSectionButton6').on('click', function () {
            $('#section6').hide();
            $('#section5').show();
        });
    });
</script>
</body>
</html>
