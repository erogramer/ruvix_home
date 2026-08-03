<?php if (element('menu_breadcrumb', $view)) { ?>
	<div class="document-menu-breadcrumb">
		<?php echo render_menu_breadcrumb(element('menu_breadcrumb', $view)); ?>
	</div>
<?php } ?>

<h3><?php echo html_escape(element('doc_title', element('data', $view))); ?></h3>

<?php echo element('content', element('data', $view)); ?>

<?php if (element('doc_pdf_filename', element('data', $view))) { ?>
	<div class="document-pdf">
		<iframe src="<?php echo base_url('uploads/document/' . element('doc_pdf_filename', element('data', $view))); ?>" width="100%" height="500" frameborder="0"></iframe>
		<p><a href="<?php echo base_url('uploads/document/' . element('doc_pdf_filename', element('data', $view))); ?>" target="_blank"><?php echo html_escape(element('doc_pdf_originname', element('data', $view))); ?></a></p>
	</div>
<?php } ?>

<?php if (element('menu_children', $view)) { ?>
	<?php echo render_menu_children_cards(element('menu_children', $view)); ?>
<?php } ?>
