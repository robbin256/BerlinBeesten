<?php
$route = [
    'origin' => 'Generator Berlin Mitte',
    'destination' => 'Fernsehturm Berlin',
    'origin_address' => 'Oranienburger Str. 65, 10117 Berlin',
    'destination_address' => 'Panoramastraße 1A, 10178 Berlin',
    'walk_time' => '± 27 MIN',
    'tram_time' => '± 17 MIN',
];

$maps_url = 'https://www.google.com/maps/dir/?api=1'
    . '&origin=' . rawurlencode($route['origin_address'])
    . '&destination=' . rawurlencode($route['destination_address'])
    . '&travelmode=walking';

$escape = static function (string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};
?>

<section class="bb-route" aria-labelledby="bb-route-title">
    <style>
        body:has(.bb-route) {
            margin: 0;
        }

        main:has(.bb-route) {
            margin: 0;
            padding: 0;
        }

        main:has(.bb-route)>h1 {
            display: none;
        }

        .bb-route {
            --bb-cream: #e9e6db;
            --bb-ink: #0c0c0c;
            --bb-map: #c5c4ba;
            --bb-yellow: #dfff00;
            box-sizing: border-box;
            width: min(100%, 700px);
            margin: 0 auto;
            color: var(--bb-ink);
            background: var(--bb-cream);
            font-family: Arial, Helvetica, sans-serif;
        }

        .bb-route *,
        .bb-route *::before,
        .bb-route *::after {
            box-sizing: border-box;
        }

        .bb-route__intro {
            min-height: 264px;
            padding: 36px 18px 34px;
            border-bottom: 1px solid var(--bb-ink);
        }

        .bb-route__eyebrow,
        .bb-route__label,
        .bb-route__map-label {
            font-size: 8px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .bb-route__eyebrow {
            margin: 0 0 17px;
        }

        .bb-route__title {
            margin: 0;
            max-width: 290px;
            font-size: clamp(42px, 11vw, 76px);
            font-weight: 900;
            line-height: .86;
            letter-spacing: -.055em;
            text-transform: uppercase;
        }

        .bb-route__title span {
            display: block;
            color: transparent;
            -webkit-text-stroke: 1.5px var(--bb-ink);
        }

        .bb-route__map {
            position: relative;
            overflow: hidden;
            height: clamp(340px, 103vw, 490px);
            background: var(--bb-map);
            border-bottom: 1px solid var(--bb-ink);
        }

        .bb-route__map iframe {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .bb-route__directions {
            padding: 28px 17px 79px;
        }

        .bb-route__step {
            display: grid;
            grid-template-columns: 26px 1fr auto;
            column-gap: 0;
            padding: 8px 0 24px;
            border-bottom: 1px solid #aaa89e;
        }

        .bb-route__step+.bb-route__step {
            padding-top: 24px;
        }

        .bb-route__number {
            padding-top: 4px;
            font-size: 9px;
            font-weight: 700;
        }

        .bb-route__mode {
            margin: 0;
            font-size: clamp(19px, 5vw, 28px);
            font-weight: 900;
            line-height: 1;
            letter-spacing: .02em;
        }

        .bb-route__duration {
            align-self: start;
            padding: 6px 7px;
            color: var(--bb-ink);
            font-size: 9px;
            font-weight: 700;
            white-space: nowrap;
            background: var(--bb-yellow);
        }

        .bb-route__description {
            grid-column: 2 / 4;
            max-width: 330px;
            margin: 24px 0 0;
            color: #66645d;
            font-size: 12px;
            line-height: 1.45;
        }

        .bb-route__maps-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 25px;
            padding: 16px;
            color: white;
            font-size: 10px;
            font-weight: 700;
            text-decoration: none;
            background: var(--bb-ink);
        }

        .bb-route__arrow {
            font-size: 22px;
            font-weight: 300;
            line-height: .5;
        }

        @media (min-width: 700px) {
            .bb-route__intro {
                padding-left: 32px;
            }

            .bb-route__directions {
                padding-right: 32px;
                padding-left: 32px;
            }
        }
    </style>

    <div class="bb-route__intro">
        <p class="bb-route__eyebrow">Startpunt: <?php echo $escape($route['origin']); ?></p>
        <h2 class="bb-route__title" id="bb-route-title">
            Van<br>hostel<br>naar<br><span>hoogte.</span>
        </h2>
    </div>

    <div class="bb-route__map">
        <iframe
            title="Interactieve kaart van Generator Berlin Mitte naar de Fernsehturm"
            src="https://maps.google.com/maps?saddr=<?php echo rawurlencode($route['origin_address']); ?>&daddr=<?php echo rawurlencode($route['destination_address']); ?>&dirflg=w&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen></iframe>
    </div>

    <div class="bb-route__directions">
        <div class="bb-route__step">
            <span class="bb-route__number">01</span>
            <h3 class="bb-route__mode">LOPEN</h3>
            <span class="bb-route__duration"><?php echo $escape($route['walk_time']); ?></span>
            <p class="bb-route__description">Loop via Oranienburger Straße richting Monbijouplatz. Steek door naar Hackescher Markt en volg de grote richting Alexanderplatz. Ongeveer 2,1 kilometer.</p>
        </div>
        <div class="bb-route__step">
            <span class="bb-route__number">02</span>
            <h3 class="bb-route__mode">TRAM M5</h3>
            <span class="bb-route__duration"><?php echo $escape($route['tram_time']); ?></span>
            <p class="bb-route__description">Loop naar halte Monbijouplatz. Neem tram M5 richting Hohenschönhausen en stap uit bij Alexanderplatz. Vanaf daar is het nog ongeveer vijf minuten lopen.</p>
        </div>
        <a class="bb-route__maps-link" href="<?php echo $escape($maps_url); ?>" target="_blank" rel="noopener noreferrer">
            <span>OPEN ROUTE IN MAPS</span><span class="bb-route__arrow" aria-hidden="true">→</span>
        </a>
    </div>
</section>