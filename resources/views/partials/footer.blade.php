<footer>

    <!-- Info footer -->
    <div class="row d-flex">
        <div class="info d-flex">
            <div class="property">
                <p class="text-strong">Boolando s.r.l.</p>
                <ul>
                    <li v-for="(item, index) in footerMenu" :key="index"><a :href="item.href">{{ item.text }}</a></li>
                </ul>
            </div>
            <div class="social">
                <p>Trovaci anche su</p>
                <ul>
                    <li v-for="(icon, index) in icons" :key="index"><i :class="[icon.icon]"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Info footer -->

</footer>
