<?php
/**
 * Month View Grid Loop
 * This file sets up the structure for the month grid loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/loop-grid.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php
$days_of_week = tribe_events_get_days_of_week();
$week = 0;
global $wp_locale;
?>

<?php do_action( 'tribe_events_before_the_grid' ) ?>
	<table class="tribe-events-calendar">
		<thead class="tribe-events-calendar-header">
		<tr class="tribe-events-calendar-row">
			<?php foreach ( $days_of_week as $day ) : ?>
				<th class="tribe-events-calendar-cell -heading" id="tribe-events-<?php echo esc_attr( strtolower( $day ) ); ?>" title="<?php echo esc_attr( $day ); ?>" data-day-abbr="<?php echo esc_attr( $wp_locale->get_weekday_abbrev( $day ) ); ?>"><?php echo $day ?></th>
			<?php endforeach; ?>
		</tr>
		</thead>
		<tbody class="tribe-events-calendar-body">
		<tr class="tribe-events-calendar-row">
			<?php while ( tribe_events_have_month_days() ) : tribe_events_the_month_day(); ?>
			<?php if ( $week != tribe_events_get_current_week() ) : $week ++; ?>
		</tr>
		<tr class="tribe-events-calendar-row">
			<?php endif; ?>

			<?php
			// Get data for this day within the loop.
			$daydata = tribe_events_get_current_month_day(); ?>

			<td class="<?php tribe_events_the_month_day_classes() ?> tribe-events-calendar-cell"
				data-day="<?php echo esc_attr( isset( $daydata['daynum'] ) ? $daydata['date'] : '' ); ?>"
				data-tribejson='<?php echo tribe_events_template_data( null, array( 'date_name' => tribe_format_date( $daydata['date'], false ) ) ); ?>'
				>
				<?php tribe_get_template_part( 'month/single', 'day' ) ?>
			</td>
			<?php endwhile; ?>
		</tr>
		</tbody>
	</table><!-- .tribe-events-calendar -->
<?php
do_action( 'tribe_events_after_the_grid' );
