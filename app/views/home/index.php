<h1>Halo nama saya <?=$data['nama']?>.</h1>
<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>
<div class="card">
    <div id="carouselExampleRide" class="card-body carousel slide" data-bs-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= BASEURL; ?>/img/ss.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= BASEURL; ?>/img/ss.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= BASEURL; ?>/img/ss.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
