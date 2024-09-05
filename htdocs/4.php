<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkylator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
        <div class="col-md-4">
                <h2 class="text-center mb-3">Kalkylator</h2>
                <form method="POST" action="">
                <div class="mb-3">
                 <input type="number" step="any" class="form-control" name="num1" placeholder="Första talet" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" step="any" class="form-control" name="num2" placeholder="Andra talet" required>
                    </div>
                    <div class="mb-3">
                     <select class="form-select" name="operation" required>
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraktion</option>
                    <option value="multiply">Multiplikation</option>
                    <option value="divide">Division</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Beräkna</button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operation = $_POST['operation'];
                    $result = 0;

                    function add($a, $b) { return $a + $b; }
                    function subtract($a, $b) { return $a - $b; }
                    function multiply($a, $b) { return $a * $b; }
                    function divide($a, $b) { return ($b != 0) ? $a / $b : "Fel: Division med 0!"; }

                switch ($operation) {
                    case 'add': $result = add($num1, $num2); break;
                    case 'subtract': $result = subtract($num1, $num2); break;
                    case 'multiply': $result = multiply($num1, $num2); break;
                    case 'divide': $result = divide($num1, $num2); break;
                    }

                    echo "<div class='alert alert-info mt-3 text-center'>Resultat: $result</div>";
                }
                ?>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
