<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="bgCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active bg-cover" style="background-image: url('image1.jpg');">
      <div class="carousel-caption d-none d-md-block">
        <h5>First Slide</h5>
        <p>Some description for the first slide.</p>
      </div>
    </div>

    <div class="carousel-item bg-cover" style="background-image: url('image2.jpg');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second Slide</h5>
        <p>Some description for the second slide.</p>
      </div>
    </div>

    <div class="carousel-item bg-cover" style="background-image: url('image3.jpg');">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third Slide</h5>
        <p>Some description for the third slide.</p>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#bgCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#bgCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

</body>
</html>