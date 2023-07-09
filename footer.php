
<footer>
    <!-- <?php wp_footer();?> -->
    <section>
        <?php $widgets = array(
        'fr' => 'footer-menu',
        'en' => 'footer-menu-en',
        );
        $lang = pll_current_language();
        $widget = $widgets[$lang];

        dynamic_sidebar($widget); ?>
    </section>
</footer>

</body>

</div>
</html>