<section class="section section--light">
    <div class="wrapper wrapper--slim">
        <header class="section__header">
            <h1 class="section__title section__title--large">
	            <?php
	            $a = new Area('footer title');
	            $a->display();
	            ?>
            </h1>
        </header>

        <div class="grid grid--3-col">
            <?php
                $a = new Area('3 col grid footer');
                $a->display();
            ?>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer__image">
        <img src="http://picsum.photos/1400/1000?image=973" alt=""/>
    </div>

    <div class="wrapper">
        <p class="footer__copy">&copy; Copyright 2017. Cdot Enterprises</p>
    </div>
</footer>
