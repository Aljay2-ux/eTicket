<template>
    <Head>
        <title>
            Training Application
        </title>

        <meta
            type="description"
            content="Information about my app"
            head-key="description"
        >
    </Head>

   <section class="p-6 bg-gray-200">
    <header class="flex justify-between">
        <div class="flex items-center">
            <hi class="font-bold text-lg">
            My App
        </hi>

        <p class="text-sm ml-6">
            Welcome Back, {{ username }}!
        </p>
        </div>

        <Nav />

        
    </header>
   </section>

   <section class="p-6">
    <div class="max-w-3xl mx-auto">
    <slot />
    </div>
   </section>
</template>

<script>
// import Nav from "./Nav.vue";
    export default{
        // components: { Nav },

        computed: {
            username() {
                return this.$page.props.auth.user.username;
            },
        },

        props: { username: String }
    };
</script>