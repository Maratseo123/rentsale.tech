<?php
// Включаем вывод ошибок для отладки
ini_set('display_errors', 1);
error_reporting(E_ALL);

ob_start();

// Инициализация массива для хранения действий и целей
$actions = [];
$goals = [];

// Функция для добавления действия
function saveAction($id, $description, $value, $date) {
    global $actions;
    if (empty($id)) {
        $newId = uniqid();
        $actions[] = [
            'id' => $newId,
            'description' => $description,
            'value' => $value,
            'date' => $date
        ];
    } else {
        foreach ($actions as &$action) {
            if (isset($action['id']) && $action['id'] === $id) {
                $action['description'] = $description;
                $action['value'] = $value;
                $action['date'] = $date;
                break;
            }
        }
    }
    file_put_contents('actions.json', json_encode($actions));
}

// Функция для добавления цели
function saveGoal($id, $value, $date) {
    global $goals;
    if (empty($id)) {
        $newId = uniqid();
        $goals[] = [
            'id' => $newId,
            'value' => $value,
            'date' => $date
        ];
    } else {
        foreach ($goals as &$goal) {
            if (isset($goal['id']) && $goal['id'] === $id) {
                $goal['value'] = $value;
                $goal['date'] = $date;
                break;
            }
        }
    }
    file_put_contents('goals.json', json_encode($goals));
}

// Функция для загрузки данных
function loadData() {
    global $actions, $goals;
    if (file_exists('actions.json')) {
        $actions = json_decode(file_get_contents('actions.json'), true) ?: [];
    }
    if (file_exists('goals.json')) {
        $goals = json_decode(file_get_contents('goals.json'), true) ?: [];
    }
}

// Загрузка данных при запуске
loadData();

// Обработка добавления действия
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $id = $_POST['action_id'] ?? '';
        $description = $_POST['action_description'] ?? '';
        $value = floatval($_POST['action_value'] ?? 0);
        $date = $_POST['action_date'] ?? date('Y-m-d');
        saveAction($id, $description, $value, $date);
    } elseif (isset($_POST['goal'])) {
        $id = $_POST['goal_id'] ?? '';
        $value = floatval($_POST['goal_value'] ?? 0);
        $date = $_POST['goal_date'] ?? date('Y-m-d');
        saveGoal($id, $value, $date);
    }
    
    // Перенаправление для предотвращения повторной отправки формы
    ob_end_clean();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Подсчет кумулятивной стоимости
$cumulativeValue = 0;
foreach ($actions as &$action) {
    $action['cumulative_value'] = $cumulativeValue += $action['value'];
}

// Сортировка действий по дате
usort($actions, function($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

// Подготовка данных для графика
$actionData = array_map(function($action) {
    return [
        'x' => strtotime($action['date'] ?? '') * 1000,
        'y' => $action['cumulative_value']
    ];
}, $actions);

$goalData = array_map(function($goal) {
    return [
        'x' => strtotime($goal['date'] ?? '') * 1000,
        'y' => $goal['value']
    ];
}, $goals);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Трекер жизненных действий</title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        .progress-bar { width: 100%; background-color: #f0f0f0; border-radius: 5px; margin-bottom: 20px; }
        .progress { height: 30px; background-color: #4CAF50; border-radius: 5px; text-align: center; line-height: 30px; color: white; }
        form { margin-bottom: 20px; }
        input, button { margin: 5px 0; padding: 5px; }
        #actionsChart { width: 100%; height: 600px; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Трекер жизненных действий</h1>
        
        <div class="progress-bar">
            <div class="progress" style="width: <?php echo min(($cumulativeValue / 1000) * 100, 100); ?>%;">
                <?php echo number_format(min(($cumulativeValue / 1000) * 100, 100), 2); ?>%
            </div>
        </div>
        
        <form method="post" id="actionForm">
            <input type="hidden" name="action_id" id="actionId">
            <input type="text" name="action_description" id="actionDescription" placeholder="Описание действия" required>
            <input type="number" name="action_value" id="actionValue" placeholder="Оценочная стоимость" step="0.01" required>
            <input type="date" name="action_date" id="actionDate" value="<?php echo date('Y-m-d'); ?>" required>
            <button type="submit" name="action" id="submitActionBtn">Добавить действие</button>
        </form>
        
        <form method="post" id="goalForm">
            <input type="hidden" name="goal_id" id="goalId">
            <input type="number" name="goal_value" id="goalValue" placeholder="Оценочная стоимость цели" step="0.01" required>
            <input type="date" name="goal_date" id="goalDate" value="<?php echo date('Y-m-d'); ?>" required>
            <button type="submit" name="goal" id="submitGoalBtn">Добавить цель</button>
        </form>
        
        <div id="actionsChart"></div>
        
        <h2>Список действий</h2>
        <table>
            <thead>
                <tr>
                    <th>Дата</th>
                    <th>Описание</th>
                    <th>Стоимость</th>
                    <th>Кумулятивная стоимость</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($actions as $action): ?>
                <tr>
                    <td><?php echo htmlspecialchars($action['date'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($action['description'] ?? ''); ?></td>
                    <td>$<?php echo number_format($action['value'], 2); ?></td>
                    <td>$<?php echo number_format($action['cumulative_value'], 2); ?></td>
                    <td>
                        <button onclick="editAction('<?php echo $action['id'] ?? ''; ?>', '<?php echo htmlspecialchars($action['description'] ?? ''); ?>', '<?php echo $action['value'] ?? ''; ?>', '<?php echo $action['date'] ?? ''; ?>')">Редактировать</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <script>
        var actionsData = <?php echo json_encode($actionData); ?>;
        var goalsData = <?php echo json_encode($goalData); ?>;
        
        var trace1 = {
            x: actionsData.map(d => new Date(d.x)),
            y: actionsData.map(d => d.y),
            mode: 'lines+markers',
            type: 'scatter',
            name: 'Кумулятивная стоимость'
        };
        
        var trace2 = {
            x: goalsData.map(d => new Date(d.x)),
            y: goalsData.map(d => d.y),
            mode: 'lines+markers',
            type: 'scatter',
            name: 'Цели',
            line: { dash: 'dot' }
        };
        
        var layout = {
            title: 'Трекер жизненных действий',
            xaxis: { title: 'Дата', range: [new Date('2023-01-01'), new Date()] },
            yaxis: { title: 'Стоимость' },
            shapes: [
                {
                    type: 'line',
                    x0: new Date('2023-01-01'),
                    x1: new Date(),
                    y0: 1000,
                    y1: 1000,
                    line: {
                        color: 'red',
                        width: 2,
                        dash: 'dot'
                    }
                }
            ],
            annotations: [
                {
                    x: new Date(),
                    y: 1000,
                    xref: 'x',
                    yref: 'y',
                    text: 'Цель 1: $1000',
                    showarrow: false,
                    font: { color: 'red' }
                }
            ]
        };
        
        var chart = Plotly.newPlot('actionsChart', [trace1, trace2], layout);
        
        function updateChart() {
            var now = new Date();
            layout.xaxis.range = [new Date('2023-01-01'), now];
            layout.annotations[0].x = now;

            Plotly.update('actionsChart', {}, layout);
        }
        
        setInterval(updateChart, 1000);

        function editAction(id, description, value, date) {
            document.getElementById('actionId').value = id;
            document.getElementById('actionDescription').value = description;
            document.getElementById('actionValue').value = value;
            document.getElementById('actionDate').value = date;
            document.getElementById('submitActionBtn').textContent = 'Обновить действие';
        }
        
        document.getElementById('actionForm').addEventListener('submit', function() {
            document.getElementById('submitActionBtn').textContent = 'Добавить действие';
        });

        document.getElementById('goalForm').addEventListener('submit', function() {
            document.getElementById('submitGoalBtn').textContent = 'Добавить цель';
        });
        </script>
    </div>
</body>
</html>
<?php
// Завершаем буферизацию и отправляем вывод
ob_end_flush();
?>
