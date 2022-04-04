<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import {Head} from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Home"/>

    <BreezeAuthenticatedLayout>

        <main class="main">

            <div class="container">
                <div class="row first-block">
                    <div class="col-sm-8">
                        <section class="pharmaceuticals-card mb-2">
                            <img class="card-img" src="img/Pic.png" alt="Pic">
                            <div class="text">
                                <div class="text-title">Pharmaceuticals</div>
                                <h4 class="text-header">A Sure Way To Get Rid Of Your Back Ache Problem</h4>
                                <p class="text-block">
                                    If you have tried everything, but still seem to suffer from snoring, don’t give up. Before
                                    turning to surgery, consider shopping for anti-snore devices. These products do not
                                    typically require a prescription, are economically priced and may just be the answer that
                                    you are looking for. However, as is the case when shopping for anything, there are a lot of
                                    anti-snore devices out there and...
                                </p>
                                <div class="blog-card-footer">
                                    <span class="blog-card-footer__date">28 Feb 2021</span>
                                    <span class="blog-card-footer__autohor">Jim Sullivan</span>
                                    <span class="blog-card-footer__time">
                                    <i class="fa-solid fa-clock"></i>
                                    6 min read
                                </span>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-4">
                        <div class="news">
                            <div class="news-body">
                                <h5 class="news-title">Our Latest News</h5>
                                <a href="" class="news-item">
                                    <div class="news-item__image">
                                        <img src="img/pic-card-1.png" alt="pic-card-1">
                                    </div>
                                    <p class="news-item__text">Hearing Aids To Best Suit Your Needs</p>
                                </a>
                                <a href="" class="news-item">
                                    <div class="news-item__image">
                                        <img src="img/pic-card-2.png" alt="pic-card-2">
                                    </div>
                                    <p class="news-item__text">Lasik Surgery Frequently Asked Questions</p>
                                </a>
                                <a href="" class="news-item">
                                    <div class="news-item__image">
                                        <img src="img/pic-card-3.png" alt="pic-card-2">
                                    </div>
                                    <p class="news-item__text">Genital Warts How To Avoid Them</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="blog-card">
                    <img class="card-img" src="img/card-2.png" alt="card-2">
                    <div class="text">
                        <div class="text-title">Pharmaceuticals</div>
                        <h4 class="text-header">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                        <p class="text-block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst ut senectus ut purus odio amet
                            lorem. Malesuada ridiculus elementum tempus, nullam. Morbi volutpat nulla vel proin viverra
                            adipiscing. Mi euismod morbi congue malesuada. Et sed aliquet ullamcorper nibh amet vitae accumsan.
                            Viverra arcu vitae risus pellentesque nec arcu. Feugiat habitant sodales vel.
                        </p>
                        <div class="blog-card-footer">
                            <span class="blog-card-footer__date">28 Feb 2021</span>
                            <span class="blog-card-footer__autohor">Jim Sullivan</span>
                            <span class="blog-card-footer__time">
                           <i class="fa-solid fa-clock"></i>
                           6 min read
                       </span>
                        </div>
                    </div>
                </section>
                <!--    card 6-->

                <div class="row">
                    <a v-for="post in posts.data" :key="post.id" :href="route('posts.edit', post.id)" class="card col-sm-4">
                        <img :src="post.img" class="card-img-top" alt="blog-card-2">
                        <div class="card-body">
                            <div class="card-title">{{ post.title }}</div>
                            <p class="card-text" v-html="post.description"/>
                        </div>
                        <div class="blog-card-footer">
                            <span class="blog-card-footer__date">{{ post.created_at}}</span>
                            <span class="blog-card-footer__autohor">{{ post.user.name}}</span>
                            <span class="blog-card-footer__time">
                           <i class="fa-solid fa-clock"></i>
                           6 min read
                       </span>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </BreezeAuthenticatedLayout>
    <!--Pagination-->
    <pagination :links="posts.links" />
<!--    <nav class="pagination-wrap">-->
<!--        <div class="container mt-4">-->
<!--            <ul class="pagination justify-content-center">-->
<!--                <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-arrow-left"></i></a></li>-->
<!--                <li class="page-item active" aria-current="page">-->
<!--                    <span class="page-link">1</span>-->
<!--                </li>-->
<!--                <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                <span class="separate">…</span>-->
<!--                <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-arrow-right"></i></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination";

export default {
    components: {
        Link,
        Pagination,
    },
    methods: {
        visible(index) {
            console.log(index + ' : ' + index % 3);
            return true;
        },
    },
    props: {
        posts: Object,
    },
};
</script>
