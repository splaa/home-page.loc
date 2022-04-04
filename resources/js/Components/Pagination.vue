<template>
        <nav class="pagination-wrap">
            <div class="container mt-4" v-if="links.length > 3">
                <ul class="pagination justify-content-center">
                <template v-for="(link, key) in links">
                    <li class="page-item" v-if="key >= 4 && link.url === null" :key="key">
                        <a class="page-link" href="#">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </li>
                    <li v-else-if="key !== 0 && link.url !== null && links.length-1 !== key " class="page-item" :class="{ ' active': link.active }"  aria-current="page" >
                        <a class="page-link" :href="link.url">{{ key }}</a>
                    </li>
                    <span class="separate"  v-if="key > links.length > 4">…</span>
                    <li class="page-item" v-if="link.label === 'Next &raquo;'">
                        <a class="page-link" :href="link.url">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                </template>
                </ul>
            </div>
        </nav>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },

    props: {
        links: Array,
    },

};
</script>
