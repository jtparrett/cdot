<?php

$this->inc('includes/doc_head.php');
$a = new Area('banner');
$a->display();
?>

<main class="main">
    <section class="section">
        <div class="wrapper">
            <div class="grid grid--3-col">
                <div class="grid__center">
                    <blockquote class="quote quote--dark quote--large">
                        <div class="quote__image">
                            <img src="http://picsum.photos/130/130?image=973" alt=""/>
                        </div>
                        <p class="quote__copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non
                            dignissim metus. Sed at eros eros. Etiam sed vehicula nisl, sed finibus dui. Cras consequat
                            diam a molestie tristique. Curabitur nibh enim, tempus id ante at, interdum gravida
                            augue.</p>
                        <cite class="quote__cite">Name Here</cite>
                    </blockquote>
                </div>

                <div>
                    <a href="#">
                        <article class="card">
                            <img src="http://picsum.photos/378/500?image=973" alt="" class="card__image"/>
                            <span class="price">&pound;25</span>
                            <header class="card__header">
                                <span class="tag">Guide</span>
                                <h1 class="card__title">Training plan headline</h1>
                                <p class="card__copy">Nulla venenatis tempor dui in molestie. Nulla quis dictum purus,
                                    sit amet porttitor est. Quis dictum purus, sit amet porttitor est.</p>
                            </header>
                        </article>
                    </a>
                </div>

                <div>
                    <a href="#">
                        <article class="card">
                            <img src="http://picsum.photos/378/500?image=973" alt="" class="card__image"/>
                            <span class="price">&pound;25</span>
                            <header class="card__header">
                                <span class="tag">Guide</span>
                                <h1 class="card__title">Training plan headline</h1>
                                <p class="card__copy">Nulla venenatis tempor dui in molestie. Nulla quis dictum purus,
                                    sit amet porttitor est. Quis dictum purus, sit amet porttitor est.</p>
                            </header>
                        </article>
                    </a>
                </div>
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
