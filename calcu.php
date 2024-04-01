
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calcu.css">
</head>
</head>
<body>
    
    <div class="calculator">
        
        <input type="text" id="display" readonly>
        <button class="ac" onclick="clearDisplay()">AC</button>
        <button class="ac" onclick="deleteLastChar()">C</button>
        <button class="B" onclick="togglePositiveNegative()">+/-</button>
        <button class="B" onclick="appendToDisplay('/')">/</button>
        <button class="a" onclick="appendToDisplay('7')">7</button>
        <button class="a" onclick="appendToDisplay('8')">8</button>
        <button class="a" onclick="appendToDisplay('9')">9</button>
        <button class="B" onclick="appendToDisplay('*')">*</button>
        <button class="a" onclick="appendToDisplay('4')">4</button>
        <button class="a" onclick="appendToDisplay('5')">5</button>      
        <button class="a" onclick="appendToDisplay('6')">6</button>
        <button class="B" onclick="appendToDisplay('-')">-</button>
        <button class="a" onclick="appendToDisplay('1')">1</button>
        <button class="a" onclick="appendToDisplay('2')">2</button>
        <button class="a" onclick="appendToDisplay('3')">3</button>
        <button class="B" onclick="appendToDisplay('+')">+</button>
        <button class="a" onclick="calculatePercentage()">%</button>
        <button class="a" onclick="appendToDisplay('0')">0</button>
        <button class="a" onclick="appendToDisplay('.')">.</button>
        <button class="B" onclick="calculate()">=</button>
    
        
    </div>

    <script>

function appendToDisplay(value){
            document.getElementById('display').value += value;
        }
    

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function clearLast() {
            var currentValue = document.getElementById('display').value;
            document.getElementById('display').value = currentValue.slice(0, -1);
        }

        function toggleSign() {
            var currentValue = document.getElementById('display').value;
            if (currentValue.startsWith('-')) {
                document.getElementById('display').value = currentValue.substring(1);
            } else {
                document.getElementById('display').value = '-' + currentValue;
            }
        }

        function calculate() {
            try {
                document.getElementById('display').value = eval(document.getElementById('display').value);
            } catch (error) {
                document.getElementById('display').value = 'Error';
            }
        }

        function calculatePercentage() {
            try {
                var currentValue = parseFloat(document.getElementById('display').value);
                var result = currentValue / 100;
                document.getElementById('display').value = result;
            } catch (error) {
                document.getElementById('display').value = 'Error';
            }
        }
        
        function togglePositiveNegative() {
            var currentValue = parseFloat(document.getElementById('display').value);
            document.getElementById('display').value = -currentValue;
        }
        
        function deleteLastChar() {
            var currentValue = document.getElementById('display').value;
            document.getElementById('display').value = currentValue.substring(0, currentValue.length - 1);
        }

    </script>


</body>
</html>
