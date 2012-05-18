<?php
$cpm_active_menu = __( 'Milestones', 'cpm' );

require_once CPM_PLUGIN_PATH . '/admin/views/project/header.php';
?>

<h2><?php _e( 'Milestones', 'cpm' ) ?> <a id="cpm-add-milestone" href="<?php echo cpm_url_new_milestone( $project_id ) ?>" class="add-new-h2"><?php _e( 'Add Milestone', 'cpm' ) ?></a></h2>

<?php
$milestone_obj = CPM_Milestone::getInstance();
$milestones = $milestone_obj->get_by_project( $project_id );
$task_obj = CPM_Task::getInstance();

$completed_milestones = array();
$late_milestones = array();
$upcoming_milestones = array();

if ( $milestones ) {
    foreach ($milestones as $milestone) {
        $due = strtotime( $milestone->due_date );
        $is_left = cpm_is_left( time(), $due );
        $milestone_completed = (int) $milestone->completed;

        if ( $milestone_completed ) {
            $completed_milestones[] = $milestone;
        } else if ( $is_left ) {
            $upcoming_milestones[] = $milestone;
        } else {
            $late_milestones[] = $milestone;
        }
    }
}
//var_dump( $completed_milestones, $upcoming_milestones, $late_milestones );
?>

<div class="cpm-milestones">
    <?php if ( $late_milestones ) { ?>

        <h3>Late Milestones</h3>
        <?php
        foreach ($late_milestones as $milestone) {
            cpm_show_milestone( $milestone, $project_id );
        }
        ?>
    <?php } ?>

    <?php if ( $upcoming_milestones ) { ?>

        <h3>Upcoming Milestones</h3>
        <?php
        foreach ($upcoming_milestones as $milestone) {
            cpm_show_milestone( $milestone, $project_id );
        }
        ?>
    <?php } ?>

    <?php if ( $completed_milestones ) { ?>
        
        <h3>Completed Milestones</h3>
        <?php
        foreach ($completed_milestones as $milestone) {
            cpm_show_milestone( $milestone, $project_id );
        }
        ?>
    <?php } ?>
</div>