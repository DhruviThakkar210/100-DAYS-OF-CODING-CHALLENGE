let hours = document.getElementById("hours");
	let minutes = document.getElementById("minutes");
	let seconds = document.getElementById("seconds");

	let h = new Date().getHours();
	let m = new Date().getMinutes();
	let s = new Date().getSeconds();

	hours.innerText = h;
	minutes.innerText = m;
	seconds.innerText = s;