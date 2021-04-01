function getCourses(){
	var courses = [];
	var massiv = document.getElementsByClassName('competitionsCheck');
	var massivUnselected = [];
	for(let i = 0; i < massiv.length; i++){
		let element = massiv[i];
		element1 = element.childNodes[1];
		if(!element1.checked){
			massivUnselected.push(element1.parentNode.childNodes[3].innerHTML);
		}
	}

	if (massivUnselected.length == 0){
		var t = "Вы идеально подходите под эту должность!";
	}else{
		var t = "Рекомендуем вам пройти следующие курсы, чтобы повысить свою калификацию:";
		for(let i = 0; i < massivUnselected.length; i++){
			if (massivUnselected[i] == 'Excel'){
				courses.push('excel.php');
			}else if(massivUnselected[i] == 'Linux'){
				courses.push('linux.php');
			}else if(massivUnselected[i] == 'Word'){
				courses.push('word.php');
			}else if(massivUnselected[i] == 'Сети'){
				courses.push('nets.php');
			}
		}
	}



	var container = document.getElementsByClassName('row')[0];
	container.innerHTML = '';

	var newDiv = document.createElement('div');
	newDiv.classList.add('lessonNumber');
	newDiv.innerHTML = t;
	container.appendChild(newDiv);

	for (var i = 0; i < courses.length; i++) {
		var newBtn = document.createElement('button');
		newBtn.classList.add('btn', 'btn-success');
		var newA = document.createElement('a');
		newA.classList.add('cBtn');
		newA.href = '/' + courses[i];
		newBtn.innerHTML = massivUnselected[i];

		container.appendChild(newA);
		document.getElementsByClassName('cBtn')[i].appendChild(newBtn);
	}

	var newDiv = document.createElement('div');
	//newDiv.className = '';
	
}