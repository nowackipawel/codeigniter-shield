<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.email2FATitle') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="container d-flex justify-content-center p-5">
	<div class="card col-5 shadow-sm">
		<div class="card-body">
			<h5 class="card-title mb-5"><?= lang('Auth.emailEnterCode') ?></h5>

			<p><?= lang('Auth.emailConfirmCode') ?></p>

			<?php if (session('error') !== null) : ?>
			<div class="alert alert-danger"><?= session('error') ?></div>
			<?php endif ?>

			<form action="<?= site_url('auth/a/verify') ?>" method="post">
				<?= csrf_field() ?>

				<!-- Code -->
				<div class="mb-2">
					<input type="text" class="form-control" name="code" autocomplete="code" placeholder="000000" required />
				</div>

				<div class="d-grid col-8 mx-auto m-3">
					<button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.confirm') ?></button>
				</div>

			</form>
		</div>
	</div>
</div>

<?= $this->endSection() ?>
