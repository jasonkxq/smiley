<style>
.center{
	margin: 0 auto;
	text-align: center;
}.container {
	padding: 0 35px;
}
</style>
<div class="container">
	<h4>Manage ship</h4>
	<form class="form-signin" method="post" id="validateShip">
	<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Vessel</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">SDWT</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">SDRAFT</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">LOA</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Beam</label>
			  </div>
			</div>

			<div class="mdl-cell mdl-cell--4-col">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Flag</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Built</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Class</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Cubic 98 PCT</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">Slop 98 PCT</label>
			  </div>
			</div>

			<div class="mdl-cell mdl-cell--4-col">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">BCM</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">KTM</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">IGS</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">COW</label>
			  </div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3">SBT/CBT</label>
			  </div>
			</div>
	</div>
	<div class="center">
		<form method="post" action="/universal/index.php" class="center">
			<input type="hidden" name="selectedShip" value="">
			<button type="submit" class="center mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
				 Back
			</button>
		</form>
		<button type="submit" class="center mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
			 Submit
		</button>
	</div>
	</form>
</div>
