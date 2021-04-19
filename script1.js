function progress() {

	var prg = document.getElementById('progresss');
	var percent = document.getElementById('percentCount');
	var counter = 5;
	var progresss = 25;
	var id = setInterval(frame, 20);

	function frame() {

		if(progresss == 500 && counter ==100) {

			clearInterval(id);
			window.open("loginfac.php", "_self");
		} else {
			progresss += 5;
			counter += 1;
			prg.style.width = progresss + 'px';
			percent.innerHTML = counter + '%';
			}
		}
	}

	progress();
