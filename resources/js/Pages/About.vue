<template>
    <div>
        <div>
            <h1 v-text="'Hello ' + title"></h1>
        </div>
        <div>
            <Link href="/home">Home</Link> ||
            <Link href="/about">About</Link>
            <!-- <inertia-link href="/about">About</inertia-link> ||
            <inertia-link href="/home">Home</inertia-link> -->
        </div>
        <Head title="Latih" />
    </div>
</template>
<script>
import { Head } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Head,
        Link,
    },
    props: ["title"],
};
</script>
