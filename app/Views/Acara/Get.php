<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Acara &mdash; yukNikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
 <div class="section-header">
  <h1>Data Acara</h1>
  <div class="section-header-button">
  <a href="<?=site_url('acara/add')?>" class="btn btn-primary">add new</a>
  </div>
  </div>
  <?php if(session()->getFlashdata('success')):?>
    <div class ="alert alert-success alert-dismissible show fade">
      <div class ="alert-body">
        <button class ="close" data-dismiss="alert">x</button>
        <b>Success !</b>
        <?=session()->getFlashdata('success')?>
  </div>
  </div>
  <?php endif;?>
  <div class="section-body">
  <div class="card">
  <div class="card-header">
 <h4> Data Acara</h4>
  </div>
  <div class="card body table-responsive">
  <table class="table table-bordered table-md">
                        <tbody><tr>
                          <th>#</th>
                          <th>Nama Acara</th>
                          <th>Tanggal Acara</th>
                          <th>Acara Description</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach ($acara as $key => $value): ?>
                        <tr>
                          <td><?=$key + 1?></td>
                          <td><?=$value->name_acara?></td>
                          <td><?=date('d/m/y', strtotime($value->date_acara))?></td>
                          <td><?=$value->acara_description?></td>
                        <td>
                        <a href="<?=site_url('acara/edit/'.$value->id_acara)?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                        <form action="<?=site_url('acara/'.$value->id_acara)?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                        </button>
                        </form>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                      </tbody>
</table>
</section>
<?= $this->endSection() ?>