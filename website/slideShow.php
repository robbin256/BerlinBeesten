<div class="slideshowContainer">
  <h1 class="title" style="margin-left: 5vw;">DE <br> TOREN <br> IN <br> BEELD.</h1>
  <div class="slideshow">
    <figure class="slide active">
      <img src="https://images.unsplash.com/photo-1555937184-e0e27c09f0e6?auto=format&amp;fit=crop&amp;w=1800&amp;q=85" alt="De Berliner Fernsehturm tijdens het gouden uur">
      <figcaption>Foto: <a href="https://unsplash.com/@maxsaeling" target="_blank" rel="noopener noreferrer">Max Saeling</a> · <a href="https://unsplash.com/@maxsaeling" target="_blank" rel="noopener noreferrer">@maxsaeling</a></figcaption>
    </figure>
    <figure class="slide">
      <img src="https://images.unsplash.com/photo-1604169693370-e4cc769136c4?auto=format&amp;fit=crop&amp;w=1800&amp;q=85" alt="De Fernsehturm vanuit een laag standpunt onder een bewolkte lucht">
      <figcaption>Foto: <a href="https://unsplash.com/@chris_reyem" target="_blank" rel="noopener noreferrer">Chris Reyem</a> · <a href="https://unsplash.com/@chris_reyem" target="_blank" rel="noopener noreferrer">@chris_reyem</a></figcaption>
    </figure>
    <figure class="slide">
      <img src="https://images.unsplash.com/photo-1642764984366-08735318f351?auto=format&amp;fit=crop&amp;w=1800&amp;q=85" alt="De Fernsehturm boven de daken van Berlijn">
      <figcaption>Foto: <a href="https://unsplash.com/@medion4you" target="_blank" rel="noopener noreferrer">Norbert Braun</a> · <a href="https://unsplash.com/@medion4you" target="_blank" rel="noopener noreferrer">@medion4you</a></figcaption>
    </figure>
    <figure class="slide">
      <img src="https://images.unsplash.com/photo-1597932526087-f80dc479cba0?auto=format&amp;fit=crop&amp;w=1800&amp;q=85" alt="De televisietoren tegen een heldere blauwe lucht">
      <figcaption>Foto: <a href="https://unsplash.com/@huefnerdesign" target="_blank" rel="noopener noreferrer">Tim Hüfner</a> · <a href="https://unsplash.com/@huefnerdesign" target="_blank" rel="noopener noreferrer">@huefnerdesign</a></figcaption>
    </figure>
  </div>
  <div class="slideControls">
    <button class="prev" type="button" onclick="changeSlide(-1)" aria-label="Vorige foto">&#10094;</button>
    <button class="next" type="button" onclick="changeSlide(1)" aria-label="Volgende foto">&#10095;</button>
  </div>
</div>


  <style>
    *,
    html {
      margin: 0;
      color: white;
    }

    .title {
      font-family: 'Archivo Black', sans-serif;
      font-size: 60px;
      line-height: 0.8;
      margin-top: 5vh;
      margin-bottom: 5vh;
    }


    .slideshowContainer {
      display: flex;
      flex-direction: column;
      position: relative;
      width: 100%;
      height: 600px;
      overflow: hidden;
      background-color: black;
      padding-bottom: 20px;
    }

    .slideshow {
      display: flex;
      align-self: center;
      width: 90vw;
      height: 55%;
      position: relative;
      transition: transform 0.5s ease-in-out;
      background-color: black;
      padding-bottom: 20px;
    }

    .slide {
      display: none;
      min-width: 100%;
      height: 100%;
      margin: 0;
      position: relative;
      opacity: 1;
      transition: opacity 0.5s ease-in-out;
    }

    .slide.active {
      display: flex;
      position: absolute;
      inset: 0;
      flex-direction: column;
    }

    .slide img {
      display: block;
      width: 100%;
      height: 100%;
      min-height: 0;
      object-fit: cover;
    }

    .slide figcaption {
      position: absolute;
      bottom: 12px;
      left: 16px;
      z-index: 1;
      color: white;
      font-size: 14px;
      font-weight: bold;
      text-shadow: 0 1px 4px black;
    }

    .slide figcaption a {
      color: inherit;
      text-decoration: none;
    }

    .slide figcaption a:hover {
      text-decoration: underline;
    }

    .slideControls {
      position: absolute;
      right: 5vw;
      bottom: 20px;
      z-index: 2;
      display: flex;
      gap: 4px;
    }

    .slideControls button {
      width: 46px;
      height: 46px;
      border: 0;
      background-color: #d7ff00;
      color: #111;
      font-size: 22px;
      cursor: pointer;
    }

    .slideControls button:hover {
      background-color: #c4e900;
    }
  </style>

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function changeSlide(direction) {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + direction + slides.length) % slides.length;
      slides[currentSlide].classList.add('active');
    } // Change slide every 5 seconds
  </script>