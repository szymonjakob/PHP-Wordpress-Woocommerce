<?php
add_action( 'woocommerce_register_form', 'terms_and_conditions_to_registration', 20 );
function terms_and_conditions_to_registration() {
    if ( wc_get_page_id( 'terms' ) > 0 && is_account_page() ) {
        ?>
        <p class="form-row terms wc-terms-and-conditions">
            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) ), true ); ?> id="terms" /> <span><?php printf( __( 'Przeczytałam/em i akceptuję <a href="%s" target="_blank" class="woocommerce-terms-and-conditions-link">regulamin</a>', 'woocommerce' ), esc_url( wc_get_page_permalink( 'terms' ) ) ); ?></span> <span class="required">*</span>
            </label>
            <input type="hidden" name="terms-field" value="1" />
        </p>
    <?php
    }
}
