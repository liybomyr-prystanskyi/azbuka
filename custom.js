document.addEventListener('DOMContentLoaded', function () {
    if (jQuery('a.formPopup')) {
        jQuery('a.formPopup').on('click', function () {
            let $this = jQuery(this);
            let data = $this.data('form');
            jQuery('#form-ident').val('');
            jQuery('#form-ident').val(data);
        });
    }
});