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

        h1 {
            font-size: 6rem;
        }

        .typing-slider,
        h1 {
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
        <h1>bro-ai</h1>
        <div class="text-center">
            <p>Writing Made Easy</p>
            <div class="typing-slider">
                <p>Write Your youtube script</p>
                <p>Write your test cases</p>
                <p>Write your blogs </p>
            </div>
            <p>Scroll Down</p>

        </div>


        <div>
            <br>
            <br>
            <hr>
            <form method="post" action="output.php">

                <div class="row text-center">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Enter Your Problem</label>
                            <input type="text" class="form-control" name="title" required>

                        </div>
                    </div>
                </div>

                <div class="row text-center">

                    <div class="col-md-12 col-sm-12">

                        <button type="submit" class="btn btn-primary"
                            style="background-color:#FFCC00; color:black; font-weight:700"> GET SOLUTION </button>

                    </div>
                </div>
            </form>

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
