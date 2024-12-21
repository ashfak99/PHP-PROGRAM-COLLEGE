<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJF Scheduling</title>
</head>
<body>
    <div class="main">
        <h1>SJF Scheduling</h1>
        <form action="SJF_.php" method="POST">
            <label for="num_processes">Enter the number of processes:</label>
            <input type="number" id="num_processes" name="num_processes" min="1" required>
            <br><br>

            <div id="process_inputs">
                <!-- Process burst and arrival time inputs will be dynamically added here -->
            </div>

            <button type="button" onclick="addProcessInputs()">Add Process Inputs</button>
            <br><br>

            <input type="submit" value="Calculate SJF Scheduling">
        </form>
    </div>

    <script>
        function addProcessInputs() {
            const numProcesses = document.getElementById('num_processes').value;
            const processInputsDiv = document.getElementById('process_inputs');
            processInputsDiv.innerHTML = ''; // Clear existing inputs

            for (let i = 1; i <= numProcesses; i++) {
                processInputsDiv.innerHTML += `
                    <h3>Process ${i}</h3>
                    <label for="burst_time_${i}">Burst Time for Process ${i}:</label>
                    <input type="number" id="burst_time_${i}" name="burst_time[]" min="1" required>
                    <br><br>
                    <label for="arrival_time_${i}">Arrival Time for Process ${i}:</label>
                    <input type="number" id="arrival_time_${i}" name="arrival_time[]" min="0" required>
                    <br><br>
                `;
            }
        }
    </script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from form
    $n = intval($_POST['num_processes']);
    $bt = $_POST['burst_time'];  // Burst times array
    $at = $_POST['arrival_time'];  // Arrival times array
    $pid = array();  // Process IDs
    $wt = array();  // Waiting times
    $tat = array();  // Turnaround times
    $ct = array();  // Completion times

    // Assign process IDs
    for ($i = 0; $i < $n; $i++) {
        $pid[$i] = $i + 1;
    }

    // Function to sort processes by burst time
    function sortByBurstTime($n, &$pid, &$bt, &$at) {
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($bt[$i] > $bt[$j]) {
                    // Swap burst time
                    list($bt[$i], $bt[$j]) = array($bt[$j], $bt[$i]);
                    // Swap arrival time
                    list($at[$i], $at[$j]) = array($at[$j], $at[$i]);
                    // Swap process IDs
                    list($pid[$i], $pid[$j]) = array($pid[$j], $pid[$i]);
                }
            }
        }
    }

    // Function to calculate completion time
    function findCompletionTime($n, $bt, $at, &$ct) {
        $ct[0] = $bt[0] + $at[0]; // First process completion time
        for ($i = 1; $i < $n; $i++) {
            $ct[$i] = $ct[$i - 1] + $bt[$i];
        }
    }

    // Function to calculate waiting time
    function findWaitingTime($n, $bt, &$wt, $at, $ct) {
        $wt[0] = 0; // First process has no waiting time
        for ($i = 1; $i < $n; $i++) {
            $wt[$i] = $ct[$i - 1] - $at[$i];
            if ($wt[$i] < 0) {
                $wt[$i] = 0;
            }
        }
    }

    // Function to calculate turnaround time
    function findTurnAroundTime($n, $bt, $wt, &$tat) {
        for ($i = 0; $i < $n; $i++) {
            $tat[$i] = $bt[$i] + $wt[$i];
        }
    }

    // Sort processes by burst time
    sortByBurstTime($n, $pid, $bt, $at);

    // Calculate completion time
    findCompletionTime($n, $bt, $at, $ct);

    // Calculate waiting time
    findWaitingTime($n, $bt, $wt, $at, $ct);

    // Calculate turnaround time
    findTurnAroundTime($n, $bt, $wt, $tat);

    // Output the results
    echo "<h2>SJF Scheduling Result</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Process ID</th><th>Burst Time</th><th>Arrival Time</th><th>Waiting Time</th><th>Turn Around Time</th><th>Completion Time</th></tr>";

    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        echo "<td>{$pid[$i]}</td>";
        echo "<td>{$bt[$i]}</td>";
        echo "<td>{$at[$i]}</td>";
        echo "<td>{$wt[$i]}</td>";
        echo "<td>{$tat[$i]}</td>";
        echo "<td>{$ct[$i]}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
