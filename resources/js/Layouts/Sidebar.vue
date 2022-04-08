<template>
    <div>
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <Link
                                class="sidebar-link sidebar-link"
                                href="index.html"
                                aria-expanded="false"
                                ><i data-feather="home" class="feather-icon"></i
                                ><span class="hide-menu">Dashboard</span></Link
                            >
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap">
                            <span class="hide-menu">Applications</span>
                        </li>

                        <li class="sidebar-item">
                            <Link
                                class="sidebar-link"
                                href="/home"
                                aria-expanded="false"
                                ><i data-feather="tag" class="feather-icon"></i
                                ><span class="hide-menu">Home </span></Link
                            >
                        </li>
                        <li class="sidebar-item">
                            <Link
                                class="sidebar-link"
                                href="/about"
                                aria-expanded="false"
                                ><i data-feather="tag" class="feather-icon"></i
                                ><span class="hide-menu">About </span></Link
                            >
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
};
</script>
