<?php
/**
 * Dashboard widget for motivational quotes.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register the dashboard widget near the top of the normal column.
 */
function dg_register_motivation_widget() {
    wp_add_dashboard_widget(
        'dg_motivation_widget',         // Widget slug.
        'Daily Motivation',             // Widget title.
        'dg_render_motivation_content', // Display callback.
        null,
        null,
        'normal',                       // Column: normal (left) or side (right).
        'high'                          // Priority: high puts it near the top.
    );
}
add_action( 'wp_dashboard_setup', 'dg_register_motivation_widget' );

/**
 * Move the widget to the very top of the normal dashboard column.
 */
function dg_prioritize_motivation_widget() {
    global $wp_meta_boxes;

    if ( empty( $wp_meta_boxes['dashboard']['normal']['high']['dg_motivation_widget'] ) ) {
        return;
    }

    $widget = $wp_meta_boxes['dashboard']['normal']['high']['dg_motivation_widget'];
    unset( $wp_meta_boxes['dashboard']['normal']['high']['dg_motivation_widget'] );

    $wp_meta_boxes['dashboard']['normal']['high'] =
        [ 'dg_motivation_widget' => $widget ] + $wp_meta_boxes['dashboard']['normal']['high'];
}
add_action( 'wp_dashboard_setup', 'dg_prioritize_motivation_widget', 100 );

/**
 * Render the widget content.
 */
function dg_render_motivation_content() {
                    $quotes = [
        'A man is literally what he thinks, his character being the complete sum of all his thoughts. – James Allen',
        'Act is the blossom of thought, and joy and suffering are its fruits; – James Allen',
        'Man is made or unmade by himself; – James Allen',
        'Man holds the key to every situation, and contains within himself that transforming and regenerative agency by which he may make himself what he wills. – James Allen',
        "Man's mind may be likened to a garden, which may be intelligently cultivated or allowed to run wild; – James Allen",
        'Every thought-seed sown or allowed to fall into the mind, and to take root there, produces its own, blossoming sooner or later into act, and bearing its own fruitage of opportunity and circumstance. – James Allen',
        'Our life is frittered away by detail. – Henry David Thoreau',
        'Simplicity, simplicity, simplicity! – Henry David Thoreau',
        'Simplify, simplify. – Henry David Thoreau',
        'Things do not change; we change. – Henry David Thoreau',
        'Love your life, poor as it is. – Henry David Thoreau',
        'The fault-finder will find faults even in paradise. – Henry David Thoreau',
        'Trust thyself: every heart vibrates to that iron string. – Ralph Waldo Emerson',
        'To believe your own thought, to believe that what is true for you in your private heart is true for all men,—that is genius. – Ralph Waldo Emerson',
        'A foolish consistency is the hobgoblin of little minds, adored by little statesmen and philosophers and divines. – Ralph Waldo Emerson',
        'Nothing can bring you peace but yourself. – Ralph Waldo Emerson',
        'The great man is he who in the midst of the crowd keeps with perfect sweetness the independence of solitude. – Ralph Waldo Emerson',
        'Self-trust is the essence of heroism. – Ralph Waldo Emerson',
        'Look within; within is the fountain of all good. – Marcus Aurelius',
        "The art of true living in this world is more like a wrestler's, than a dancer's practice. – Marcus Aurelius",
        'The best kind of revenge is, not to become like unto them. – Marcus Aurelius',
        'Use thyself even unto those things that thou doest at first despair of. – Marcus Aurelius',
        'That which is not good for the bee-hive, cannot be good for the bee. – Marcus Aurelius',
        'Whatsoever it be that happens unto thee, it is that which from all time was appointed unto thee. – Marcus Aurelius',
        'The noblest question in the world is, What good may I do in it? – Benjamin Franklin',
        'The masterpiece of man is to live to the purpose. – Benjamin Franklin',
        'Well done is better than well said. – Benjamin Franklin',
        'Who has deceived thee so oft as thyself? – Benjamin Franklin',
        'He that can have patience, can have what he will. – Benjamin Franklin',
        'Read much, but not too many books. – Benjamin Franklin',
    ];

    $random_quote = $quotes[ array_rand( $quotes ) ];
    $parts = array_map( 'trim', explode( '–', $random_quote, 2 ) );
    $quote_text = $parts[0] ?? '';
    $quote_author = $parts[1] ?? '';
    ?>
    <div class="dg-widget-wrapper">
        <span class="dg-icon">💡</span>
        <p class="dg-quote">"<?php echo esc_html( $quote_text ); ?>"</p>
        <?php if ( $quote_author ) : ?>
            <p class="dg-author">— <?php echo esc_html( $quote_author ); ?></p>
        <?php endif; ?>
    </div>
    <?php
}
