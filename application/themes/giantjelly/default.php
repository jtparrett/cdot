<?php

use Concrete\Core\Area\Area;

$this->inc('includes/doc_head.php');
$a = new Area('banner');
$a->display();
?>

<main class="main">
    <section class="section">
        <div class="wrapper">
            <div class="grid grid--3-col">

                <?php
                    $a = new Area('3 col grid');
                    $a->display();
                ?>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrapper">
            <header class="section__header">
                <h1 class="section__title">Latest from the blog</h1>
            </header>

            <div class="grid grid--4-col">
                <div>
                    <a href="#">
                        <article class="article">
                            <img src="http://picsum.photos/378/500?image=973" alt="" class="article__image"/>
                            <header>
                                <span class="article__tag">Health and Fitness</span>
                                <h1 class="article__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    phasellus.</h1>
                                <p class="article__copy">Nulla venenatis tempor dui in molestie. Nulla quis dictum
                                    purus, sit amet porttitor est. Quis dictum purus, sit amet porttitor est…</p>
                            </header>
                        </article>
                    </a>
                </div>

                <div>
                    <a href="#">
                        <article class="article">
                            <img src="http://picsum.photos/378/500?image=973" alt="" class="article__image"/>
                            <header>
                                <span class="article__tag">Health and Fitness</span>
                                <h1 class="article__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    phasellus.</h1>
                                <p class="article__copy">Nulla venenatis tempor dui in molestie. Nulla quis dictum
                                    purus, sit amet porttitor est. Quis dictum purus, sit amet porttitor est…</p>
                            </header>
                        </article>
                    </a>
                </div>

                <div>
                    <a href="#">
                        <article class="article">
                            <img src="http://picsum.photos/378/500?image=973" alt="" class="article__image"/>
                            <header>
                                <span class="article__tag">Health and Fitness</span>
                                <h1 class="article__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    phasellus.</h1>
                                <p class="article__copy">Nulla venenatis tempor dui in molestie. Nulla quis dictum
                                    purus, sit amet porttitor est. Quis dictum purus, sit amet porttitor est…</p>
                            </header>
                        </article>
                    </a>
                </div>

                <div>
                    <a href="#">
                        <article class="article">
                            <img src="http://picsum.photos/378/500?image=973" alt="" class="article__image"/>
                            <header>
                                <span class="article__tag">Health and Fitness</span>
                                <h1 class="article__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    phasellus.</h1>
                                <p class="article__copy">Nulla venenatis tempor dui in molestie. Nulla quis dictum
                                    purus, sit amet porttitor est. Quis dictum purus, sit amet porttitor est…</p>
                            </header>
                        </article>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
$this->inc('includes/doc_foot.php');
?>
