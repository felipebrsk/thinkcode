<link rel="stylesheet" href="{{ asset('css/get-in-touch.css') }}">
<div class="social-panel-container">
	<div class="social-panel">
		<button class="close-btn"><i class="fas fa-times"></i></button>
		<h4>Entre em contato por</h4>
		<ul>
			<li>
				<a title="FelipeBrsk#3571">
					<i class="fab fa-discord"></i>
				</a>
			</li>
			<li>
				<a href="https://twitter.com/FalidoL" target="_blank">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="https://www.linkedin.com/in/felipe-luz-oliveira/" target="_blank">
					<i class="fab fa-linkedin"></i>
				</a>
			</li>
			<li>
				<a href="https://www.facebook.com/felipe.brsk/" target="_blank">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="https://www.instagram.com/truenorthtechnology/" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
		</ul>
	</div>
</div>
<button class="floating-btn">
	Entrar em contato
</button>

<script>
    const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});
</script>