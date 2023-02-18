<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Your Partner</title>
</head>

<body>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #FFCC00;
        }

        @keyframes cursor {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: black;
            }
        }

        @keyframes typing {
            from {
                width: 100%;
            }

            90%,
            to {
                width: 0;
            }
        }

        @keyframes slide {
            33.3333333333% {
                font-size: 3rem;
                letter-spacing: 3px;
            }

            to {
                font-size: 0;
                letter-spacing: 0;
            }
        }

        .typing-slider {
            font-family: Consolas, monospace;
            font-weight: bold;
            text-align: center;
            white-space: nowrap;
        }

        .typing-slider p {
            position: relative;
            display: inline;
            font-size: 0;
            text-transform: uppercase;
            letter-spacing: 0;
            animation: slide 15s step-start infinite;
        }

        .typing-slider p::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border-left: 3px solid black;
            background-color: #FFCC00;
            animation: typing 5s infinite, cursor 1s infinite;
        }

        .typing-slider p:nth-child(1) {
            animation-delay: 0s;
        }

        .typing-slider p:nth-child(1)::after {
            animation-delay: 0s;
            animation-timing-function: steps(16), step-end;
        }

        .typing-slider p:nth-child(2) {
            animation-delay: 5s;
        }

        .typing-slider p:nth-child(2)::after {
            animation-delay: 5s;
            animation-timing-function: steps(23), step-end;
        }

        .typing-slider p:nth-child(3) {
            animation-delay: 10s;
        }

        .typing-slider p:nth-child(3)::after {
            animation-delay: 10s;
            animation-timing-function: steps(12), step-end;
        }
    </style>
    <div class="container">

        <?php
        
        if (isset($_POST['title'])) {
            $var_value = $_POST['title'];
        } else {
            echo '<script>window.location.href = "index.php";</script>';
        }
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"model\": \"text-davinci-003\",\n  \"prompt\": \"" . $var_value . "`:\",\n  \"temperature\": 0.6,\n  \"max_tokens\": 3599,\n  \"top_p\": 1,\n  \"frequency_penalty\": 1,\n  \"presence_penalty\": 1\n}");
        
        $headers = [];
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer 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';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        $result = json_decode($result);
        // print_r($result); exit;
        curl_close($ch);
        ?>


        <div class="text-center">
            <div>
                <b style="padding-bottom: 30px;">Here is your answer</b>
            </div>
            <br>

            <div class="div" style="border: black solid 3px; padding:10px; ">
                <?php echo $result->choices[0]->text; ?>
            </div>

            <br> <br>

            <a href="index.php" class="btn" style="background-color: black; color:#FFCC00">GO BACK</a>

        </div>



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
