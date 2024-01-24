<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title> Create Data Acara & mdash; yukNikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <div class="section-header-back">
  <a href="<?=base_url('acara')?>" class="btn "><i class="fas fa-arrow-left"></i></a>
  </div>
  <h1>Create Data Acara</h1>
  </div>
  <div class="section-body">
  <div class="card">
  <div class="card-header">
 <h4>Nambah Data Acara</h4>
  </div>
  <div class="card-body col-md-6 ">
    <form action="<?=site_url('acara')?>" method="post" autocomplete="off">
        <div class="form-group">
            <label>Name Acara * </label>
            <input type="text" name="name_acara" class="form-control" required autofocus>
</div>
<div class="form-group">
            <label>Tanggal Acara * </label>
            <input type="date" name="date_acara" class="form-control" required>
</div>
<div class="form-group">
            <label>Acara Description * </label>
            <textarea name="acara_description" class="form-control"></textarea> 
</div>
<div>
    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane">Save</i></button>
    <button type="submit" class="btn btn-secondary">Reset</button>
</div>
</div>
  </div>
 </section>
<?= $this->endSection() ?>