<section class="c-contact container-fluid g-1 p-0">
    <div class="row">
        <div class="col-12 text-center">
            <h4>Contact Us</h4>
        </div>
        <div class="col-md-4 text-center">
            <p>1385 Woodroffee Ave.</p>
        </div>
        <div class="col-md-4 text-center">
            <p>Number: 343-988-4869</p>
        </div>
        <div class="col-md-4 text-center">
            <p><a href="mailto:chen0969@algonquinlive.com">Email: chen0969@algonquinlive.com</a></p>
        </div>
    </div>
</section>
<section class="c-chicago_custome">
    <ul>
        <?php
        $columns = [
            "Woodworks" => "https://dev-chen0969.pantheonsite.io/",
            "Portfolio" => "https://broccoli-design.great-site.net/index.html",
            "Photos" => "https://broccolidesign.myportfolio.com/"
        ];

       
        foreach ($columns as $label => $url) {
            echo '<li class="page_item text-center">';
            echo "<a href='$url'>$label</a>";
            echo '</li>';
        }
        ?>
    </ul>
</section>