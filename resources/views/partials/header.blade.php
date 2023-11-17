<header>
    <div class="top-fixed">
        <div class="topbar d-flex container">
            <div class="menu d-flex">
                <ul>
                    <li v-for="(item, index) in topbarMenu" :key="index"><a :href="item.href">{{ item.text }}</a></li>
                </ul>
            </div>
            <div class="logo d-flex"></div>
            <div class="menu-account d-flex">
                <p v-for="(icon, index) in icons" :key="index"><i :class="[icon.icon]"></i></p>
            </div>
        </div>
    </div>
</header>
