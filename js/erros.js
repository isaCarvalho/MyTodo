function errLogin(event)
{
	event.preventDefault();

	let body = new FormData(event.target);

	fetch('../control/control.php?action=erroLogin', {method: 'post', body})
		.then(response => response.json())
		.then(response => {
			let err = document.getElementById("erro");
			err.innerText = response.mensagem;
		}).catch(() =>
		{
			fetch('../control/control.php?action=login', {method: 'post', body})
				.then(response => window.location = '/home.php');
		});
}