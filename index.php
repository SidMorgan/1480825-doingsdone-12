<?php

require_once('helpers.php');

// массивы
$categories = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];

	$tasks = [
		[	
			'task' => "Собеседование в IT компании",
			'completionDate' => "01.12.2019",
			'project' => "Работа",
			'done' => false	
		],
		[	
			'task' => "Выполнить тестовое задание",
			'completionDate' => "25.12.2019",
			'project' => "Работа", 
			'done' => false,
		],
		[	
			'task' => "Сделать задание первого раздела",
			'completionDate' => "21.12.2019",
			'project' => "Учеба",
			'done' => true
		],
		[	
			'task' => "Встреча с другом",
			'completionDate' => "22.12.2019",
			'project' => "Входящие",
			'done' => false	
		],
		[	
			'task' => "Купить корм для кота",
			'completionDate' => null,
			'project' => "Домашние дела",
			'done' => false
		],
		[	
			'task' => "Заказать пиццу",
			'completionDate' => null,
			'project' => "Домашние дела",
			'done' => false
		]
	
	];


// Считаем количество задач по категории
	
	function tasksCount($tasks, $category) {
		$tasksAmount = 0;
		foreach ($tasks as $task) {
			if ($task['project'] == $category) {
				$tasksAmount++;
			}
		}
		return $tasksAmount;
	}



//Подключение HTML главной страницы
$main_content = include_template('main.php', ['categories' => $categories, 'tasks' => $tasks, 'show_complete_tasks' => $show_complete_tasks = rand(0, 1)]);

//Подключение layout
$layout_content = include_template('layout.php', ['content' => $main_content, 'userName' => "Константин", 'title' => "Дела в порядке"]);

//Вывод итогового кода
print($layout_content);


?> 