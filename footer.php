<?php
$isYellow = is_post_type_archive('courses') || is_singular('courses') || is_tax('course_categories', 'adult-courses');
$isViolet = is_page_template('template-international-exams.php') || is_page_template('template-toefl.php');
$bgBase = get_template_directory_uri() . '/html_template/build/assets/img/';
$bg = $bgBase . ($isYellow ? 'modal-window-default.png' : ($isViolet ? 'modal-window-violet.png' : 'modal-window-blue.png'));
?>

<!-- Modal -->
<div class="modal  fade" id="myModal1" data-target="#exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog my-modal">
        <div class="modal-content custome-modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body  modal-style-default ">
                <div class="courses-for-kids__main__content "
                     style="background-image:url('<?php echo $bg; ?>');">

                    <div class="courses-for-kids__main__content__form">
                        <div class="courses-for-kids__main__content__form__subtitle">
                            <?php if ($isYellow || $isViolet) : ?>
                            <h3>Даруємо Вам перше заняття БЕЗКОШТОВНО</h3>
                            <?php else : ?>
                                <h3>Дізнатися вартість перекладу просто зараз</h3>
                            <?php endif; ?>
                        </div>
                        <?php if ($isYellow) : ?>
                            <?php echo do_shortcode('[contact-form-7 id="701" title="Call to action courses pages"]'); ?>
                        <?php elseif ($isViolet) : ?>
                            <?php echo do_shortcode('[contact-form-7 id="702" title="Call to action exams pages"]'); ?>
                        <?php else : ?>
                            <?php echo do_shortcode('[contact-form-7 id="703" title="Call to action" Translations html_class="written__main__form__input-block"]'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog my-modal">
        <div class="modal-content custome-modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body modal-style-default "
                 style="background-image:url('<?php echo $bg; ?>');">
                <div class="my-content modal-style-default">
                    <h2>Дякуємо за заявку !</h2>
                    <p>Протягом дня ми зконтактуємося з вами для уточнення деталей</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('partials/organisms/foot-menu'); ?>

<?php get_template_part('partials/organisms/footer-main'); ?>

<?php wp_footer(); ?>

<?php if (is_page_template('template-contacts.php')) : ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoLs4jh4_7ZW16LDVDAXDPGISWv9RN-x8&callback=initMap"
            async defer></script>

    <!-- Map -->
    <script>
        function getLocations() {
            var locations = [];
            $('.map-target').each(function (index) {
                locations.push({
                    "title": "Location " + (index + 1),
                    "str": $(this).attr('data-str'),
                    "position": {
                        lat: +$(this).attr('data-lat-lng').split(',')[0],
                        lng: +$(this).attr('data-lat-lng').split(',')[1]
                    }
                });
            });
            return locations;
        }

        function initMap() {
            var locations2 = getLocations();
            gmarkers = [];
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: new google.maps.LatLng(49.825013, 24.011276),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow();

            function createMarker(latlng, html) {
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map
                });
                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.setContent(html);
                    infowindow.open(map, marker);
                });
                return marker;
            }

            for (var i = 0; i < locations2.length; i++) {
                gmarkers[locations2[i]['title']] =
                    createMarker(locations2[i]['position'], locations2[i]['str']);
            }
        }
    </script>
<?php endif; ?>

</body>

</html>
