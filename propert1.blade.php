<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .imag-grid{
            --gap: 16px;
            --num-cols: 4;
            --row-height: 300px;

            box-sizing: border-box;
            padding: var(--gap);
            
            display: grid;
            grid-template-columns: repeat(var(--num-cols), 1fr);
            grid-auto-rows: var(--row-height);
            gap: var(--gap);
        }
        .imag-grid >img{
            width: 100%;
            height: 100%;
            object-fit:cover;
        }
        .imag-grid-col-2{
            grid-column: span 2;
        }
        .imag-grid-row-2{
            grid-row: span 2;
        }
        /*Responsivité */
        @media screen and (max-width: 1024px) {
            .imag-grid{
                --num-cols:2;
                --row-height: 200px;
            }
        }
        @media screen and (max-width: 1024px) {
            iframe{
                width:auto;
                justify-content: center;
            }
        }
        h1{
            text-align: center;
            justify-content: center;
        }
        .i{
            display: flex;
            justify-content: space-between;
        }
        .i img{
            width: 18px;
            height: 18px;
        }
        .clearfix{
            margin: 10px;
        }
        .l{
            display: flex;
            justify-content: space-between;
        }
        .l1{
            display: flex;
        }
        .l img{
            width: 18px;
            height: 18px;
        }
        .poli{
            display: flex;
        }
        .poli img{
            width: 15px;
            height: 15px;
        }

    </style>
</head>
<body>
<!-- Grille d'image -->
<div class="imag-grid">
    <img class="imag-grid-col-2 imag-grid-row-2" src="assets\img\p1.png" alt="gallery">
    <img src="assets\img\p2.png" alt="gallery">
    <img src="assets\img\p3.png" alt="gallery">
    <img src="assets\img\p4.png" alt="gallery">
    <img src="assets\img\p5.png" alt="gallery">
</div><br>

<!-- Rhoncus suspendisse -->

<div class="clearfix">

  <img src="assets\img\p2.png" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
  <h2 class="a">Rhoncus suspendisse</h2>
  <p>London, Notthing Hill</p><br>
  <div class="l">
        <div class="l1">
            <img src="assets\img\f2.png" alt="">
            <p>2 bedroom</p>
        </div>
        <div class="l1">
            <img src="assets\img\f1.png" alt="">
            <p>2 bath</p>
        </div>

        <p>500 sq.ft|City view | 3rd floor | Elevator</p>

  </div><br><br>
  <h2>Description</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, distinctio architecto recusandae praesentium earum optio hic accusamus expedita nobis at reiciendis labore illo! Illo odio omnis optio voluptatem dignissimos cupiditate sunt libero. Totam fugit aliquid mollitia suscipit, sunt beatae, ullam magnam doloribus nulla vitae atque numquam possimus dolorem asperiores quasi iste necessitatibus esse, delectus praesentium. Labore excepturi amet vitae officiis.
  </p><br>
  <h3>In sed</h3>
  <p>
     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui iure nemo laborum, eveniet voluptatibus hic rem iste non minus magni pariatur magnam adipisci ut! Labore soluta earum nostrum magnam nihil.
  </p><br>
  <h3>Adipiscing risus, fermentum</h3>
  <p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur facere dignissimos odit amet, veritatis sequi. Repellendus dignissimos numquam ratione?
  </p>


</div>

<!-- Partie icône-->
<h1>Amenities</h1><br>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
        <div class="i">
            <p>
                TV <br>Flatscreen TV
            </p>
            <img src="assets\img\l1.png" alt="">        
        </div>
        <div class="i">
            <p>
                Fireplace
            </p>
            <img src="assets\img\l2.png" alt=""> 
        </div>
        <div class="i">
            <p>
                Phone
            </p>
            <img src="assets\img\l4.png" alt=""> 
        </div>
        <div class="i">
            <p>
                Work desk  <br>
                With computer
            </p>
            <img src="assets\img\l6.png" alt=""> 
        </div>
    </div>
    <div class="col">
    <div class="i">
            <p>
                Fridge
            </p>
            <img src="assets\img\l7.png" alt=""> 
        </div>
        <div class="i">
            <p>
                Kettle
            </p>
            <img src="assets\img\l5.png" alt=""> 
        </div>
        <div class="i">
            <p>
                Coffee machine
            </p>
            <img src="assets\img\l3.png" alt=""> 
        </div>
        <div class="i">
            <p>
                Dishes
            </p>
            <img src="assets\img\l12.png" alt=""> 
        </div>
    </div>
    <div class="col">
    <div class="i">
            <p>
                Washing machine
            </p>
            <img src="assets\img\l11.png" alt=""> 
        </div>
        <div class="i">
            <p>
               Dryer
            </p>
            <img src="assets\img\l10.png" alt=""> 
        </div>
        <div class="i">
            <p>
                Iron
            </p>
            <img src="assets\img\l8.png" alt=""> 
        </div>
        <div class="i">
            <p>
                Wardrobe
            </p>
            <img src="assets\img\l9.png" alt=""> 
        </div>
    </div>
  </div>
</div>

<!-- Partie neighbourhood -->
<h1>Neighbourhood</h1><br>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias officia, reprehenderit laborum amet quae voluptate quas incidunt. Tenetur, dolorum iure.</p>
<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore illum inventore eaque pariatur accusantium iste dolore praesentium dolorum, officiis animi sunt recusandae esse quisquam unde eligendi maiores. Reprehenderit quasi quos sint non aliquam quas eum minima laboriosam id earum. Quisquam!
</p>
<!-- Carte de localisation -->
<h1>Location</h1><br>
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.0267746379027!2d-17.467222726752027!3d14.711077974365988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173e83be0d14b%3A0x1717e5fee409822b!2sDefar%20Sci!5e0!3m2!1sfr!2ssn!4v1699632457184!5m2!1sfr!2ssn" width="1300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div><br><br><br>
<!-- Policy details --><!-- -->
<h1>Policy details</h1>
<div class="container text-center">
  <div class="row">
    <div class="col">
    <h3>House rules</h3>
        <div class="poli">
            <img src="assets\img\i1.png" alt="">
            <p>Checkin time</p>
        </div>
        <div class="poli">
        <img src="assets\img\i1.png" alt="">
            <p>Checkout time</p>
        </div>
        <div class="poli">
        <img src="assets\img\i2.png" alt="">
            <p>No smoking</p>
        </div>
        <div class="poli">
        <img src="assets\img\i.png" alt="">
            <p>No pets</p>
        </div>
        <div class="poli">
        <img src="assets\img\i3.png" alt="">
            <p>No parties or events</p>
        </div>
    </div>
    <div class="col order-1">
        <h3>Cancellation Policy</h3>
        <div>
        <img src="assets\img\i1.png" alt="">
            Free Cancellation up to 24hrs <br>before checkin
        </div>
    </div>
    <div class="col order-5">
        <h3>Health & Safty</h3>
        <div>
        <img src="assets\img\i5.png" alt="">
            Cleaner in accordance with our <br> COVID safe cleaning policy
        </div>
    </div>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>